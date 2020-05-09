<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointment', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime("appointmentdate");
            $table->string("hour");
            $table->bigInteger("clientid")->unsigned();
            $table->bigInteger("testtypeid")->unsigned();
            $table->bigInteger("samplestypeid")->unsigned();
            $table->foreign("clientid")->references("id")->on("client")->onDelete('cascade');
            $table->foreign("testtypeid")->references("id")->on("testtype")->onDelete('cascade');
            $table->foreign("samplestypeid")->references("id")->on("samplestype")->onDelete('cascade');
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
        Schema::dropIfExists('appointment');
    }
}
