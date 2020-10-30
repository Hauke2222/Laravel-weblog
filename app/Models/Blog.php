<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blog_items';
    protected $fillable = [
        'title',
        'date',
        'author',
        'page_content',
        'premium_content_status',
        'comments',
    ];
}
