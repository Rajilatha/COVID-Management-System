<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuarantinedetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quarantinedetails', function (Blueprint $table) {
            $table->id();
            $table->string('nic_no');
            $table->string('fname')->nullable();            
            $table->string('address')->nullable();
            $table->integer('age')->nullable();
            $table->string('gender')->nullable();
            $table->date('start_date');
            $table->date('end_date');
            $table->string('status')->nullable();
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
        Schema::dropIfExists('quarantinedetails');
    }
}
