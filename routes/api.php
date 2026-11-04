<?php

use App\Http\Controllers\TaskController;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

route::get('/tasks',[TaskController::class,'index'])->name('api.tasks');
route::get('/tasks/{$id}',[TaskController::class, 'show'])->name('api.show');
