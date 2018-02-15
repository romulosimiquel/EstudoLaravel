<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('user_id');
            $table->string('user_name');
            $table->string('user_email');
            $table->integer('user_telefone');
            $table->integer('user_whatsapp');
            $table->integer('processo');
            $table->string('tramite');
            $table->string('autor');
            $table->string('reu');
            $table->text('descricao');
            $table->enum('category', ['copia', 'protocolo', 'distribuicao', 'guia']);
            $table->integer('number');
            $table->boolean('active');
            $table->string('image', 50)->nullable();           
            $table->rememberToken();
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
        Schema::dropIfExists('servicos');
    }
}
