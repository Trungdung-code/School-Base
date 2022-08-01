<?php

use Illuminate\Database\Seeder;

class UpdateContestsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contests')->update(['content'=>(string) json_encode([41, 42, 43, 44, 45])]);
    }
}
