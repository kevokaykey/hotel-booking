<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            
            'fullname' => 'admin',
            'hotelname' => 'null',
            'hotelowner' => '1',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'remember_token' => str_random(10),


]);
    }
}
