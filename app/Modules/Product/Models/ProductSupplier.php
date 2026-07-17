<?php

namespace Modules\Product\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Modules\Product\Models\Product;
use Modules\Product\Models\priceListItems;
use Modules\Product\Models\ProductVariant;

class ProductSupplier extends Model
{

    protected $table = 'product_suppliers';
    protected $primaryKey = 'id';
    protected $fillable = [
        'supplier_sku',
        'product_variant_id',
        'supplier_id',
        'cost_price',
        'lead_time_days',
    ];



    public function productVariant(): BelongsTo
    {
        $this->belongsTo(ProductVariant::class);
    }
}
