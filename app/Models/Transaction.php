<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function pelanggan()
    {
        return $this->belongsTo(Client::class,'client_id');
    }

    public function details()
    {
        return $this->hasMany(TransactionDetails::class,'transaction_id');
    }
}
