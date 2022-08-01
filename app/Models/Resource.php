<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    const TYPE_VIDEO = "video";
    const TYPE_AUDIO = "audio";
    const TYPE_PDF = "pdf";
    const TYPE_IMG = "image";
    protected $fillable = [
        'resourceable_id', 'resourceable_type', 'path','properties'
    ];

    public function resourceable()
    {
        return $this->morphTo();
    }

}
