<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Commons\BusContract;
use App\Commons\CompanyContract;

class CreateBusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(BusContract::TABLE_NAME, function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger(BusContract::COMPANY_ID);
            $table->string(BusContract::NAME);
            $table->timestamps();

            $table->foreign(BusContract::COMPANY_ID)->references(CompanyContract::ID)->on(CompanyContract::TABLE_NAME);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(BusContract::TABLE_NAME);
    }
}
