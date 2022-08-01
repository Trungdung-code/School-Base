<?php

namespace App\Repositories;
use App\Models\Section;

class SectionRepository
{
    public function sections()
    {
        return Section::all();
    }

    public function section($id)
    {
        return Section::findOrFail($id);
    }


}
