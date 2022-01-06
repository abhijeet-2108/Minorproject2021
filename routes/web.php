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



Auth::routes();

Route::get('/post/create',[App\Http\Controllers\PostController::class, 'create']);
Route::get('/post/{post}',[App\Http\Controllers\PostController::class, 'show']);
Route::post('/post',[App\Http\Controllers\PostController::class, 'store']);


Route::get('/course/create',[App\Http\Controllers\CourseController::class, 'create']);
Route::get('/course/{course}',[App\Http\Controllers\CourseController::class, 'show']);
Route::post('/course',[App\Http\Controllers\CourseController::class, 'store']);

Route::get('/application/create/{course}',[App\Http\Controllers\ApplicationController::class, 'create']);
Route::get('/application/{application}',[App\Http\Controllers\ApplicationController::class, 'show']);
Route::post('/application/create/{course}',[App\Http\Controllers\ApplicationController::class, 'store']);
Route::get('/application/documents/{application}',[App\Http\Controllers\ApplicationController::class, 'show_doc']);
Route::get('/application/accept/{application}',[App\Http\Controllers\ApplicationController::class, 'accept']);
Route::get('/application/reject/{application}',[App\Http\Controllers\ApplicationController::class, 'reject']);


Route::get('/marks', function () {
    return abort('403');
});
Route::get('/marks/create',[App\Http\Controllers\MarksController::class, 'create']);
Route::post('/marks',[App\Http\Controllers\MarksController::class, 'store']);

Route::get('/events/create',[App\Http\Controllers\MarksController::class, 'event_create']);
Route::post('/events',[App\Http\Controllers\MarksController::class, 'event_store']);


Route::get('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'index'])->name('profile.show');
Route::get('/profile/{user}/edit', [App\Http\Controllers\ProfilesController::class, 'edit'])->name('profile.edit');
Route::get('/profile/{user}/documents', [App\Http\Controllers\ProfilesController::class, 'document'])->name('profile.show');
Route::patch('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'update'])->name('profile.update');


//Route::get('/profile/university/{user}', [App\Http\Controllers\ProfilesController::class, 'index'])->name('profile.show');



//Route::get('/home', function () {
//    return view('welcome');
//});
Route::get('/home', [App\Http\Controllers\UniversityProfileController::class, 'home'])->name('profile.show');
Route::get('/', [App\Http\Controllers\UniversityProfileController::class, 'home'])->name('profile.show');


Route::get('/aboutus', function () {
    return view('test.aboutus');
});
Route::get('/contactus', function () {
    return view('contactus');
});
Route::get('/dashboard/application', [App\Http\Controllers\UniversityProfileController::class, 'dashboard_application']);
Route::get('/dashboard', [App\Http\Controllers\UniversityProfileController::class, 'dashboard']);

Route::get('/search', [App\Http\Controllers\UniversityProfileController::class, 'search']);
Route::get('/redirect/{url}', [App\Http\Controllers\ProfilesController::class, 'redirectweb']);

