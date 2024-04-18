<?php


namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Restaurant\Dish;
use App\Models\Restaurant\DishPrice;
use App\Models\Restaurant\RestroUser;
class CartItem extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function dish()
    {
        return $this->belongsTo(Dish::class);
    }

    public function dish_price()
    {
        return $this->belongsTo(DishPrice::class);
    }

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }
    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }
}
