<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    protected $primaryKey = 'STT';
    protected $table = 'brands';
    public function user()
    {
        return $this->belongsTo(User::class, "user_id", "id");
    }
    public function product()
    {
        return $this->hasMany(Product::class, "brand_id", "brand_id");
    }
}
