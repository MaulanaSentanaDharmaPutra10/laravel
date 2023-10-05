<?php

use App\Http\Controllers\Api\BukuController;
use App\Models\Buku;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('bukus', [BukuController::class, 'index']);
// Route::get('bukus/{id}', [BukuController::class, 'show']);
// Route::post('bukus', [BukuController::class, 'store']);
// Route::put('bukus/{id}', [BukuController::class, 'update']);
// Route::delete('bukus/{id}', [BukuController::class, 'destroy']);

Route::apiResource('bukus', BukuController::class);