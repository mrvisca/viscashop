<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public function penjualan()
    {
        return $this->hasMany(Transaction::class,'client_id');
    }
}
