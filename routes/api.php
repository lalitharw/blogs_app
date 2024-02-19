<?php

use App\Http\Controllers\apiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get("/",[apiController::class,'blogs']);
Route::get("blog/{id}",[apiController::class,"specificBlogs"]);
Route::get("author/{id}",[apiController::class,"author"]);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
