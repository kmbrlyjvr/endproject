<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Items extends Model
{
    protected $table = "items";

    protected $fillable = ['title', 'text'];

    protected $visible = ['title', 'text', 'svg'];


}
