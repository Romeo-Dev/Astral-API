<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMansionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mansions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('exp_id');
            $table->string('mansione');
            $table->mediumText('sh_desc');
            $table->timestamps();

            /**
             * Vincoli di chiave
             */
            $table->foreign('exp_id')->references('id')->on('expiriences');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mansions');
    }
}
