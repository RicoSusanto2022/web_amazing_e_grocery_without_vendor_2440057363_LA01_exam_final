<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    public function has_item(){
        return $this->hasOne(Item::class, "item_id", "item_id");
    }
}
