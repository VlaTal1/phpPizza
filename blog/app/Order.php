<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['pizzaId', 'deliveryDate', 'amount', 'phone'];
}
