<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\Guard;

class Category extends Model
{
  use HasFactory;
  protected $guarded = [];


  /**
   * The items that belong to the Category
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
   */
  public function items()
  {
      return $this->belongsToMany(Item::class);
  }
}
