<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\menu_code_model;
class menucodeController extends Controller
{
    public function index()
    {
       $MenuCodeTb = menu_code_model::all();
    //    echo '<pre style="color:#f00;font-weight:bold;">'; print($MenuCodeTb); echo '</pre>';
       return view('admin.pages.menucode.index');
    }

    // Slider

}
