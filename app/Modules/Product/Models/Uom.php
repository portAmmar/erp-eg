<?php

namespace Modules\Product\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Product\Models\Product;

class Uom extends Model
{

    protected $table = 'uoms';
    protected $primaryKey = 'id';
    protected $fillable = [
        'code',
        'name',
        'uom_category_id',
    ];


    public function products() :HasMany
    {
        return $this->hasMany(Product::class);
    }

    public function products() :BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
