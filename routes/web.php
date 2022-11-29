<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/leaderboard', [App\Http\Controllers\EvaluationController::class, 'leaderboard'])->name('leaderboard');
Route::post('/evaluation', [App\Http\Controllers\EvaluationController::class, 'store'])->name('evaluation.store');
Route::post('/comment', [App\Http\Controllers\EvaluationController::class, 'storeComment'])->name('comment.store');
Route::get('/evaluations', [App\Http\Controllers\EvaluationController::class, 'index'])->name('evaluations.index');

Route::get('/{any}', function () {
    return view('layouts.app');
})->where('any', '.*');