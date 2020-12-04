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
        return $this->belongsTo('App\Models\Blog');
    }

    protected $table = 'categories';
    protected $fillable = [
        'name',
        'blog_item_id',
    ];
}
