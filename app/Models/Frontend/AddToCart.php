<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Restaurant\Dish;
use App\Models\Restaurant\DishPrice;
use App\Models\Restaurant\RestroUser;

class AddToCart extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function dish()
    {
        return $this->belongsTo(Dish::class);
    }
}
