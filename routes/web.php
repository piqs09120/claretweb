<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// ─── Public Routes ────────────────────────────────────────────────────────────

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/academics', [PageController::class, 'academics'])->name('academics');
Route::get('/academics/undergraduate', [PageController::class, 'undergraduate'])->name('academics.undergraduate');
Route::get('/academics/graduate', [PageController::class, 'graduate'])->name('academics.graduate');
Route::get('/academics/curriculum', [PageController::class, 'curriculum'])->name('academics.curriculum');
Route::get('/academics/faculty', [PageController::class, 'faculty'])->name('academics.faculty');
Route::get('/academics/calendars', [PageController::class, 'calendars'])->name('academics.calendars');
Route::get('/academics/{slug}', [PageController::class, 'academicShow'])->name('academics.show');
Route::get('/admissions', [PageController::class, 'admissions'])->name('admissions');
Route::get('/activities', [PageController::class, 'activities'])->name('activities');
Route::get('/accreditations', [PageController::class, 'accreditations'])->name('accreditations');

// Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');


// ─── Auth Routes (Breeze) ─────────────────────────────────────────────────────
require __DIR__ . '/auth.php';
