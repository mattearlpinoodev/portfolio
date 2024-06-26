<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontEndController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $user = DB::table('users')->where('role', 'admin')->get();
        
        $about = DB::table('abouts')->get();

        $skill = DB::table('skills')->get();
        $experience = DB::table('experiences')->get();
        $blogs = DB::table('blogs')->get();
        $works = DB::table('works')->get();
        $webinars = DB::table('webinars')->get();
        $educational_attainment = DB::table('educational_attainments')->get();

         return view('welcome', compact('skill', 'educational_attainment','blogs' , 'experience' ,'about', 'user', 'works', 'webinars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
