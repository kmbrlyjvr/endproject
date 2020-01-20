<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Blog extends Model
{
    protected $primaryKey = 'id';

    protected $table = "blog";

    protected $fillable = ['title', 'text'];

    protected $visible = ['id', 'title', 'text', 'is_published'];
    
}

