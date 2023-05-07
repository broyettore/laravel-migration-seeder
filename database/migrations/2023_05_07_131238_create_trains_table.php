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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("Train_Id", 10);
            $table->string("Train_Company", 15);
            $table->string("From_Station", 20);
            $table->string("To_Station", 20);
            $table->dateTime("Departure_Time");
            $table->dateTime("Arrival_Time");
            $table->tinyInteger("Carriage_Number");
            $table->string("On_Time", 3);
            $table->string("Cancelled", 10);
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
        Schema::dropIfExists('trains');
    }
};
