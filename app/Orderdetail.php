<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orderdetail extends Model
{
    protected $table = 'bill_detail';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = ['id_bill', 'id_product', 'name_products', 'quantity', 'unit_price', 'total_price'];
}
