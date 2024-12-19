<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    // Tambahkan properti yang dapat diisi secara massal
    protected $fillable = [
        'customer_name',
        'total_price',
        'status',
    ];
}
