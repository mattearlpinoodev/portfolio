<?php

namespace App\Http\Controllers;


use App\Models\Skill;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
class skillController extends Controller
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
        $skills = Skill::get();
        return view('skills.index', compact('skills'));
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
        return view('skills.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    //    Skill::create($request->all());
    //    return redirect()->route('skills.index');
     $data = $request->validate(
        [
            'skill_name' => 'required',
            'percentage' => 'required',
        ]
        );
        if($data){
            Skill::create($data);
            return redirect()->route('skills.index');
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
    public function edit(Skill $skill)
    {
        //
        if(empty(Auth()->user()->role))
          {
           abort(404);
          } else
        return view('skills.edit', compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skill $skill): RedirectResponse
    {
        //
       $skill->update($request->all());

       return redirect()->route('skills.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill): RedirectResponse
    {
        //
        $skill->delete();

        return redirect()->route('skills.index');
    }
}


