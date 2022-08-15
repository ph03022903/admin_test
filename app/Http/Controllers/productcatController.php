<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product_cat_model as MainModel;

class productcatController extends Controller
{
    public $model;
    public $pathView;
    public $controllerName;
    private $tableDefine;
    function __construct()
    {
        $this->model = new MainModel();
        $this->pathView = 'admin.pages.productcat.';
        $this->controllerName = 'productcat';
        $this->tableDefine = '';
    }
    function index(){
        $items = $this->model->listItems(null, ['columns' => ['id','name']]);
        return view($this->pathView.'index');
    }

    function config(){
        return view($this->pathView.'config',
            ['controllerName' => $this->controllerName]
        );
    }

    function saveConfig(){
        $params = $_POST;
        $this->tableDefine = $params;
        session(['table_product_cat' => $params]);
        return view($this->pathView.'index');
    }

    function form(){
        $table = session()->get('table_product_cat');
        unset($table['_token']);
        $listColumns = $this->model->listColumns();
        return view($this->pathView.'form', [
            'table' => $table,
            'listColumns' => $listColumns
        ]);
    }
}
