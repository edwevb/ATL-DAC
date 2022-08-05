<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MstProjectController;

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

Route::middleware(['auth'])->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::resource('/mst-project', MstProjectController::class)
        ->parameters([
            'mst-project' => 'project',
        ])->except(['create']);
});


Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);
