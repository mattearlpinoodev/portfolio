<?php

namespace App\Http\Controllers;

use App\Models\Webinar;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class webinarController extends Controller
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
          $webinars = Webinar::get();
          return view('webinar.index', compact('webinars'));
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
          return view('webinar.create');
      }
  
      /**
       * Store a newly created resource in storage.
       */
      public function store(Request $request)
      {
        $data = $request->validate([
            'certificate' => 'required',
            'agenda' => 'required',
            'host_name' => 'required',
            'date' => 'required',
          
        ]);
   
        if($request->hasFile('certificate')){
            $image = $request->file('certificate');
            $imagePath = $image->store('img', 'public');
            $data['certificate'] = $imagePath; 
        }    


         Webinar::create($data);
         return redirect()->route('webinars.index');
       
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
      public function edit(Webinar $webinar)
      {
          //
          if(empty(Auth()->user()->role))
          {
           abort(404);
          } else
          return view('webinar.edit', compact('webinar'));
      }
  
      /**
       * Update the specified resource in storage.
       */
      public function update(Request $request, Webinar $webinar): RedirectResponse
      {
          
        $data = $request->validate([
            'certificate' => 'required',
            'agenda' => 'required',
            'host_name' => 'required',
            'date' => 'required',
          
        ]);
   
        if($request->hasFile('certificate')){
            $image = $request->file('certificate');
            $imagePath = $image->store('img', 'public');
            $data['certificate'] = $imagePath; 
        }    


        
         $webinar->update($data);
  
         return redirect()->route('webinars.index');
  
      }
  
      /**
       * Remove the specified resource from storage.
       */
      public function destroy(Webinar $webinar): RedirectResponse
      {
          //
          $webinar->delete();
  
          return redirect()->route('webinars.index');
      }
  }