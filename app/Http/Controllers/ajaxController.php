<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\menu_code_model;
class ajaxController extends Controller
{
    public function changeDisplayMenuCode(Request $request)
    {
        if($request->id == 0 ){
            $display = 1;
        }else if($request->id == 1){
            $display = 0;
        }
        $updateDisplay = menu_code_model::find($request->id_menu);
        $updateDisplay->display = $display;
        $updateDisplay->save();
        $updateFishishDisplay = menu_code_model::find($request->id_menu);
        return $updateFishishDisplay->display;
    }

    // Slider

}
