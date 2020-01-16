<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Orders extends Model
{
    protected $table = "orders";

    protected $fillable = ['user_id', 'user_name', 'title', 'config'];


}
