<?php

use Illuminate\Database\Seeder;
use App\Commons\UserContract;
use App\Model\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            UserContract::NAME => 'Nauzet Plasencia',
            UserContract::EMAIL => 'nauzet.plasencia.cruz@gmail.com',
            UserContract::PASSWORD => bcrypt('admin'),
            UserContract::IS_ADMIN => true
        ]);
    }
}
