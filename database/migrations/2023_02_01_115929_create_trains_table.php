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

            $table->string('place_of_departure', 64);
            $table->date('departure_date');
            $table->time('departure_time');
            $table->string('place_of_arrival');
            $table->dateTime('arrival_date');
            $table->time('arrival_time');
            $table->integer('price')->unsigned();
            $table->string('train_code', 32);
            $table->string('owner_company', 64);
            
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
