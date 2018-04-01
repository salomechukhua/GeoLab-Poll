<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
        	'name'=>'admin',
        	'email'=>'admin@polls.ge',
            'image' => 'mandala-to-download-in-pdf-6.jpg',
        	'password'=>bcrypt('admin123'),
            'repassword'=>bcrypt('admin123'),
        ]);
    }
}

