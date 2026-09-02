<?php 
namespace App\Modules\Product\Services;

use App\Modules\Product\Models\Product;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class ProcessProductReportJob implements ShouldQueue {
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(public Product $product) {}

    public function handle(): void {
        $pdf = Pdf::loadView('product::pdf.spec-sheet', ['product' => $this->product]);
        $fileName = 'reports/product-' . $this->product->id . '-spec.pdf';
        
        Storage::disk('public')->put($fileName, $pdf->output());

        $this->product->update(['latest_report_path' => $fileName]);
    }
}