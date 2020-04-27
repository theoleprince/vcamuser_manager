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
        // $this->call(UserSeeder::class);
        DB::table('users')->insert([
            'first_name' => 'Fowo',
            'last_name' => 'Descartes',
            'email' => 'admin@gmail.com',
            'job' => 'Administrateur système',
            'is_active' => true,
            'avatar' => null,
            'facebook' => null,
            'password' => bcrypt('admin'),
        ]);
    }
}
