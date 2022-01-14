<?php

namespace App\Http\Controllers\Pages;


use Illuminate\Http\Request;
use App\Blog;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->paginate(4);
        return view('welcome', compact('blogs'));
    }
}
