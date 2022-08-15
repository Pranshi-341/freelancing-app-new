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
        //
        Schema::create('Publishjobs', function (Blueprint $table) {
            $table->id();
            $table->string('owner_id');
            $table->string('subject')->nullable();
            $table->string('topic')->nullable();
            $table->string('pages')->nullable();
            $table->string('deadline')->nullable();
            $table->string('file')->nullable();
            $table->string('instructions')->nullable();
            $table->string('status')->default(0);
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
        Schema::dropIfExists('Publishjobs');
    }
};
