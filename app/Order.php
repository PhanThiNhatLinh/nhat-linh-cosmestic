<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'bill';
    public $timestamps = true;

    protected $fillable = ['id_customer', 'date_order', 'requiredDate', 'shippedDate', 'total'];
}
