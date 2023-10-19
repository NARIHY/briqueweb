<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompteManagementController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OauthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteController;
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
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
*/
require __DIR__.'/auth.php';

Route::prefix('/')->name('Public.')->group(function () {
    //home
    Route::get('/', [SiteController::class, 'home'])->name('home');
    //Service
    Route::get('/service', [SiteController::class, 'service'])->name('service');
    //Realisation
    Route::get('/realisation', [SiteController::class, 'realisation'])->name('realisation');
    //contact
    Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
    Route::post('/contact', [ContactController::class, 'store'])->name('contact.save');
    //blog uncoment if exist
    //Route::get('/blog', [SiteController::class, 'blog'])->name('blog');
    //propos
    Route::get('/a-propos', [SiteController::class, 'propos'])->name('propos');
});

//administration routes
Route::prefix('/Administration')->name('Admin.')->middleware(['auth', 'verified', 'oauth'])->group(function () {
    //home admin
    Route::get('/', [AdminController::class, 'index'])->name('index');
    //contact admin
    Route::get('/contact', [AdminController::class, 'contact'])->name('contact');

    //Compte management
    Route::prefix('/Gestion-des-compte')->name('CompteManagement.')->group( function () {
        //listing of all users
        Route::get('/', [CompteManagementController::class, 'listing'])->name('listing');
        //view of one user
        Route::get('/edition-52{userId}45', [CompteManagementController::class, 'edit'])->name('view');
        //edit one user
        Route::post('/edition-52{userId}45', [CompteManagementController::class, 'modify'])->name('modify');
    });
    //for Oauth 1.0


});

Route::prefix('/Security-Guard')->name('Oauth.')->middleware(['auth','verified' ,'oauthCheck'])->group( function () {
    Route::get('/',[OauthController::class, 'verify'])->name('verify');
    Route::post('/',[OauthController::class, 'post'])->name('post');
});
