<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class experienceController extends Controller
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
          $experiences = Experience::get();
          return view('experience.index', compact('experiences'));
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
          return view('experience.create');
      }
  
      /**
       * Store a newly created resource in storage.
       */
      public function store(Request $request)
      {
          //
         Experience::create($request->all());
         return redirect()->route('experiences.index');
       
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
      public function edit(Experience $experience)
      {
          //
          if(empty(Auth()->user()->role))
          {
           abort(404);
          } else
          return view('experience.edit', compact('experience'));
      }
  
      /**
       * Update the specified resource in storage.
       */
      public function update(Request $request, Experience $experience): RedirectResponse
      {
          //
         $experience->update($request->all());
  
         return redirect()->route('experiences.index');
  
      }
  
      /**
       * Remove the specified resource from storage.
       */
      public function destroy(Experience $experience): RedirectResponse
      {
          //
          $experience->delete();
  
          return redirect()->route('experiences.index');
      }
  }
  
  
