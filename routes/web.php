<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasklistController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', [TasklistController::class, 'index'])->name('tasks.index');
Route::get('/tasks/create', [TasklistController::class, 'create'])->name('tasks.create');
Route::post('/tasks/create', [TasklistController::class, 'store'])->name('tasks.store');
Route::get('/tasks/details/{tasklist}', [TasklistController::class, 'show'])->name('tasks.show');
Route::get('/tasks/edit/{tasklist}', [TasklistController::class, 'edit'])->name('tasks.edit');
Route::put('/tasks/update/{tasklist}', [TasklistController::class, 'update'])->name('tasks.update');
Route::get('/tasks/delete/{tasklist}', [TasklistController::class, 'destroy'])->name('tasks.destroy');
//Route::resource('cliente', ClienteController::class);


