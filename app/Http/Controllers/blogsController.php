<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
class blogsController extends Controller
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
          $blogs = Blogs::get();
          return view('blogs.index', compact('blogs'));
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
          return view('blogs.create');
      }
  
      /**
       * Store a newly created resource in storage.
       */
      public function store(Request $request)
      {
        $data = $request->validate([
            'title' => 'required',
            'image' => 'required',
            'content' => 'required',
          
        ]);
   
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imagePath = $image->store('img', 'public');
            $data['image'] = $imagePath; 
        }
         Blogs::create($data);
         return redirect()->route('blogs.index');
       
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
      public function edit(Blogs $blog)
      {
          //
          if(empty(Auth()->user()->role))
          {
           abort(404);
          } else
          return view('blogs.edit', compact('blog'));
      }
  
      /**
       * Update the specified resource in storage.
       */
      public function update(Request $request, Blogs $blog): RedirectResponse
      {
          //
          $data = $request->validate([
            'title' => 'required',
            'image' => 'required',
            'content' => 'required',
          
        ]);
   
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imagePath = $image->store('img', 'public');
            $data['image'] = $imagePath; 
        }
         $blog->update($data);
         
  
         return redirect()->route('blogs.index');
  
      
    }
      /**
       * Remove the specified resource from storage.
       */
      public function destroy(Blogs $blog): RedirectResponse
      {
          //
          $blog->delete();
  
          return redirect()->route('blogs.index');
      }
  }