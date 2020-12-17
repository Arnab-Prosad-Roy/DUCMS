<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCmsSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cms__sliders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('text');
            $table->string('image');
            $table->string('publicity')->default(0);
            $table->unsignedBigInteger('createdBy');
            $table->foreign('createdBy')->references('id')->on('users');
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
        Schema::dropIfExists('cms__sliders');
    }
}
