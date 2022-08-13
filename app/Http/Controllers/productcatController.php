<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class productcatController extends Controller
{
    function index(){
        return view('admin.pages.productcat.index');
    }
    function form(){
        return view('admin.pages.productcat.form');
    }
}
