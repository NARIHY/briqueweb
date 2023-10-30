<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CompteManagementController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\OauthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\UserController;
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
     //Route for subscriber
     Route::post('/Abonement-newsletter', [SubscriberController::class, 'subscribe'])->name('subscribe');
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
//profile modifications
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
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

        Route::post('/register', [RegisteredUserController::class, 'store'])->name('register');
        //view of one user
        Route::get('/edition-52{userId}45', [CompteManagementController::class, 'edit'])->name('view');
        //edit one user
        Route::post('/edition-52{userId}45', [CompteManagementController::class, 'modify'])->name('modify');
    });
    //for blog Administration
    Route::prefix('/Blog')->name('Blog.')->group( function () {
        Route::get('/', [BlogController::class, 'index'])->name('index');
        //creation
        Route::get('/creation', [BlogController::class, 'create'])->name('create');
        Route::post('/creation', [BlogController::class, 'store'])->name('store');
        //edition
        Route::get('/45{id}87-edition', [BlogController::class, 'edit'])->name('edit');
        Route::put('/45{id}87-edition', [BlogController::class, 'update'])->name('update');
        //delete
        Route::delete('/4795{id}87-supression', [BlogController::class, 'destroy'])->name('destroy');
    });
    //route for newsletter
    Route::prefix('/Newsletter')->name('Newsletter.')->group( function () {
        Route::get('/', [NewsletterController::class, 'listing'])->name('listing');
        Route::get('/creation', [NewsletterController::class, 'create'])->name('create');
        Route::post('/creation', [NewsletterController::class, 'store'])->name('store');

        //update
        Route::get('/{id}/edition', [NewsletterController::class, 'edit'])->name('edit');
        Route::put('/{id}/edition', [NewsletterController::class, 'update'])->name('update');

        //send
        Route::post('/{id}/Poster-le-newsletter', [NewsletterController::class, 'sendEmail'])->name('send');
     });

    //for Oauth 1.0


});

//test
Route::prefix('/test')->name('Test.')->group( function () {
    Route::get('/user', [UserController::class, 'user'])->name('users');
});
Route::prefix('/Security-Guard')->name('Oauth.')->middleware(['auth','verified' ,'oauthCheck'])->group( function () {
    Route::get('/',[OauthController::class, 'verify'])->name('verify');
    Route::post('/',[OauthController::class, 'post'])->name('post');
});
