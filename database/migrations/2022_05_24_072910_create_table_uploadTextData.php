<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUploadTextData extends Migration
{
        /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('text_regs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Libellée');
            $table->string('Thème');
            $table->string('SousThème');

            $table->string('DatedeCréation');
            $table->string('N°BO');
            $table->string('Texte');
            $table->string('Fichedelecture');
            $table->string('Fichedaudit');
           
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
        Schema::dropIfExists('textreglementaires');
    }
}

