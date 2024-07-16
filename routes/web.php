<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

// Frontend routes
Route::get('/',[IndexController::class,'index'])->name('front.index');
Route::get('/about',[IndexController::class,'about'])->name('front.about');
Route::get('/blog',[IndexController::class,'blog'])->name('front.blog');
Route::get('/cart',[IndexController::class,'cart'])->name('front.cart');
Route::get('/checkout',[IndexController::class,'checkout'])->name('front.checkout');
Route::get('/contact',[IndexController::class,'contact'])->name('front.contact');
Route::get('/services',[IndexController::class,'services'])->name('front.services');
Route::get('/shop',[IndexController::class,'shop'])->name('front.shop');

//Breeze routes
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
