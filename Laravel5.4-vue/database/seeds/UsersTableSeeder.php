<?php

use Illuminate\Database\Seeder;
// Importado
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 25)->create();
    }
}
