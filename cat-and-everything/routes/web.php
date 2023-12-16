<?php
use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\SignController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CatsittingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;



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

//Route for articles
Route::get('/signs',[SignController::class,'show'])->name('signs');
Route::get('/signs/{sign:slug}',[SignController::class,'showDetail'])->name('sign-detail');

//Route Forum Routes that require authentication

Route::get('/forums', [ForumController::class, 'index'])->name('forums.index');
    Route::get('/forums/create', [ForumController::class, 'create'])->name('forums.create');
    Route::post('/forums', [ForumController::class, 'store'])->name('forums.store');
    Route::get('/forums/{forum}', [ForumController::class, 'show'])->name('forums.show');
Route::post('/forums/{forum}/comments', [CommentController::class, 'store'])->name('comments.store');

//Route Cat sitting
Route::get('/catsitting',[CatsittingController::class, 'showCatsitting'])->name('catsitting');
Route::post('/book-cat-sitter', [CatsittingController::class, 'bookCatSitter'])->name('book-cat-sitter');

Route::get('/shop', [ShopController::class, 'showShop'])->name('shop');



//footer
Route::get('/contact', [ContactController::class, 'show'])->name('contact-us');
Route::post('/contact-submitted', [ContactController::class, 'store'])->name('submitted');
Route::get('/privacy-policy', [PrivacyPolicyController::class,'view'])->name('privacy-policy');

//header
Route::post('/logout', [LogoutController::class, 'perform'])->name('logout-route');


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Assuming you have a ProductController for handling product-related actions
    Route::get('/dashboard/products', [ProductController::class, 'index'])->name('dashboard.products');
    Route::get('/dashboard/products/create', [ProductController::class, 'create'])->name('dashboard.products.create');
    Route::post('/dashboard/products', [ProductController::class, 'store'])->name('dashboard.products.store');
    // Add more routes as needed
});
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


require __DIR__.'/auth.php';