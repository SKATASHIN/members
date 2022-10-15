<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\OwnerController;




// Route::get('/members', function () {
//     return view('Members.index');
// });


Route::get('/', function () {
    return view('welcome');
});

Route::resource('members', MembersController::class)
->middleware(['auth', 'verified']);

Route::get('owners/owner', [OwnerController::class, 'index'] );



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
