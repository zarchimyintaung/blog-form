<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\langController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['Admin'])->group(function(){

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about')->withoutMiddleware('Admin');
Route::view('/contact', 'contact')->name('contact');
});


Route::post('/blog',[BlogController::class,'store'])->name('blog.store');

Route::controller(langController::class)->group(function(){

    Route::get('/lang/show/','show');
    Route::get('/lang/store/','store');
    Route::get('/lang/delete/','delete');
    Route::get('/lang/change/','change');
});

Route::get('/fluent',function(){
    $result  = str("hello how are you")->upper();

    return $result;
});

Route::controller(StudentController::class)->group(function(){
    Route::get('/students','index')->name('students.index');
    Route::get('/students/create','create')->name('students.create');
    Route::post('/students/create','store')->name('students.store');
    Route::get('/students/show/{id}','show')->name('students.show');
    Route::get('/students/edit/{id}','edit')->name('students.edit');
    Route::post('/students/edit/{id}','update')->name('students.update');
    Route::get('/students/delete/{id}','destroy')->name('students.destroy');
});







