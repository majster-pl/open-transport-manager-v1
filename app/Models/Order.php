<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'created_date',
        'pickticket_status',
        'pickticket_control',
        'ar_account',
        'ship_to',
        'ship_to_name',
        'customer_po',
        'order',
        'planned_ship_via',
        'value',
    ];

    public static function status()
    {
        return  Self::select('pickticket_status')->distinct('pickticket_status')->orderBy('pickticket_status')->get();
    }
}
