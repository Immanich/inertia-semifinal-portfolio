<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/portfolio/add', [PortfolioController::class, 'add']);
Route::post('/portfolio', [PortfolioController::class, 'store']);
// Route::get('/', function() {
//     return Inertia('Dashboard');
// });
Route::get('/portfolio', [PortfolioController::class, 'portfolio']);
Route::delete('/portfolio/{id}', [PortfolioController::class, 'destroy']);

Route::get('/', function () {
    return view('landing');
});
require __DIR__.'/auth.php';
