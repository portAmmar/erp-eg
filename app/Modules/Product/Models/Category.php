<?php

namespace Modules\Product\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Product\Models\Product;

class Category extends Model
{

    protected $table = 'categories';
    protected $primaryKey = 'id';
    protected $fillable = [
        'parent_category_id',
        'name',
    ];



    public function products() :BelongsTo
    {
    return $this->belongsTo(Product::class);
    }
}
