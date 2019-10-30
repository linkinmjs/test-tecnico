<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guys', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('position');
            $table->integer('task_id')->unsigned();;
            $table->timestamps();
        });

        Schema::table('guys', function (Blueprint $table) {
            $table->foreign('task_id')->references('id')->on('tasks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guys');
    }
}
