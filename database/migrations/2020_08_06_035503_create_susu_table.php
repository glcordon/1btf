<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSusuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('susu', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->nullable();
            $table->integer('status')->unsigned()->nullable()->default(0);
            $table->integer('amount')->unsigned()->nullable()->default(0);
            $table->integer('admin_id')->unsigned();
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
        Schema::dropIfExists('susu');
    }
}
