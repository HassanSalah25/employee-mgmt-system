<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username'  => 'admin',
            'email'     => 'admin@admin.com',
            'password'  => bcrypt('admin'),
            'lastname'  => 'Mr',
            'firstname' => 'admin'
        ]);
    }
}
