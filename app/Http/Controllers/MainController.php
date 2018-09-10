<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
/*
    public function index()
    {
        return 'Main Controller';
    }
*/
    public function index()
    {
        // syntax for passing a single value (method 1) 
        $title = 'Welcome to Laravel';
     //   return view('pages.index',compact('title'));
        // syntax for passing a single value (method 2) passing values in array
        return view('pages.index') -> with('title',$title);
    }

    public function about()
    {
        $title = "About us";
        return view('pages.about')-> with('title',$title);
    }

    public function services()
    {
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Development','Social']
        );
        return view('pages.services') -> with($data);
    }
}
