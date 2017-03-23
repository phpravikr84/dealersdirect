<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStyleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('styles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('year_id');
            $table->integer('style_id')->unique();
            $table->string('name');
            $table->string('body');
            $table->string('trim');
            $table->longText('submodel');
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
        //
    }
}
