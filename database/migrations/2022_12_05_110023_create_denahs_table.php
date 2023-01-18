<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDenahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('denahs', function (Blueprint $table) {
            $table->id();
            $table->string('nama',225);
            $table->integer('luas');
            $table->integer('kapasitas');
            $table->string('denah',225);
            // $table->unsignedBigInteger('gedung_id');
            // $table->foreignId('gedung_id');
            $table->foreignId('gedung_id')->references('id')->on('gedungs');
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
        Schema::dropIfExists('denahs');
    }
}
