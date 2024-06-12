<?php
namespace Database\Seeders;

use App\Models\User;
use App\Models\Books;
use App\Models\Publishers;
use App\Models\Suppliers;
use App\Models\Authors;
use App\Models\Pages;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        Publishers::create([
            'название' => 'Тестовое издательство 3',
        ]);
    
        Suppliers::create([
            'название_пост' => 'Тестовый поставщик 3',
            'адрес_пост' => 'Тестовый адрес 2',
            'телефон' => '0987654321',
        ]);
        Authors::create([
            'фамилия' => 'Тестовая фамилия 2',
            'имя' => 'Тестовое имя 2',
            'отчество' => 'Тестовое отчество 2',
            'дата_рождения' => '1980-01-01',
        ]);
        Pages::create([
            'раздел' => 'Тестовый раздел 2',
        ]);
    }
}
