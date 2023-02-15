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

Route::get('/newAdoption', [ PetsController ::class, 'newAdoption' ]);

Route::post('/createAdoption', [ PetsController ::class, 'createAdoption' ]);