<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'blogs';
    public $timestamps = false;
    public function user()
    {
        return $this->belongsTo(User::class, "user_id", "id");
    }
}
