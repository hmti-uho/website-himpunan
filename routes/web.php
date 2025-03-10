<?php

use App\Http\Controllers\AchievementController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Event\EventCollection;

Route::get('/', function () {
    return view('welcome');
});

// achievements
Route::get("/achievements", [AchievementController::class, "index"])->name("achievements.index");

Route::get("/achievements/{id}", [AchievementController::class, "show"])->name("achievements.show");

// galleries
Route::get("/galleries", [GalleryController::class, "index"])->name("galleries.index");


// events
Route::get("/events", [EventController::class, "index"])->name("events.index");

Route::get("/events/{id}", [EventController::class, "show"])->name("events.show");
