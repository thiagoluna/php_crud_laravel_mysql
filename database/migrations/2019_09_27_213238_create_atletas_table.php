<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtletasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atletas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',255);
            $table->string('email',190)->unique();
            $table->string('senha',255);
            $table->string('endereco',255)->nullable();
            $table->string('bairro',255)->nullable();
            $table->string('cidade',150)->nullable();
            $table->string('cep',150)->nullable();
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
        Schema::dropIfExists('atltas');
    }
}
