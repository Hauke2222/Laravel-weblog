<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Te7aHoudini\LaravelTrix\Traits\HasTrixRichText;

class Comment extends Model
{
    public $timestamps = false;
    use HasFactory;
    use HasTrixRichText;

    protected $table = 'comments';
    protected $fillable = [
        'comment',
        'blog_item_id',
    ];
}
