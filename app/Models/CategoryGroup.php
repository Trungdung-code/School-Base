<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryGroup extends Model
{

    const UNIVERSITY = 'UNIVERSITY';
    /**
     * @return cover belong to this Course Group
     */
    public function coverImage()
    {
        return $this->morphOne(Resource::class, 'resourceable');
    }

    /**
     * return all categories belongs to this Group
     */
    public function categories()
    {
        return $this->hasMany('App\Models\Category');
    }

    public function hasClass()
    {
        $categories = $this->categories;
        foreach ($categories as $category)
        {
            if($category->hasClass())
            {
                return true;
            }
            
        }
        return false;
    }

    public function courses()
    {
        return $this->hasManyThrough('\App\Models\Course', '\App\Models\Category');
    }
}
