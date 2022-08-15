<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\menu_code_model;
use App\Helpers\functionDatabase as functionDatabase;
class menucodeController extends Controller
{
    public function index()
    {
        $MenuCodeTb = menu_code_model::all();
        $MenuList = functionDatabase::SortNested($MenuCodeTb,array('parent'=>0));
    //    echo '<pre style="color:#f00;font-weight:bold;">'; print_r($MenuList); echo '</pre>';
       return view('admin.pages.menucode.index',['list_menu'=> $MenuList ]);
    }


}
