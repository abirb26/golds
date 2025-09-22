<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewgoldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newgolds', function (Blueprint $table) {
            $table->id();
            $table->char('name');
            $table->char('image');
            $table->string('type');	
            $table->integer('karat');	
            $table->float('grams');	
            $table->float('thickness');	
            $table->string('color');
            $table->string('certificate');	
            $table->float('price');	
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
        Schema::dropIfExists('newgolds');
    }
}
