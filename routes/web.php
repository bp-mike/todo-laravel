<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;




Route::get('/', [TodosController::class, 'index'])->name('home');

Route::get('/create', [TodosController::class, 'create'])->name('create');
Route::Post('/create', [TodosController::class, 'store']);
Route::delete('/create/{todo}', [TodosController::class, 'destroy'])->name('create.destroy');

Route::get('/singletodo/{todo}', [TodosController::class, 'show'])->name('singletodo');
Route::get('/singletodo/{todo}/edit', [TodosController::class, 'edit'])->name('singletodo.edit');
Route::put('/singletodo/{todo}/edit', [TodosController::class, 'update']);

Route::resource('todos', TodosController::class);



