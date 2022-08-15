<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function index(){
        return view('admin.pages.product.index');
    }
    public function form(){
        return view('admin.pages.product.form');
    }
}
