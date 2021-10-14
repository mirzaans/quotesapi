<?php
use App\Models\Quotes;  
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuotesController;

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
Route::group(function(){
    Route::get('/quotes', [QuotesController::class, 'index']);
    Route::post('/store', [QuotesController::class, 'store']);
    Route::get('/quotes/{id}', [QuotesController::class, 'show']);
    Route::put('/quotes/{id}', [QuotesController::class, 'update']);
    Route::delete('/quotes/{id}', [QuotesController::class, 'destroy']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
