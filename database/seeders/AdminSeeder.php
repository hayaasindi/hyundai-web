<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;


class AdminSeeder extends Seeder
{

    public function run(): void
    {


        $adminRole = Role::firstOrCreate([
            'name'=>'admin',
            'guard_name'=>'web'
        ]);



        $admin = User::create([

            'name'=>'Administrator',

            'email'=>'admin@hyundai.com',

            'password'=>Hash::make('admin12345')

        ]);



        $admin->assignRole($adminRole);


    }

}