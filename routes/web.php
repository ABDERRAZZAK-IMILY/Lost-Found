<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    return view('Home');
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


use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\CommentController;
use App\Models\Announcement;

Route::get('/announcements', [AnnouncementController::class, 'index'])->name('announcements.index');

Route::get('/announcements/{id}', [AnnouncementController::class, 'show'])
    ->name('announcements.show');

    Route::get('/create', [AnnouncementController::class, 'create'])->name('announcements.create');

    Route::post('/announcements/store', [AnnouncementController::class, 'store'])->name('announcements.store');


    // Route::get('/annonces/{id}', [AnnouncementController::class, 'show'])->name('annonces.show');


Route::post('/announcements/{announcement}/comments', [CommentController::class, 'store'])->name('comments.store');
