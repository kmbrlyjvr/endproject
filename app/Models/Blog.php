<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Blog extends Model
{
    protected $primaryKey = 'id';

    protected $table = "blogs";

    protected $fillable = ['title', 'text', 'hero', 'imagetwo', 'imagethree', 'imagefour'];

    protected $visible = ['id', 'title', 'user', 'is_published'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

