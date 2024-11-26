<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\AdminMiddleware;

Route::get('/', [HomeController::class, 'home']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get("admin/dashboard",[HomeController::class, 'index'])
->middleware(['auth',AdminMiddleware::class])->name('admin.dashboard');

Route::get("admin/view_category",[AdminController::class, 'view_category'])
->middleware(['auth',AdminMiddleware::class])->name('admin.view_category');


Route::post("admin/add_category",[AdminController::class, 'add_category'])
->middleware(['auth',AdminMiddleware::class])->name('admin.add_category');

//->name('admin.dashboard');
