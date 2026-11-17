<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/a', function () {
    return view('welcome');
});
route::get('/',function(){
    return view('/tasks/task');
})->name('task');

route::get('/tasks/show/{id}',[TaskController::class, 'show']);
