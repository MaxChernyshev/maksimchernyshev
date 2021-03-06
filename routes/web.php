<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\MainController;
use App\Http\Controllers\Admin\AdminPanelController;
use App\Http\Controllers\Front\ContactController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

// Front

Route::localizedGroup(function () {
    Route::get('/', [MainController::class, 'index'])->name('main.page');

    Route::prefix('/contact')->name('contact.')->group(function () {
        Route::get('/', [ContactController::class, 'index'])->name('index');
        Route::post('/', [ContactController::class, 'store'])->name('store');
    });
});


// Admin
Route::prefix('admin')
    ->name('admin.')
    ->middleware('admin')
    ->group(function () {
        Route::get('/', [AdminPanelController::class, 'index'])->name('panel');

    }
    );
