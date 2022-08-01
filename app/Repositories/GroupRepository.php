<?php

namespace App\Repositories;
use App\Models\CategoryGroup;

class GroupRepository
{
    public function groups()
    {
        return CategoryGroup::all();
    }

    public function group($id)
    {
        return CategoryGroup::findOrFail($id);
    }

    public function findByName($name)
    {
        return CategoryGroup::where('name','=',$name)->first();
    }

}
