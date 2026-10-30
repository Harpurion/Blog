<?php

namespace App\Models;

use Database\Factories\ImageFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    /** @use HasFactory<ImageFactory> */
    use HasFactory;

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
