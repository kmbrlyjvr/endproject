<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('text')->nullable();
            $table->string('price')->nullable();
            $table->string('svg')->nullable();
            $table->string('hero')->nullable();
            $table->string('imagetwo')->nullable();
            $table->string('imagethree')->nullable();
            $table->string('imagefour')->nullable();            
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
        Schema::dropIfExists('item');
    }
}
