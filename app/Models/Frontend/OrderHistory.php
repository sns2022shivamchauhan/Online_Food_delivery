<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Restaurant\Dish;
use App\Models\Restaurant\Order;
use App\Models\Restaurant\DishPrice;
use App\Models\Restaurant\RestroUser;

class OrderHistory extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function order()
{
    return $this->belongsTo(Order::class);
}

public function cart()
{
    return $this->belongsTo(Cart::class);
}

public function dish()
{
    return $this->belongsTo(Dish::class);
}
public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }

}
