<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Dash\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

        Route::get('/', function () {
            return view('front.index');
        })->name('main');

        Route::get('products', function () {
            return view('front.all_products');
        })->name('products');


        Route::middleware(['auth', 'verified', 'dashaccess'])->as('dashboard.')->prefix('dashboard')->group(function () {
            Route::get('/', function () {
                return view('dash.index');
            })->name('main');

            Route::resources([
                'users' => UserController::class,
                'categories' => CategoryController::class,
                'products' => ProductController::class,

            ]);
        });
        Route::middleware('auth')->group(function () {
            Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
            Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
            Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        });

        require __DIR__ . '/auth.php';
    }
);
