<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;


class AboutController extends Controller
{
    public function index(){
        $data_about = About::where('id',1)->first();
        return view('about', compact('data_about'));
    }
}
