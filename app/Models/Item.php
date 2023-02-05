<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    public function have_cart(){
        return $this->hasMany(Cart::class, "item_id", "item_id");
    }

    public function have_order(){
        return $this->hasMany(Order::class, "item_id", "item_id");
    }
}
