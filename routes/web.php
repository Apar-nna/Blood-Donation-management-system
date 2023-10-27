<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BloodbanksController;
use App\Models\Bloodbanks;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        $comments=Bloodbanks::all();
        return view('dashboard')->with('comments',$comments);
    })->name('dashboard');
});
Route::resource('/blood',BloodbanksController::class);