<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu_code_model extends Model
{

    protected $table='menu_code_tb';
    protected $fillable = [
        'id_user', 'id_doitac', 'price_billdoitac','catalog_doitac'
    ];
    public $timestamps=false;
}
