<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionHeader extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'checkout_status',
        'total_price'
    ];

    public function detail() {
        return $this->hasMany(TransactionDetail::class);
    }
}
