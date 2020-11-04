<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $timestamps = false;
    use HasFactory;

    public function roles()
    {
        return $this->belongsToMany('App\Models\Role', 'user_roles', 'user_id', 'role_id');
    }

    protected $table = 'users';
    protected $fillable = [
        'first_name',
        'last_name',
        'subscription_status',
        'e-mail',
        'password',
    ];
}
