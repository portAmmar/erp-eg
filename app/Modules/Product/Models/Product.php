<?php

namespace Modules\Product\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Modules\Product\Models\Category;
use Modules\Product\Models\Uom;
use Modules\Product\Models\ProductVariant;
use Modules\Product\Models\uomConversion;

class Product extends Model
{

    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = [
        'sku',
        'name',
        'description',
        'product_type',
        'status',
        'category_id',
        'base_uom_id',
        'created_by',
        'updated_by'
    ];

    public function productVariants(): HasMany
    {
    return $this->hasMany(ProductVariant::class);
    }

    public function uomConversions(): HasMany
    {
    return $this->hasMany(uomConversion::class);
    }

    public function category() :HasOne
    {
    return $this->hasOne(Category::class);
    }

    public function uom() :HasOne
    {
        return $this->hasOne(Uom::class);
    }
}
