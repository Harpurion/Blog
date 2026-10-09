<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(Request $request){
        $posts = Post::Paginate(16);
        return view('welcome', compact('posts'));
    }

    public function buttons(){
        return view('buttons');
    }
}
