<?php

namespace App\Http\Controllers;

use App\Models\Works;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class worksController extends Controller
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
          $works = Works::get();
          return view('work.index', compact('works'));
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
          return view('work.create');
      }
  
      /**
       * Store a newly created resource in storage.
       */
      public function store(Request $request)
      {
        $data = $request->validate([
            'title' => 'required',
            'link' => 'required',
            'image' => 'required',
          
        ]);
   
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imagePath = $image->store('img', 'public');
            $data['image'] = $imagePath; 
        }  

         Works::create($data);
         return redirect()->route('works.index');
       
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
      public function edit(Works $work)
      {
          //
          if(empty(Auth()->user()->role))
          {
           abort(404);
          } else
          return view('work.edit', compact('work'));
      }
  
      /**
       * Update the specified resource in storage.
       */
      public function update(Request $request, Works $work): RedirectResponse
      {
        $data = $request->validate([
            'title' => 'required',
            'link' => 'required',
            'image' => 'required',
          
        ]);
   
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imagePath = $image->store('img', 'public');
            $data['image'] = $imagePath; 
        }  

         $work->update($data);
  
         return redirect()->route('works.index');
  
      }
  
      /**
       * Remove the specified resource from storage.
       */
      public function destroy(Works $work): RedirectResponse
      {
          //
          $work->delete();
  
          return redirect()->route('works.index');
      }
  }
