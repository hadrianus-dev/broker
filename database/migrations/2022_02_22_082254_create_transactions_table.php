<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('requerimento_id');
            //IMOVEL
            $table->boolean('imovel');
            $table->text('tipologia', 100);
            $table->text('tipo_imovel', 100)->nullable();
            $table->text('distrito', 100)->nullable();
            $table->text('municipio', 100)->nullable();
            $table->text('provincia', 100)->nullable();
            $table->longText('avaliacao')->nullable();
            $table->decimal('valor')->nullable();
            //OUTRO
            $table->boolean('conversivel');
            $table->text('moeda', 100)->nullable();
            $table->text('sigla', 100)->nullable();
            $table->boolean('transacao')->nullable();
            $table->boolean('deposito');
            $table->text('iban', 100)->nullable();
            $table->text('conta', 100)->nullable();
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
        Schema::dropIfExists('transactions');
    }
}
