<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groupproduct extends Model
{
    protected $primaryKey = 'group_code';
    protected $table = 'groupproducts';

    public function typeproduct()
    {
        return $this->hasMany(Typeproduct::class, "group_code", "group_code");
    }

    public function products()
    {
        return $this->hasManyThrough(product::class, typeproduct::class, 'group_code', 'product_type_id', 'group_code', 'product_type_id');
    }
}
