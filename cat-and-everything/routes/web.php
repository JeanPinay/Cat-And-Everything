<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\SignController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LogoutController;



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
//homepage
Route::get('/',[WelcomeController::class,'show'])->name('homepage');

//footer
Route::get('/contact', [ContactController::class, 'show'])->name('contact-us');
Route::post('/contact-submitted', [ContactController::class, 'store'])->name('submitted');

//Route for articles
Route::get('/signs',[SignController::class,'show'])->name('signs');
Route::get('/signs/{sign:slug}',[SignController::class,'showDetail'])->name('sign-detail');


Route::post('/logout', [LogoutController::class, 'perform'])->name('logout-route');



Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
