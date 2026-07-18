<?php

namespace Modules\Product\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Product\Models\Uom;

class UomCategory extends Model
{

    protected $table = 'uom_categories';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
    ];


    public function uoms() :HasMany
    {
        return $this->hasMany(Uom::class);
    }
}
