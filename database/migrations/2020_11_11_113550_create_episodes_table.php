<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpisodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('episodes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('show_id');
            $table->integer('season')->default(null)->nullable();
            $table->integer('number')->default(null)->nullable();
            $table->text('link');
            $table->string('duration')->default(null)->nullable();
            $table->timestamps();
            $table->foreign('show_id')->references('id')->on('shows')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('episodes');
    }
}
