<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
$prefixAdmin = config('configUrl.route.prefix_admin');

Route::prefix($prefixAdmin)->group(function () {
    $nameController = 'dashboard';
    $controller = $nameController.'Controller@';
    Route::get('/',[
        'as'=> 'admin',
        'uses'=>$controller.'index'
    ]);
    $nameController = 'menucode';
    Route::prefix($nameController)->group(function () use ($nameController) {
        $controller = $nameController.'Controller@';
        Route::get('/',[
            'as'=> $nameController,
            'uses'=>$controller.'index'
        ]);
    });

    $nameController = 'productcat';
    Route::prefix($nameController)->group(function () use ($nameController) {
        $controller = $nameController.'Controller@';
        Route::get('/',[
            'as'=> $nameController,
            'uses'=>$controller.'index'
        ]);
        Route::get('/form',[
            'as'=> $nameController.'/form',
            'uses'=>$controller.'form'
        ]);
    });
});
