<?php

namespace Modules\Product\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Modules\Product\Models\Product;
use Modules\Product\Models\PriceListItems;
use Modules\Product\Models\ProductVariant;
use Modules\Product\Models\Currency;

class PriceList extends Model
{

    protected $table = 'price_lists';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'currency_id',
    ];


    public function product() :HasMany
    {
        return $this->hasMany(PriceListItem::class);
    }

    public function productVariant(): BelongsTo
    {
        $this->belongsTo(ProductVariant::class);
    }

    public function currency(): BelongsTo
    {
        $this->belongsTo(Currency::class);
    }
}
