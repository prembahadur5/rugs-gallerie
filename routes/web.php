<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\CategoryController; 
use App\Http\Controllers\Frontend\CarpetController as FrontendCarpetController;


use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CarpetController as AdminCarpetController;

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\InquiryController;

Route::get('/', [HomeController::class, 'index']);



Route::prefix('admin')->middleware('auth')->group(function () {
    Route::resource('banners', BannerController::class)
        ->names('admin.banners')
        ->except(['show', 'edit', 'update']);
});
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::resource('carpets', AdminCarpetController::class)
        ->names('admin.carpets');
});

Route::get('/', [HomeController::class, 'index'])->name('home');

// Show inquiry form
Route::get('/inquiry', [InquiryController::class, 'create'])->name('inquiry.create');

// Submit inquiry
Route::post('/inquiry', [InquiryController::class, 'store'])->name('inquiry.store');

// Show inquiry details (IMPORTANT)
Route::get('/inquiry/{id}', [InquiryController::class, 'show'])->name('inquiry.show');
////////////////////

Route::get('/carpets', [FrontendCarpetController::class, 'index']);
Route::get('/carpets/{slug}', [FrontendCarpetController::class, 'show']);
Route::get('/category/{slug}', [FrontendCarpetController::class, 'byCategory']);


Route::prefix('hi')->group(function () {
    Route::get('/carpets', [CarpetController::class, 'index'])->name('hi.carpets');
});


Route::get('/about', function () {
    return view('frontend.about');  // Note the dot notation for folder
})->name('about');


Route::get('/contact', function () {
    return view('frontend.contact');  // Note the dot notation for folder
})->name('contact');
 

///////////////////////////////////////////////////////////

/*
|--------------------------------------------------------------------------
| Frontend routes (DEFAULT = ENGLISH)
|--------------------------------------------------------------------------
*/

Route::get('/about', function () {
    app()->setLocale('en');
    return view('frontend.about');
})->name('about');

/*
|--------------------------------------------------------------------------
| Hindi routes
|--------------------------------------------------------------------------
*/

Route::prefix('hi')->group(function () {

    Route::get('/about', function () {
        app()->setLocale('hi');
        return view('frontend.about');
    })->name('hi.about');
});


/////////////////////////////////////////////////////////


Route::prefix('admin')->middleware('auth')->group(function () {
    Route::resource('categories', CategoryController::class)
        ->only(['index', 'create', 'store'])
        ->names('admin.categories');
});

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {

    Route::get('/dashboard', [AdminDashboardController::class, 'index'])
        ->name('admin.dashboard');

});


Route::middleware(['auth','admin'])->prefix('admin')->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

});


Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
