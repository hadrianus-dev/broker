<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('requerimento_id');
            //DADOS
            $table->boolean('h_preventiva');
            $table->text('situacao', 100);
            $table->text('mt_imovel', 100);
            $table->text('tipologia', 100);
            $table->text('inquilinato', 100);
            $table->text('urbanizacao', 100);
            $table->decimal('provisao_mensal')->nullable();
            $table->integer('vigencia')->nullable();
            $table->date('inicio')->nullable();
            $table->date('fim')->nullable();
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
        Schema::dropIfExists('providers');
    }
}
