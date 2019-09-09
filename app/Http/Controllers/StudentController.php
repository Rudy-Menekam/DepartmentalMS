<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
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

    public function dashboard()
    {
    	return view('student.home');
    }

    public function courses()
    {
    	return view('student.courses');
    }

    public function timetable()
    {
    	return view('student.timetable');
    }

}
