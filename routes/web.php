<?php

use App\Http\Controllers\AchievementController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SuggestionBoxController;
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


// news
Route::get("/events", [EventController::class, "index"])->name("events.index");

Route::get("/events/{id}", [EventController::class, "show"])->name("events.show");

Route::post("/suggestion-box", [SuggestionBoxController::class, "store"])->name("suggestion-box.store");

// news
Route::get("/news", [NewsController::class, "index"])->name("news.index");

Route::get("/news/{id}", [NewsController::class, "show"])->name("news.show");
