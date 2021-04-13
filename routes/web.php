<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Dashboard\SettingsController;
use App\Http\Controllers\Dashboard\VerificationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
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

Route::get('/', function () {

    return view('welcome');
})->name('welcome');

Auth::routes();
//// Socialite routes
//Route::group(['as' => 'login.', 'prefix' => 'login', 'namespace' => 'Auth'], function () {
//    Route::get('/{provider}', [LoginController::class, 'redirectToProvider'])->name('provider');
//    Route::get('/{provider}/callback', [LoginController::class, 'handleProviderCallback'])->name('callback');
//});


// Authenticated User

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Settings Page
Route::get('/settings',[SettingsController::class,'index'])->name('settings.index');
Route::post('/settings/general',[SettingsController::class,'general'])->name('settings.general');
Route::post('/settings/password',[SettingsController::class,'password'])->name('settings.password');
Route::post('/settings/information',[SettingsController::class,'information'])->name('settings.information');

// Verification Page

Route::get('/verification',[VerificationController::class,'index'])->name('verification.index');
Route::post('/verification',[VerificationController::class,'update'])->name('verification.update');

// Send

Route::middleware('auth')->prefix('send')->group( function(){
    Route::get('/',[\App\Http\Controllers\Dashboard\SendController::class,'index'])->name('send.index');
    Route::post('/check',[\App\Http\Controllers\Dashboard\SendController::class,'checkSend'])->name('send.check');
    Route::post('/confirm',[\App\Http\Controllers\Dashboard\SendController::class,'confirmSend'])->name('send.confirm');
});


// Pages route e.g. [about,contact,etc]
Route::get('/{slug}', PageController::class)->name('page');
