<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pubController;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/drinks", [ pubController::class, "getDrinks"]);

Route::get("/oneDrink/{drinkName}", [ pubController::class, "getOneDrink"]);

Route::get("/likeDrink/{likeText}", [ pubController::class, "getLikeDrinks"]);

Route::get("/between/{value1}/{value2}", [ pubController::class, "getLess30"]);

Route::get("/adddrink", [ pubController::class, "addDrink"]);
Route::get("/drinkwtype",[pubController::class, "getDrinkWithType"]);
Route::get("/left",[pubController::class, "getLeftDrink"]);
Route::get("/right",[pubController::class, "getRightDrink"]);
Route::get("/all",[pubController::class, "getAllData"]);
Route::get("/lastId",[pubController::class, "getLastId"]);
Route::get("/deleteDrink",[pubController::class, "deleteDrink"]);