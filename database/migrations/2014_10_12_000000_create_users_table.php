<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Commons\UserContract;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(UserContract::TABLE_NAME, function (Blueprint $table) {
            $table->id();
            $table->string(UserContract::NAME);
            $table->string(UserContract::EMAIL)->unique();
            $table->timestamp(UserContract::EMAIL_VERIFIED)->nullable();
            $table->string(UserContract::PASSWORD);
            $table->boolean(UserContract::IS_ADMIN)->default(false);
            $table->rememberToken();
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
        Schema::dropIfExists(UserContract::TABLE_NAME);
    }
}
