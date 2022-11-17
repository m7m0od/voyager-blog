<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Hotel;
use App\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class indController extends Controller
{
    public function index()
    {
        $cat = Package::All();
        $hotels = Hotel::All();
        $blogs = Blog::All();
        return view('index',['cat' => $cat,'hotels' => $hotels,'blogs' => $blogs]);
    }
    
}
