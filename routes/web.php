<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;


Route::get('/', [TodoListController::class, 'index']);
Route::post('/todo/create', [TodoListController::class, 'create']);
//Route::post('/todo/update', [TodoListController::class, 'update']);
//Route::post('/todo/delete', [TodoListController::class, 'delete']);
