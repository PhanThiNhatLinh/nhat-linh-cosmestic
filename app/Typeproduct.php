<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class typeproduct extends Model
{
    protected $primaryKey = 'STT';
    protected $table = 'typeproducts';
    public function user()
    {
        return $this->belongsTo(User::class, "user_id", "id");
    }
    public function groupproduct()
    {
        return $this->belongsTo(Groupproduct::class, "group_code", "group_code");
    }
    public function product()
    {
        return $this->hasMany(Product::class, "product_type_id", "product_type_id");
    }
}
