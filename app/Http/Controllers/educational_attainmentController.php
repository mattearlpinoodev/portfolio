<?php

namespace App\Http\Controllers;

use App\Models\Educational_attainment;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
class educational_attainmentController extends Controller
{
  /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $educational_attainments = Educational_attainment::get();
        return view('educational_attainments.index', compact('educational_attainments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('educational_attainments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
       Educational_attainment::create($request->all());
       return redirect()->route('educational_attainments.index');
     
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
    public function edit(Educational_attainment $educational_attainment)
    {
        //
        return view('educational_attainments.edit', compact('educational_attainment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Educational_attainment $educational_attainment): RedirectResponse
    {
        //
       $educational_attainment->update($request->all());

       return redirect()->route('educational_attainments.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Educational_attainment $educational_attainment): RedirectResponse
    {
        //
        $educational_attainment->delete();

        return redirect()->route('educational_attainments.index');
    }
}

