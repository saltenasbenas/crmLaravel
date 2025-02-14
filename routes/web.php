<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\OwnerController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



Route::group(['middleware'=>'auth'], function () {
    
    Route::resources([
        'cars' => CarController::class,
        'owners' => OwnerController::class,
    ]);
    
    Route::get('delete/car/{id}', [CarController::class, 'destroy'])->name('cars.delete');
    Route::get('delete/owner/{id}', [OwnerController::class, 'destroy'])->name('owners.delete');
    
});




require __DIR__.'/auth.php';
