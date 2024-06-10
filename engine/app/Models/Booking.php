<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'hotel_name',
        'name',
        'amount',
        'check_in_date',
        'check_out_date',
        'total_amount',
    ];
}
