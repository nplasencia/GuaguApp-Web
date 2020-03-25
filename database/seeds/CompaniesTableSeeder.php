<?php

use Illuminate\Database\Seeder;
use App\Commons\CompanyContract;
use App\Model\Company;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
           CompanyContract::NAME       => 'Transportes Interurbanos de Tenerife, S.A.',
           CompanyContract::SHORT_NAME => 'TITSA',
        ]);

        Company::create([
            CompanyContract::NAME       => 'Intercity Bus Lanzarote',
            CompanyContract::SHORT_NAME => 'Intercity',
        ]);
    }
}
