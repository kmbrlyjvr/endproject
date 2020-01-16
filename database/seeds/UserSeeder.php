<?php

use App\Models\Posting;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    User::create([

            'name' => 'Kimberly Javier',
            'email' => 'kmbrly@gmail.com',
            'password' => 'password',
            'adress' => 'Neubaugasse 56',
            'zip' => '1060 Vienna',
            'Country' => 'Austria',
            'user_group' => '1'
        ]);

    }
}
