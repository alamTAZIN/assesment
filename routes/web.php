<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('page',[AdminController::class,'page'])->name('page');

    Route::post('note_store',[NoteController::class,'note_store'])->name('note_store');
    Route::get('note',[NoteController::class,'note'])->name('note');
    Route::get('show_note',[NoteController::class,'show_note'])->name('show_note');
    Route::get('note_edit/{id}',[NoteController::class,'note_edit'])->name('note_edit');
    Route::post('note_edit_update',[NoteController::class,'note_edit_update'])->name('note_edit_update');
    Route::get('note_delete',[NoteController::class,'note_delete'])->name('note_delete');

});
