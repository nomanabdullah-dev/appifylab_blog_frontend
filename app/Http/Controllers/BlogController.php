<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('home')->with(['category'=>$categories]);
    }
}
