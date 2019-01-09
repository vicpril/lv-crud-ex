<?php

namespace App\Http\Controllers;

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
        return view('welcome');
    }
  
    //Laravel File Upload Example
    public function indexFile()
    {
        return view('homeFile');
    }
  
    // Laravel Dropzone Image Upload Tutorial With Example
    public function indexFileDropzone()
    {
      return view('imageupload');
    }
}
