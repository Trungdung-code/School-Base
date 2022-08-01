<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserClass extends Model
{
    const STATUS_PENDING = "pending";
    const STATUS_JOINED = "joined";
    const STATUS_REJECTED = "rejected";
    const STATUS_BANNED = "banned";
    protected $fillable = ['user_id', 'my_class_id', 'state'];

}
