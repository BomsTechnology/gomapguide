<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_payment',
        'customer_name',
        'customer_email',
        'customer_phone',
        'customer_address',
        'amount',
        'type',
    ];
}
