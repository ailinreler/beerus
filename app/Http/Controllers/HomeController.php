<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function welcome()
    {
      return view('welcome');
    }

    public function login()
    {
      return view('login');
    }
    public function register()
    {
      return view('register');
    }
}