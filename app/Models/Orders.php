<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Orders extends Model
{
    protected $table = "orders";

    protected $fillable = ['user_id', 'user_id', 'item_title', 'config', 'status', 'payment', 'payment_id'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
