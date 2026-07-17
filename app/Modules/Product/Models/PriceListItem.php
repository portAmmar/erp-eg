<?php

namespace Modules\Product\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Modules\Product\Models\Product;
use Modules\Product\Models\priceListItems;
use Modules\Product\Models\ProductVariant;

class PriceListItem extends Model
{

    protected $table = 'price_list_items';
    protected $primaryKey = 'id';
    protected $fillable = [
        'price_list_id',
        'product_variant_id',
        'price',
        'valid_from',
        'valid_to',
        'created_by',
        'updated_by',
    ];


    public function product() :HasOne
    {
        return $this->hasOne(Product::class);
    }

    public function productVariant(): BelongsTo
    {
        $this->belongsTo(ProductVariant::class);
    }
}
