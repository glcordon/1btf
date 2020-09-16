<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQrScansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qr_scans', function (Blueprint $table) {
            $table->id();
            $table->string('user_secondary_id', 40);
            $table->string('service_id', 100);
            $table->bigInteger('service_value');
            $table->dateTime('date_performed');
            $table->string('country', 50);
            $table->string('city', 50);
            $table->string('state', 20);
            $table->string('ip_address', 100)->nullable();
            $table->string('your_name', 100)->nullable();
            
            $table->text('description')->nullable();
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
        Schema::dropIfExists('qr_scans');
    }
}
