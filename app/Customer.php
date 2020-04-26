<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $primaryKey = 'customer_id';
    protected $table = 'customers';
    public $timestamps = false;
    public function user()
    {
        return $this->belongsTo(User::class, "user_id", "id");
    }
}
