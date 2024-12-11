<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use App\Models\Task;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {

    $tasks = Task::where('user_id', auth()
                    ->user()->id)
                    ->orderBy('created_at', 'DESC')
                    ->get();
    return view('dashboard', ['tasks' => $tasks]);

})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('tasks', TaskController::class)->middleware(['auth','verified']);

Route::get('tasks/{id}/accomplish', [TaskController::class, 'markTaskAccomplish'])->middleware(['auth','verified'])->name('tasks.accomplish');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
