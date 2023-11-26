<?php

// routes/web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::get('/css/styles.css', function () {
    return response(file_get_contents(public_path('css/styles.css')))
        ->header('Content-Type', 'text/css');
});

// Keep the existing routes for the PortfolioController
Route::get('/', [PortfolioController::class, 'home']);
Route::get('/about', [PortfolioController::class, 'about']);
Route::get('/projects', [PortfolioController::class, 'projects']);
