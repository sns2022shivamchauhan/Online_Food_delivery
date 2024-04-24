<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemCategory extends Model
{
    use HasFactory;
    protected $table = 'items_categories';
  //   protected $fillable = [
  //     'item_id', 'category_id',
  // ];
  protected $guarded = [];

  // ItemCategory.php model
public function item()
{
    return $this->belongsTo(Item::class);
}


}
