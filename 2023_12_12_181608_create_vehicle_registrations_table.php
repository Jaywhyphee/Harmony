<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehichleregistrations', function (Blueprint $table) {

        $table->id();
        $table->string('Veh_No');
        $table->enum('Veh_Type',['Car','Motorcycle']);
        $table->string('Veh_SiriNo')->unique();
        $table->string('Veh_Brand');
        $table->string('Res_ID');
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
        Schema::dropIfExists('vehicle_registrations');
    }
};
