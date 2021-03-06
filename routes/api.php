<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::prefix(['prefix' => 'sign'], function() {
    
});


Route::post('login', [AuthController::class, 'login']);

Route::get('logoutfix', 'AuthController@logoutfix');

Route::group(['prefix' => 'product'], function () {
    Route::get('/', [ProductsController::class, 'index']);
    Route::get('compnent', [ProductsController::class, 'conext']);
    Route::post('create', [ProductsController::class, 'create']);
    Route::get('edit/{id}', [ProductsController::class, 'edit']);
    Route::patch('update/{id}', [ProductsController::class, 'update']);
    Route::delete('delete/{id}',  [ProductsController::class, 'destroy']);
    Route::post('multiple-form',[ProductsController::class, 'conext']);
});