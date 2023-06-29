<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class,'supplier_id');
    }

    public function detail()
    {
        return $this->hasMany(PurchaseDetail::class,'purchase_id');
    }
}
