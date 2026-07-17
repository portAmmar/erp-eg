<?php

namespace Modules\Product\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Modules\Product\Models\Product;

class uomConversion extends Model
{

    protected $table = 'uom_conversions';
    protected $primaryKey = 'id';
    protected $fillable = [
        'product_id',
        'from_uom_id',
        'to_uom_id',
        'conversion_factor',
    ];


    public function product() :BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
