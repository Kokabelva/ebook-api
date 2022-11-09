<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
 //   return $request->user();
//});

//Route::get('/me', [AutController::class, 'me']);

//Route::get('/books', [BookController::class, 'index']);
//Route::get('/books/{id}', [BookController::class, 'show']);
//Route::post('/books', [BookController::class, 'store']);
//Route::put('/books/{id}', [BookController::class, 'update']);
//Route::delete('/books/{id}', [BookController::class, 'dastroy']);

//Route::resource('books', BookController::class)->except(
    //['create', 'edit']
//);

//Route::resource('authors', AuthorController::class)->except(
  //  ['create', 'edit']
//);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//public route
Route::post('/register', [AutController::class, 'register']);
Route::post('/login', [AutController::class, 'login']);

Route::get('/books', [BookController::class, 'index']);
Route::get('/Books/{id}', [BookController::class, 'show']);
Route::get('/Authors', [AuthorController::class, 'index']);
Route::get('/Authors/{id}', [AuthorController::class, 'show']);

//protected routes
Route::middleware('auth:sanctum')->group(function () {
    Route::resource('books', BookController::class)->except('create', 'edit', 'show', 'index');
    Route::post('/logout', [AutController::class, 'logout']);
    Route::resource('/authors', AuthorController::class)->except('create', 'edit', 'show', 'index');
});

