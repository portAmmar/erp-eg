<?php

namespace Modules\Product\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Product\Models\ProductSupplier;

class Supplier extends Model
{

    protected $table = 'suppliers';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'contact_email',
        'contact_phone',
        'country',
    ];



    public function productSuppliers(): HasMany
    {
        return $this->hasMany(ProductSupplier::class);
    }

    public function variants(): BelongsToMany
    {
        return $this->belongsToMany(ProductVariant::class, 'product_suppliers')
            ->withPivot('cost_price', 'lead_time_days', 'supplier_sku');
    }
}
