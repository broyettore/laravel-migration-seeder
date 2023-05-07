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
            $table->string("Train Id", 10);
            $table->string("Train Company", 15);
            $table->string("From (Station)", 20);
            $table->string("To (Station)", 20);
            $table->dateTime("Departure Time");
            $table->dateTime("Arrival Time");
            $table->tinyInteger("Carriage Number");
            $table->string("On Time", 3);
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
