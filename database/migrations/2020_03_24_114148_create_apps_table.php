<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Commons\AppContract;

class CreateAppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(AppContract::TABLE_NAME, function (Blueprint $table) {
            $table->id();
            $table->string(AppContract::NAME);
            $table->string(AppContract::PACKAGE);
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
        Schema::dropIfExists(AppContract::TABLE_NAME);
    }
}
