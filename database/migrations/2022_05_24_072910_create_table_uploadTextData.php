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
            $table->string('datedecreation');

            $table->string('theme');
            $table->string('soustheme');
            $table->increments('id');
            $table->longText('libellee');
            $table->string('nbo');
            $table->string('texte');
            $table->string('fichedelecture');
            $table->string('fichedaudit');

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

