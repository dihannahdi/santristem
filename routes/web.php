<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\PartnerSchoolController;

// Homepage
Route::get('/', [HomeController::class, 'index'])->name('home');

// Profile/About Section
Route::prefix('profile')->name('profile.')->group(function () {
    Route::get('/about', [ProfileController::class, 'about'])->name('about');
    Route::get('/team', [ProfileController::class, 'team'])->name('team');
});

// Programs
Route::get('/programs', [ProgramController::class, 'index'])->name('programs.index');
Route::get('/programs/{slug}', [ProgramController::class, 'show'])->name('programs.show');

// Events
Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::get('/events/{slug}', [EventController::class, 'show'])->name('events.show');
Route::post('/events/{slug}/register', [EventController::class, 'register'])->name('events.register');

// Gallery
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');

// Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Volunteer Application
Route::get('/volunteer', [VolunteerController::class, 'index'])->name('volunteer.index');
Route::post('/volunteer', [VolunteerController::class, 'store'])->name('volunteer.store');

// Partner School Application
Route::get('/partner', [PartnerSchoolController::class, 'index'])->name('partner.index');
Route::post('/partner', [PartnerSchoolController::class, 'store'])->name('partner.store');
