<?php

namespace App\Http\Controllers;

use App\Course;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $purchased_courses = NULL;
        if (\Auth::check()) {
            // $purchased_courses = Course::whereHas('students', function($query) {
            //     $query->where('id', \Auth::id());
            // })
            // ->with('lessons')
            // ->orderBy('id', 'desc')
            // ->get();
        }

        $courses = Course::where('published', 1)->orderBy('id', 'desc')->get();
        //return "Hello";
        return view('index', compact('courses', 'purchased_courses'));
    }

    public function welcome()
    {
        return view('welcome');
    }

    public function about()
    {
       return view('about');
    }

    public function gettingStarted()
    {
        return view('getting_started');
    }


}
