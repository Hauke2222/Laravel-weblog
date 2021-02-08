<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    public $timestamps = false;
    use HasFactory;
    use HasRoles;

    protected $table = 'users';
    protected $fillable = [
        'name',
        'subscription_status',
        'email',
        'password',
    ];
}
