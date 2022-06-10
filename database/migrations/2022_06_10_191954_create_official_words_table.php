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
        Schema::create('official_words', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('title');
            $table->string('speaker');
            $table->string('pdf')->nullable();
            $table->string('audio')->nullable();
            $table->string('video')->nullable();
            $table->string('status')->default('Official Word');
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
        Schema::dropIfExists('official_words');
    }
};
