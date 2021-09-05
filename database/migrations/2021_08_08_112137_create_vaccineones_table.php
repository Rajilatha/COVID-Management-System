<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVaccineonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaccineones', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('detail_id')->unsigned();
            $table->string('time');
            $table->date('date');
            $table->string('vaccine');

            $table->timestamps();
            $table->foreign('detail_id')->references('id')->on('details')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vaccineones');
    }
}
