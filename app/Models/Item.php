<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Item extends Model
{
    protected $table = "item";

    protected $fillable = ['title', 'text'];

    protected $visible = ['title', 'text'];


}
