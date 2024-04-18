<?php

namespace App\Models;

use App\Models\Restaurant\Customer;
use App\Models\Restaurant\Order;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'cart_id');
    }

    public function order()
    {
        return $this->belongsTo(Order::class, 'cart_id');
    }

}

