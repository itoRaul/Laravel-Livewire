<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //no terminal: php artisan make:seeder UserSeed
        User::factory(10)->create();//Cria 10 usuários e adiciona na tabela users
    }
}
