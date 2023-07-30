<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\SignController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\CommentController;



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
Route::get('/privacy-policy', [PrivacyPolicyController::class,'view'])->name('privacy-policy');

//Route for articles
Route::get('/signs',[SignController::class,'show'])->name('signs');
Route::get('/signs/{sign:slug}',[SignController::class,'showDetail'])->name('sign-detail');

//Route Forum Routes that require authentication
Route::middleware(['web', 'auth'])->group(function () {
    Route::get('/forums', [ForumController::class, 'index'])->name('forums.index');
    Route::get('/forums/create', [ForumController::class, 'create'])->name('forums.create');
    Route::post('/forums', [ForumController::class, 'store'])->name('forums.store');
    Route::get('/forums/{forum}', [ForumController::class, 'show'])->name('forums.show');
});

Route::post('/forums/{forum}/comments', [CommentController::class, 'store'])->name('comments.store');


//header
Route::post('/logout', [LogoutController::class, 'perform'])->name('logout-route');
Auth::routes();


