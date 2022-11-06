<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ExploreUserController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\FollowingController;
use App\Http\Controllers\ProfileInformationController;
use App\Http\Controllers\UpdateProfileInformationController;
use App\Http\Controllers\UpdatePasswordController;

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

Route::get('/welcome', function () {
  return view('welcome');
});

Route::middleware('guest')
  ->group(function () {

    Route::get('login', [LoginController::class, 'create'])
      ->name('login');

    Route::post('login', [LoginController::class, 'store'])
      ->name('login.store');

    Route::get('register', [RegisterController::class, 'create'])
      ->name('register');

    Route::post('register', [RegisterController::class, 'store'])
      ->name('register.store');
  });

Route::middleware('auth')
  ->group(function () {

    Route::post('logout', LogoutController::class)
      ->name('logout');

    Route::get('/', [HomeController::class, 'index'])
      ->name('home');

    Route::get('/search', [HomeController::class, 'search'])
      ->name('home.posts-search');

    Route::get('/explore', [ExploreUserController::class, 'index'])
      ->name('explore-users');

    Route::get('/explore/search', [ExploreUserController::class, 'search'])
      ->name('explore-users-search');

    Route::post('status', [StatusController::class, 'store'])
      ->name('statuses.store');

    Route::post('status/{status}/edit', [StatusController::class, 'edit'])
      ->name('statuses.edit');

    Route::put('status/{status}/update', [StatusController::class, 'update'])
      ->name('statuses.update');

    Route::delete('status/{status}/delete', [StatusController::class, 'destroy'])
      ->name('statuses.delete');

    Route::prefix('profile')
      ->group(function () {
        Route::get('/edit', [UpdateProfileInformationController::class, 'edit'])->name('profile.edit');

        Route::put('/update', [UpdateProfileInformationController::class, 'update'])->name('profile.update');

        Route::get('/password/edit', [UpdatePasswordController::class, 'edit'])->name('password.edit');

        Route::put('/password/edit', [UpdatePasswordController::class, 'update'])->name('password.edit');

        Route::get('/{user}', ProfileInformationController::class)->name('profile');

        Route::get('/{user}/{following}', [FollowingController::class, 'index'])->name('following.index');

        Route::post('/{user}', [FollowingController::class, 'store'])->name('following.store');
      });
  });
