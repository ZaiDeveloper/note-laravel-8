<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use API\ProductController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\AuthController;

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

Route::group(['middleware' => 'api', 'prefix' => 'auth'], function () {
    Route::post('authenticate', [AuthController::class, 'authenticate'])->name('api.authenticate');
    Route::post('register', [AuthController::class, 'register'])->name('api.register');
});

Route::group(['middleware' => ['auth:api'], 'prefix' => 'recipe'], function () {
    Route::post('create', [RecipeController::class, 'create'])->name('recipe.create');
    Route::get('all', [RecipeController::class, 'all'])->name('recipe.all');
    Route::post('update/{recipe}', [RecipeController::class, 'update'])->name('recipe.update');
    Route::get('show/{recipe}', [RecipeController::class, 'show'])->name('recipe.show');
    Route::post('delete/{recipe}', [RecipeController::class, 'delete'])->name('recipe.delete');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('products', ProductController::class);
