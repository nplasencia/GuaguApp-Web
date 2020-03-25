<?php

use Illuminate\Database\Seeder;
use App\Model\Bus;
use App\Model\Company;
use App\Commons\BusContract;
use App\Commons\CompanyContract;

class BusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $company = Company::where(CompanyContract::SHORT_NAME, 'TITSA')->value(CompanyContract::ID);

        Bus::create([
            BusContract::COMPANY_ID => $company,
            BusContract::NAME       => '232'
        ]);
    }
}
