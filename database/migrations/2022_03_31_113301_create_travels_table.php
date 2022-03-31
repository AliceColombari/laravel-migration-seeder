<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->id();

            // preparazione migrations
            // importa dati all'interno della nostra table
            $table->string('city', 50)->unique();
            $table->string('address', 50);
            $table->text('description');
            $table->string('type', 50);
            $table->string('departure', 20);
            $table->string('arrivals', 20);
            $table->decimal('price', 8, 2)->unsigned();
            $table->time('departure_time', 0);
            $table->time('arrivals_time', 0);
 
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
        Schema::dropIfExists('travels');
    }
}
