<?php

namespace Modules\Product\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Modules\Product\Models\Product;
use Modules\Product\Models\PriceListItem;
use Modules\Product\Models\ProductSupplier;

class ProductVariant extends Model
{

    protected $table = 'product_variants';
    protected $primaryKey = 'id';
    protected $fillable = [
        'variant_sku',
        'barcode',
        'product_id',
        'attributes',
    ];


    public function product() :BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function priceListItems(): HasMany
    {
        $this->hasMany(priceListItem::class);
    }
    public function productSuppliers(): HasMany
    {
        $this->hasMany(ProductSupplier::class);
    }
    public function suppliers(): BelongsToMany
    {
        return $this->belongsToMany(Supplier::class, 'product_suppliers')
            ->withPivot('cost_price', 'lead_time_days', 'supplier_sku');
    }
}
