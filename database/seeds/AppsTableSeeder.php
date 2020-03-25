<?php

use Illuminate\Database\Seeder;
use App\Commons\AppContract;
use App\Model\App;

class AppsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App::create([
            AppContract::NAME       => 'GuaguApp Tenerife',
            AppContract::PACKAGE    => 'com.auret.guaguapp_tf',
        ]);

        App::create([
            AppContract::NAME       => 'GuaguApp Lanzarote',
            AppContract::PACKAGE    => 'com.auret.guaguapp_lzt',
        ]);
    }
}
