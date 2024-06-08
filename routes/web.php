<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\OpenVolunteerController;
use App\Http\Controllers\PartnershipAndSponsorshipController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomepageController::class, 'index'])->name('homepage');

Route::name('open-volunteers.')->prefix('open-volunteers')->group(function () {
    Route::get('/', [OpenVolunteerController::class, 'index'])->name('index');
    Route::get('{openVolunteer}', [OpenVolunteerController::class, 'show'])->name('show');
});

Route::name('events.')->prefix('events')->group(function () {
    Route::get('/', [EventController::class, 'index'])->name('index');
    Route::get('{event}', [EventController::class, 'show'])->name('show');
});

Route::name('blogs.')->prefix('blogs')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('index');
    Route::get('{blog}', [BlogController::class, 'show'])->name('show');
});

Route::get('partnership', [PartnershipAndSponsorshipController::class, 'showPartnership'])->name('showPartnership');
Route::get('sponsorship', [PartnershipAndSponsorshipController::class, 'showSponsorship'])->name('showSponsorship');

Route::get('about-us', [AboutUsController::class, 'index'])->name('about-us');
Route::get('teams', [TeamController::class, 'index'])->name('teams');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
