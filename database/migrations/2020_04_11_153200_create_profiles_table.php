<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 32);
            $table->string('cognome', 32);
            $table->longText('descrizione');
            $table->string('img');
            $table->string('email', 32);
            $table->string('indirizzo', 50);
            $table->string('tel', 20);
            $table->string('professione', 32);
            $table->string('git', 32)->default('http://');
            $table->string('skype', 32)->default('http://');
            $table->string('facebook', 32)->default('http://');
            $table->string('instagram', 32)->default('http://');
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
        Schema::dropIfExists('profiles');
    }
}
