<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdmin = \App\Models\Role::create([
            'name'=> 'supper_admin',
            'display_name'=> 'supper admin',
            'description'=> 'can do any thing'


        ]);

        $user = \App\Models\Role::create([
            'name' => 'user',
            'display_name' => 'user',
            'description' => 'can do tasks '


        ]);
    }
}
