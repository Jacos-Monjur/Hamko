<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $data = array(
                [
                'name' => 'Hamko Admin',
                'email' => 'admin@hamko.com',
                'password'=>Hash::make('12345678')
                ],
                [
                    'name' => 'Monjur Ajad',
                    'email' => 'ajad@hamko.com',
                    'password'=>Hash::make('12345678'),
                ]
                );
        $insert = User::insert($data);
    }
}
