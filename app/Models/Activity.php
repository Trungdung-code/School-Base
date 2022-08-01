<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = ['name', 'slug', 'cover', 'description', 'content', 'start', 'finish', 'address'];
    protected $dates = ['start', 'finish'];
}
