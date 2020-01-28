<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ShippingCost extends Model
{
    protected $table = "shippingcost";

    protected $fillable = [
        'country', 'price'
    ];
}
