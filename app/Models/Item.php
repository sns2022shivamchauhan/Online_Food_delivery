<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function categories(){
      return $this->belongsToMany(Category::class, 'items_categories');
    }
    public function itemCategory()
    {
        return $this->hasMany(ItemCategory::class);
    }

}

