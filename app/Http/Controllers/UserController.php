<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
       if(empty(Auth()->user()->role))
        {
         abort(404);
        } else 
        $users = User::get();
        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        if(empty(Auth()->user()->role))
          {
           abort(404);
          } else
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        {
            $data = $request->validate([
            'avatar' => 'required',
            'role' => 'required',
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
          
        ]);
   
        if($request->hasFile('avatar')){
            $image = $request->file('avatar');
            $imagePath = $image->store('img', 'public');
            $data['avatar'] = $imagePath; 
        }
        User::create($data);
        return redirect()->route('users.index');
    }
       
     
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
        if(empty(Auth()->user()->role))
          {
           abort(404);
          } else
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user): RedirectResponse
    {
        $data = $request->validate([
            'avatar' => 'required',
            'role' => 'required',
            'name' => 'required',
            'email' => 'required',
         
            

          
        ]);
   
        if($request->hasFile('avatar')){
            $image = $request->file('avatar');
            $imagePath = $image->store('img', 'public');
            $data['avatar'] = $imagePath; 
        }
         
        $user->update($data);

        return redirect()->route('users.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $users = User::findOrFail($id);
  
        if ($users->role == "admin") {
            return redirect()->route('users.index')->with('success', 'ADMIN USER CANNOT BE DELETED!!');
        }
  
        $users->delete();
  
        return redirect()->route('users.index')->with('success', 'User has been deleted successfully');
    }
}
