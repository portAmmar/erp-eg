<?php

namespace Modules\Product\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Product\Models\PriceList;

class Currency extends Model
{

    protected $table = 'currencies';
    protected $primaryKey = 'id';
    protected $fillable = [
        'code',
        'symbol',
        'decimal_places',
    ];



    public function priceLists() :HasMany
    {
    return $this->hasMany(PriceList::class);
    }
}
