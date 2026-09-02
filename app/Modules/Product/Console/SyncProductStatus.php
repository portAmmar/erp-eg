<?php 
namespace App\Modules\Product\Console;

use App\Modules\Product\Models\Product;
use Illuminate\Console\Command;

class SyncProductStatus extends Command {
    protected $signature = 'products:sync-status';
    protected $description = 'Automated scheduled sync to update expired or out-of-stock product flags';

    public function handle(): void {
        $count = Product::where('stock', '<=', 0)
            ->where('status', '!=', 'out_of_stock')
            ->update(['status' => 'out_of_stock']);

        $this->info("Successfully synchronized status for {$count} products.");
    }
}