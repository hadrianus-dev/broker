<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->text('nome', 100);
            $table->text('sobrenome', 100)->nullable();
            $table->text('apelido', 100);
            $table->text('titulo_honorifico', 100);
            $table->boolean('sexo');
            $table->text('cover')->nullable();
            $table->text('email', 100);
            $table->text('telefone', 100);
            $table->text('telefone1', 100)->nullable();
            $table->text('distrito', 100);
            $table->text('municipio', 100);
            $table->text('provincia', 100);
            $table->text('endereco', 100);
            //DADOS PESSOAIS
            $table->text('identidade', 100);
            $table->text('nacionalidades', 100);
            $table->text('estado_civil', 100);
            $table->longText('perfil')->nullable();
            $table->Text('grau_instrucao')->nullable();
            //DADOS PROFISSIONAIS
            $table->boolean('situacao');
            $table->text('profissao', 100)->nullable();
            $table->text('empresa', 100)->nullable();
            $table->text('endereco_empresa', 100)->nullable();
            $table->text('telefone_empresa', 100)->nullable();
            $table->text('email_empresa', 100)->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
