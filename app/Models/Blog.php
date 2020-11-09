<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Te7aHoudini\LaravelTrix\Traits\HasTrixRichText;

class Blog extends Model
{
    public $timestamps = false;
    use HasFactory;
    use HasTrixRichText;

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category', 'blog_items_categories', 'blog_item_id', 'category_id');
    }

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
