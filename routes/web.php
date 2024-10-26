<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AttendeeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    
    //Dashboard Routes
    Route::prefix('dashboard')->group(function(){
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
    });
    //Admin Routes
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');

    //Category Routes
    Route::prefix('category')->group(function(){
        Route::get('/category/view', [CategoryController::class, 'CategoryView'])->name('category.view');
        Route::get('/category/add', [CategoryController::class, 'CategoryAdd'])->name('category.add');
        Route::post('/category/store', [CategoryController::class, 'CategoryStore'])->name('category.store');
        Route::get('/category/edit/{id}', [CategoryController::class, 'CategoryEdit'])->name('category.edit');
        Route::post('/category/update/{id}', [CategoryController::class, 'CategoryUpdate'])->name('category.update');
        Route::get('/category/delete/{id}', [CategoryController::class, 'CategoryDelete'])->name('category.delete');
    });
    
    Route::prefix('event')->group(function() {
        Route::get('/events', [EventController::class, 'EventView'])->name('event.view');
        Route::get('/events/add', [EventController::class, 'EventAdd'])->name('event.add');
        Route::post('/events/store', [EventController::class, 'EventStore'])->name('events.store');
        Route::get('/events/edit/{id}', [EventController::class, 'EventEdit'])->name('events.edit');
        Route::post('/events/update/{id}', [EventController::class, 'EventUpdate'])->name('events.update');
        Route::delete('/events/delete/{id}', [EventController::class, 'EventDelete'])->name('events.delete');
    });
     
    //Attendee Routes
    Route::prefix('attendee')->group(function(){
        Route::get('/attendee/view', [AttendeeController::class, 'AttendeeView'])->name('attendee.view');
        Route::get('/attendees/view/{id}', [AttendeeController::class, 'AttendeesView'])->name('attendees.view');
        Route::get('/attendee/add', [AttendeeController::class, 'AttendeeAdd'])->name('attendee.add');
        Route::post('/attendee/store', [AttendeeController::class, 'AttendeeStore'])->name('attendee.store');
        Route::get('/attendee/edit/{id}', [AttendeeController::class, 'AttendeeEdit'])->name('attendees.edit');
        Route::post('/attendee/update/{id}', [AttendeeController::class, 'AttendeeUpdate'])->name('attendees.update');
        Route::get('/attendee/delete/{id}', [AttendeeController::class, 'AttendeeDelete'])->name('attendees.delete');
    });
    
});
