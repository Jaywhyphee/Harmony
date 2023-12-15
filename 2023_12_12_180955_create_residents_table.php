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
        Schema::create('residents', function (Blueprint $table) {
        
        $table->id();
        $table->string('Res_ID');
        $table->string('Res_Email');
        $table->string('Res_Name');
        $table->string('Res_Mobile')->unique();
        $table->string('Res_Ic')->unique();
        $table->integer('Res_HouseNo');
        $table->string('Res_Address');
        $table->string('Password');
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
        Schema::dropIfExists('residents');
    }
};
