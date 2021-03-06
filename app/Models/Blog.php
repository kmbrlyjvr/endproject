<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Blog extends Model
{

    protected $table = "blog";

    protected $fillable = ['title', 'text', 'hero', 'bigtext','imagetwo', 'imagethree', 'imagefour', 'is_published'];

    
}

