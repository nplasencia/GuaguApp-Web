<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Commons\AppContract;
use App\Commons\UserContract;
use App\Commons\CompanyContract;
use App\Commons\BusContract;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTables([
            UserContract::TABLE_NAME,
            AppContract::TABLE_NAME,
            CompanyContract::TABLE_NAME,
            BusContract::TABLE_NAME,
        ]);
        $this->call(UsersTableSeeder::class);
        $this->call(AppsTableSeeder::class);
        $this->call(CompaniesTableSeeder::class);
        $this->call(BusesTableSeeder::class);
    }

    protected function truncateTables(array $tables)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
    }
}
