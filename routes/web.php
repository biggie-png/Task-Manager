<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/a', function () {
    return view('welcome');
});
route::get('/',function(){
    return view('/tasks/task');
})->name('task');
route::get('tasks/create',function(){
    return view('tasks/create');
})->name('task.create');
route::get('/tasks/show/{id}',[TaskController::class, 'show']);
