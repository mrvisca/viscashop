<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function kategori()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function history()
    {
        return $this->hasMany(StockHistories::class,'product_id');
    }
}
