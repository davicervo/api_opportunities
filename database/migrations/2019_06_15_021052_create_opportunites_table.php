<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpportunitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opportunities', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('contacted_by')->unsigned()->nullable();
            $table->string('opportunity')->nullable();
            $table->string('description')->nullable();
            $table->enum('city', ['São Paulo-SP', 'Uberlândia-MG', 'Catanduva-SP'])->nullable();
            $table->enum('contraction_type', ['clt', 'pj', 'freelancer' ])->nullable();
            $table->double('salary')->nullable();
            $table->boolean('status'); //ativa ou nao
            $table->datetime('contacted');
            $table->timestamps();
            $table->softDeletesTz(); //validar se é necessário
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opportunities');
    }
}
