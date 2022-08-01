<?php

use Illuminate\Database\Seeder;

class ContestsTableStatusColumnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contests')->whereRaw('id % 2 = 0')->update(['status'=>'available']);
        DB::table('contests')->whereRaw('id % 2 = 1')->update(['status'=>'drafted']);
    }
}
