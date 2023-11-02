<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::group(['prefix' => Session::get('Lang')], function () {

    Route::get('/', [HomeController::class, 'index'])->name('/');

});

Route::get('/set-language',[HomeController::class,'SetLang']);


//CMS Route Define always down position
include_once('api_route.php');
include_once('cms_web.php');