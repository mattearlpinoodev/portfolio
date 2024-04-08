<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\Contact;
use App\Models\Educational_attainment;
use App\Models\Experience;
use App\Models\Skill;
use App\Models\User;
use App\Models\Webinar;
use App\Models\Works;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userCount = User::count();
        $experienceCount = Experience::count();
        $educationalCount = Educational_attainment::count();
        $workCount = Works::count();
        $blogCount = Blogs::count();
        $skillCount = Skill::count();
        $messageCount = Contact::count();
        $webinarCount = Webinar::count();
        
        return view('home', compact('userCount','experienceCount','educationalCount','workCount','blogCount','skillCount','messageCount', 'webinarCount'));
    }
}