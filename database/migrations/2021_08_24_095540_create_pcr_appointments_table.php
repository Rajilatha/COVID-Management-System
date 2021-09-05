<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePcrAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pcr_appointments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pcr_id')->unsigned();
            $table->string('time_slot');
            $table->date('date');
            $table->string('place');

            $table->timestamps();
            $table->foreign('pcr_id')->references('id')->on('pcr_results')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pcr_appointments');
    }
}
