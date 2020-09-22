<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $user = \App\Models\User::create([
            'name' => 'supper_admin',
            'email' => 'eamousa0@gmail.com',
            'password' => bcrypt( 'secret')
        ]);

        $user->attachRole('super_admin');
    }
}
