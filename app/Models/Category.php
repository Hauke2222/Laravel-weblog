<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;
    use HasFactory;

    public function blog()
    {
        return $this->belongsToMany('App\Models\Blog', 'blog_items_categories', 'blog_item_id', 'category_id');
    }

    protected $table = 'categories';
    protected $fillable = [
        'name',
        'blog_item_id',
    ];
}
