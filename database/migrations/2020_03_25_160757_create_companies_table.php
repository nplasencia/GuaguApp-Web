<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Commons\CompanyContract;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(CompanyContract::TABLE_NAME, function (Blueprint $table) {
            $table->id();
            $table->string(CompanyContract::NAME);
            $table->string(CompanyContract::SHORT_NAME);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(CompanyContract::TABLE_NAME);
    }
}
