<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Администратор
        $admin = User::firstOrCreate([
            'email' => 'admin@autoservice.com'
        ], [
            'name' => 'Администратор',
            'password' => Hash::make('password'),
        ]);
        $admin->assignRole('admin');

        // Механик
        $mechanic = User::firstOrCreate([
            'email' => 'mechanic@autoservice.com'
        ], [
            'name' => 'Иван Механиков',
            'password' => Hash::make('password'),
        ]);
        $mechanic->assignRole('mechanic');

        // Клиент
        $client = User::firstOrCreate([
            'email' => 'client@example.com'
        ], [
            'name' => 'Петр Клиентов',
            'password' => Hash::make('password'),
        ]);
        $client->assignRole('client');
    }
}
