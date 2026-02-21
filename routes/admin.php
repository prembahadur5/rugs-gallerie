<?php

use App\Http\Controllers\Admin\BannerController;

Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // later you can add:
    // Route::resource('banners', BannerController::class);
});