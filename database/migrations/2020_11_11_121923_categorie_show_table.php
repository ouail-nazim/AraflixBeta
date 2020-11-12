<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CategorieShowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorie_show', function (Blueprint $table) {
            $table->primary(['categorie_id','show_id']);
            $table->foreignId('categorie_id');
            $table->foreignId('show_id');
            $table->timestamps();

            $table->foreign('categorie_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');
            $table->foreign('show_id')
                ->references('id')
                ->on('shows')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorie_show');
    }
}
