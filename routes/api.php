<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IntegrationController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('integrations', [IntegrationController::class, 'index']);
Route::get('integrations/{id}', [IntegrationController::class, 'show']);
Route::post('integrations', [IntegrationController::class, 'store']);
Route::put('integrations/{id}', [IntegrationController::class, 'update']);
Route::delete('integrations/{id}', [IntegrationController::class, 'delete']);