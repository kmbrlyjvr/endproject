<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class BlogImage extends Model
{
    protected $primaryKey = 'id';

    protected $table = "blogimage";

    protected $fillable = ['hero', 'imagetwo', 'imagethree', 'imagefour'];




}
