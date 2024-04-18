<?php

namespace App\Models\Frontend;

use App\Models\Restaurant\Order;
use App\Models\Restaurant\Dish;
use App\Models\Restaurant\DishPrice;
use App\Models\Restaurant\RestroUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function items()
    {
        return $this->hasMany(CartItem::class, 'cart_id');
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function dish()
    {
        return $this->belongsTo(Dish::class);
    }

    public function orderHistories()
    {
        return $this->hasMany(OrderHistory::class);
    }
}
