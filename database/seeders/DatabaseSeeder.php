<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // 1. Создаем основные роли
        $this->call(RoleSeeder::class);

        // 2. Создаем тестовых пользователей
        $this->call(UserSeeder::class);

        // 3. Другие сидеры (если есть)
        // $this->call(CarSeeder::class);
        // $this->call(RemontSeeder::class);
    }
}
