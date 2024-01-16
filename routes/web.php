<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
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

Route::middleware(['visitingcounter'])->group(function () {

Route::get('/search', [SearchController::class, 'getSearchData'])->name('search');
Route::get('/rti', [HomeController::class, 'rtiData'])->name('rtiData');
Route::get('/', [HomeController::class, 'index'])->name('/');
Route::get('set-language',[HomeController::class,'SetLang']);
Route::get('/site-map',[HomeController::class,'siteMap']);
Route::get('/screen-reader-access',[HomeController::class,'ScreenReaderAccess']);
Route::get('/coming-soon',[HomeController::class,'ComingSoon']);
Route::get('/error',[HomeController::class,'error']);
Route::get('/contact-us',[HomeController::class,'contactUs']);
Route::post('/contact-us',[HomeController::class,'contactStroe']);
// Route::get('about-us/overview', [HomeController::class, 'overviewPage']);
Route::get('/feedback', [HomeController::class, 'Feedback']);
Route::post('/feedback', [HomeController::class, 'feedbackStore']);

// Route::get('about-us/director-desk', [HomeController::class, 'directorDesk']);
// Route::get('about-us/employee-directory', [HomeController::class, 'employeeDirectory']);
Route::get('/press-released', [HomeController::class, 'showPressReleased']);
Route::get('/photo-gallery', [HomeController::class,'photoGallery']);
Route::get('/academic-program', [HomeController::class,'academicProgram']);
Route::get('/training-program', [HomeController::class,'trainingProgram']);
//tender
Route::get('/tender', [HomeController::class, 'tenderData'])->name('tenderData');
Route::get('tender-archive', [HomeController::class,'tenderArchive']);
//carrer
Route::get('/careers', [HomeController::class,'careerData'])->name('careerData');
Route::get('career-archive', [HomeController::class,'careerArchive']);

Route::get('/{Slug}/{middelSlug?}/{lastSlug?}/{finalSlug?}/{finallastSlug?}', [HomeController::class, 'getContentAllPages']);
});



//default behaviour, always keep as last entry
Route::any('{url}', function(){
    return redirect('/');
})->where('url', '.*');