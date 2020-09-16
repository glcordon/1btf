<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSusuUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('susu_user', function (Blueprint $table) {
            $table->id();
            
            $table->bigInteger('susu_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->string('position', 40);
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
        Schema::dropIfExists('susu_user');
    }
}
