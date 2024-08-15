<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\Frontend\FrontendController@index')->name('homepage');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/get-touch', 'App\Http\Controllers\Frontend\FrontendFormController@contact')->name('frontend.contact');

Route::get('/download-resume', 'App\Http\Controllers\Frontend\FrontendController@downloadResume')->name('frontend.resume');

require __DIR__.'/auth.php';
