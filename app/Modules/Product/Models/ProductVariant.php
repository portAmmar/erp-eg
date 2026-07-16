<?php

namespace Modules\Product\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Modules\Product\Models\Product;

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


    public function product() :HasOne
    {
        return $this->hasMany(Product::class);
    }
}
