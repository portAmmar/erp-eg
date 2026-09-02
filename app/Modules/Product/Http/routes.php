<?php 
use App\Modules\Product\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->prefix('api/v1')->group(function () {
    Route::post('/products/{product}/report', [ProductController::class, 'generateReport']);
});