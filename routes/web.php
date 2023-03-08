<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PetsController;

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

Route::get('/', [ PetsController ::class, 'index' ]);

Route::get('/dogs', [ PetsController ::class, 'dogs' ]);

Route::get('/cats', [ PetsController ::class, 'cats' ]);

Route::get('/fishes', [ PetsController ::class, 'fishes' ]);

Route::get('/search', [ PetsController ::class, 'search' ]);

Route::get('/newAdoption', [ PetsController ::class, 'newAdoption' ])->middleware('auth');

Route::get('/viewAdoption/{id}', [ PetsController ::class, 'viewAdoption' ]);

Route::post('/createAdoption', [ PetsController ::class, 'createAdoption' ])->middleware('auth');;

Route::get('/formUpdateAdoption/{id}', [ PetsController ::class, 'formUpdateAdoption' ])->middleware('auth');;

Route::put('/updateAdoption/{id}', [ PetsController ::class, 'updateAdoption' ])->middleware('auth');;

Route::delete('/deleteAdoption/{id}', [ PetsController ::class, 'deleteAdoption' ])->middleware('auth');;

Route::get('/myAdoptions', [ PetsController ::class, 'myAdoptions' ])->middleware('auth');;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
