<?php
namespace Seeder\Web;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->truncate();

        factory(\App\Models\User::class, 20)->create()->each(function($u) {
            factory(\App\Models\Resource::class)->create([
                'resourceable_id' => $u->id,
                'resourceable_type' => \App\Models\User::class,
            ]);
        });

        $admin = factory(\App\Models\User::class)->create([
            'name' => 'admin',
            'email' => 'admin@stamp.book',
            'password' => bcrypt('admin@stamp.book'),
            'role' => User::ROLE_ADMIN,
        ]);

        factory(\App\Models\Resource::class)->create([
          'resourceable_id' => $admin->id,
          'resourceable_type' => \App\Models\User::class,
        ]);
    }
}
