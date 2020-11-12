<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shows', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('cover');
            $table->enum('type', ['movie', 'tvShow']);
            $table->text('story');
            $table->enum('rating', ['+18', '+16','+14','+12','-12']);
            $table->year('year');
            $table->string('contry');
            $table->integer('seasons')->default(null);
            $table->integer('watched')->default(0);
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
        Schema::dropIfExists('shows');
    }
}
