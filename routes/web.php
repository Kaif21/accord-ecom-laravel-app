<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

//home
Route::get('/', [HomeController::class, 'index'])->name('website.home.index');
//home
//user
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('customer.dashboard');
//user

//admin
Route::get('/admin-dashboard', [AdminController::class, 'index'])->middleware(['auth','admin'])->name('admin.index');
//category-index
Route::get('/admin/category', [AdminController::class, 'category'])->middleware(['auth','admin'])->name('admin-category.index');
//category-create
Route::post('/admin/category_create', [AdminController::class, 'category_create'])->middleware(['auth','admin'])->name('admin-category.create');
// Route::get('/admin-dashboard', [AdminController::class, 'index'])->middleware(['auth','admin'])->name('admin.index');
// Route::get('/admin-dashboard', [AdminController::class, 'index'])->middleware(['auth','admin'])->name('admin.index');
// Route::get('/admin-dashboard', [AdminController::class, 'index'])->middleware(['auth','admin'])->name('admin.index');
//admin

//middleware
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//middleware
require __DIR__.'/auth.php';
