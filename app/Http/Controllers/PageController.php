<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Flight;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index()
    {
        return view('welcome');
    }

    public function flights()
    {
        $flights = Flight::all();
        return view('flights', compact('flights'));
    }

    public function blog()
    {
        $blog = Blog::all();
        return view('blog', compact('blog'));
    }

    public function show(Blog $blog)
    {
        return view('blog.show', compact('blog'));
    }
}