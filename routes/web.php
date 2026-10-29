
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramController;
Route::get('/', function () {
    return view('home');
});

Route::get('/programmes', [ProgramController::class, 'index'])
    ->name('programmes');
Route::get('/quebec', function () {
    return view('quebec');
})->name('quebec');
