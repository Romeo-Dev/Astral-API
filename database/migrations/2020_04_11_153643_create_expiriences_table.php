<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpiriencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expiriences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profile_id');
            $table->string('ruolo', 50);
            $table->string('azienda', 80);
            $table->longText('descrizione');
            $table->date('start');
            $table->date('end');
            $table->timestamps();

            /**
             * Vincoli di chiave
             */
            $table->foreign('profile_id')->references('id')->on('profiles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expiriences');
    }
}
