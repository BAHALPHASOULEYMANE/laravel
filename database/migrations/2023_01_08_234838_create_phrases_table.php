<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phrases', function (Blueprint $table) {
            $table->id();
            //$table->integer('projet_id')->unsigned();
            //$table->foreign('projet_id')->references('id')->on('projets');
           // $table->foreignId('projet_id')->constrained();
            $table->string('nom');
            $table->integer('duree');
            $table->string('priorite');
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
        Schema::dropIfExists('phrases');
    }
};
