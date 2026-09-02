<?php
namespace App\Modules\Product\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Product\Models\Product;
use App\Modules\Product\Services\ProcessProductReportJob;
use Illuminate\Http\JsonResponse;

class ProductController extends Controller {
    public function generateReport(Product $product): JsonResponse {
        ProcessProductReportJob::dispatch($product);

        return response()->json([
            'message' => 'Product report generation dispatched successfully.',
            'product_id' => $product->id,
        ], 202);
    }
}