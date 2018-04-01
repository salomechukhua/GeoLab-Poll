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
            'image' => 'owll.jpg',
        	'password'=>bcrypt('admin123'),
            'repassword'=>bcrypt('admin123'),
        ]);
    }
}

