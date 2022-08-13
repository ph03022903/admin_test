<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\menu_code_model;
class menucodeController extends Controller
{
    public function index()
    {
        $MenuCodeTb = menu_code_model::where('parent', '=', 0)->get();
    //    echo '<pre style="color:#f00;font-weight:bold;">'; print_r($MenuCodeTb); echo '</pre>';
       return view('admin.pages.menucode.index',['list_menu'=>$MenuCodeTb]);
    }

}
