<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use App\Models\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index() {
        $category = Category::all();
        return view('frontend.layout_master', compact('category'));
    }
}