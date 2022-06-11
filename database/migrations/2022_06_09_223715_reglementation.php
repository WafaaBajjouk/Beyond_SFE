<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Reglementation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('reglementation', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('status');
            $table->integer('idclient');
            $table->integer('idtext');

            $table->string('client_name');
            $table->text('text');
            $table->foreign('id_client')->references('id')->on('clients')->onDelete('cascade');

            $table->foreign('id_text')->references('id')->on('text_regs')->onDelete('cascade');
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
