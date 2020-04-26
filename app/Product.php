<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    protected $primaryKey = 'STT';
    protected $table = 'products';
    protected $dates = ['deleted_at'];

    public function user()
    {
        return $this->belongsTo(User::class, "user_id", "id");
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class, "brand_id", "brand_id");
    }
    public function typeproduct()
    {
        return $this->belongsTo(Typeproduct::class, "product_type_id", "product_type_id");
    }
}
