<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\BotManController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\ChatbotController;


use Laravel\Socialite\Facades\Socialite;

use App\Models\User;
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

Route::get('/', [LandingPageController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//prexis routes for admin routes
Route::prefix('admin')->group(function () {
    Route::group(['middleware' => ['auth']], function() {
        Route::resource('roles', RoleController::class);
        Route::resource('users', UserController::class);
        Route::resource('chatbot', ChatbotController::class);
    });
});


//route to return nicknames o personal urls
Route::get('/users/{name}', function ($name) {
    return User::find(1)->email;
});


Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);

require __DIR__.'/auth.php';


//...

Route::match(['get', 'post'], '/botman', [BotManController::class, 'handle']);
Route::get('auth/facebook', [SocialController::class, 'facebookRedirect']);
Route::get('auth/facebook/callback', [SocialController::class, 'loginWithFacebook']);
