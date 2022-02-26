<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('requerimento_id');
            $table->text('tipologia', 100);
            $table->integer('compartimentos');
            $table->longText('desc_compartimentos')->nullable();
            $table->text('superficie');
            $table->text('distrito', 100);
            $table->text('municipio', 100);
            $table->text('provincia', 100);
            $table->text('endereco', 200);
            $table->longText('avaliacao');
            $table->decimal('preco');
            $table->timestamps();

            $table->foreign('requerimento_id')->references('id')->on('requerimentos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('delivers');
    }
}
