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
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

   
    // public function home(){
    //     return view('Home');
    // }
    public function news(){
        return view('news');
    }
    // public function product(){
    //     return view('category.product');
    // }
    // public function program(){
    //     return view('category.program');
    // }
    public function contact(){
        return view('contactt');
    }
    public function about(){
        return view('about');
    }
    public function index(){
        return view('index');
    }
    public function product(){
        return view('product');
    }
    public function program(){
        return view('program');
    }
}
