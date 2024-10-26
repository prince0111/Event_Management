<?php

use App\Http\Controllers\EventController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('event')->group(function() {
    Route::get('/events', [EventController::class, 'EventView'])->name('event.view');
    Route::get('/events/add', [EventController::class, 'EventAdd'])->name('event.add');
    Route::post('/events/store', [EventController::class, 'EventStore'])->name('events.store');
    Route::get('/events/edit/{id}', [EventController::class, 'EventEdit'])->name('events.edit');
    Route::post('/events/update/{id}', [EventController::class, 'EventUpdate'])->name('events.update');
    Route::delete('/events/delete/{id}', [EventController::class, 'EventDelete'])->name('events.delete');
});



