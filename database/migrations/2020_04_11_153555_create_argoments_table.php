<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArgomentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('argoments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('edu_id');
            $table->string('tag', 32);
            $table->mediumText('sh_descr');
            $table->timestamps();

            /**
             * Vincoli di chiave
             */
            $table->foreign('edu_id')->references('id')->on('educations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('argoments');
    }
}