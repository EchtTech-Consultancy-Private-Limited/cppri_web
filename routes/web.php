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
function set_active($route) {
    if( is_array( $route ) ){
        return in_array(Request::path(), $route) ? 'hover show' : '';
    }
    return Request::path() == $route ? 'hover show' : '';
}
function set_active1($route) {
    if( is_array( $route ) ){
        return in_array(Request::path(), $route) ? 'active' : '';
    }
    return Request::path() == $route ? 'active' : '';
}
Artisan::call('cache:clear');
Artisan::call('storage:link');
Artisan::call('view:clear');
Artisan::call('route:clear');
Artisan::call('config:clear');
//CMS Route Define always down position
require __DIR__ .'/cms_web.php';


Route::get('/', [HomeController::class, 'index'])->name('/');
Route::get('/set-language',[HomeController::class,'SetLang']);
Route::get('/{slug}', [HomeController::class, 'getContentAllPages']);

//default behaviour, always keep as last entry
Route::any('{url}', function(){
    return redirect('login');
})->where('url', '.*');

