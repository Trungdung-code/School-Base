<?php

namespace App\Repositories;
use App\Models\Category;

class CategoryRepository
{
    public function categories()
    {
        return Category::all();
    }

    public function category($id)
    {
        return Category::findOrFail($id);
    }

    public function createByName($name, $groupId)
    {
        $category = new Category();
        $category->name = $name;
        $category->category_group_id = $groupId;
        $category->save();
        return $category;
    }
}
