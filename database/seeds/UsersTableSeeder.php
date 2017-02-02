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
        $users = User::create([
        	'username'	=>	'didik',
        	'password'	=>	bcrypt('didik123'),
            'level' => 'admin'
        ]);
    }
}
