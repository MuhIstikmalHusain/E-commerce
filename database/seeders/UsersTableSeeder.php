<?php

namespace Database\Seeders;
use App\Models\User; 

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nama' => 'Husain',
            'jk' => 'L',
            'email'=> 'user@gmail.com',
            'no_telepon'=> '081253007645',
            'role'=> 'user',
            'password'=> Hash::make('12345'),
        ]);
        User::create([
            'nama' => 'Istikmal',
            'jk' => 'L',
            'email'=> 'superadmin@gmail.com',
            'no_telepon'=> '081253007645',
            'role'=> 'superadmin',
            'password'=> Hash::make('12345'),
        ]);
        User::create([
            'nama' => 'Admin',
            'jk' => 'L',
            'email'=> 'adm@gmail.com',
            'no_telepon'=> '081253007645',
            'role'=> 'admin',
            'password'=> Hash::make('12345'),
        ]);
    }
}
