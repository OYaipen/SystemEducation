<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Administrador',
            'email' => 'administrador@systemedu.com',
            'password' => bcrypt('admin1999'),
            'type' => 'admin',
            'photo'=>'avatar.png'
        ]);
    }
}
