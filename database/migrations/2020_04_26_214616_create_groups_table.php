<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('table_name',50);
            $table->integer("count_field");
            $table->integer('userid')->unsigned();
            $table->bigInteger("typeTestid")->unsigned();
            $table->foreign("userid")->references("id")->on("users")->onDelete('cascade');
            $table->foreign("typeTestid")->references("id")->on("testtype")->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('groups');
    }
}