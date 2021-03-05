<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $data_post = Post::all();
        return view('product', compact('data_post'));
    }
}
