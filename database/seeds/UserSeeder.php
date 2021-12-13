<?php

use App\Constants\Roles;
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
            'name' => 'Islam Gad',
            'email' => 'islam@nastyvs.com',
            'password' =>'password',
            'role' => Roles::ADMIN,
            'email_verified_at' => now()
        ]);

        User::create([
            'name' => 'Marwan',
            'email' => 'marwan@nastyvs.com',
            'password' =>'admin102030',
            'role' => Roles::ADMIN,
            'email_verified_at' => now()
        ]);


        //factory(User::class, 100)->create();
    }
}
