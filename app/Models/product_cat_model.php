<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class product_cat_model extends Model
{

    protected $table='product_cat_tb';
    // protected $fillable = [
    //     'id_user', 'id_doitac', 'price_billdoitac','catalog_doitac'
    // ];
    public function listItems($params = null, $columns){

        // dd($columns);

        return 123;
    }

    public function listColumns($params = null, $options = null){


        return DB::getSchemaBuilder()->getColumnListing($this->table);
    }
    public $timestamps=false;
}
