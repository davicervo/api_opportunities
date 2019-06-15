<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_with_us', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->boolean('working_at_moment')->nullable();
            $table->string('if_yes_working_at_moment')->nullable();
            $table->enum('position', ['administração', 'analista_de_sistemas', 'analista_de_testes', 'desenvolvedor', 'marketing', 'product_owner', 'recursos_humanos', 'scrum_master', 'ux_designer', 'vendas'])->nullable();
            $table->boolean('pj')->nullable();
            $table->double('salary')->nullable();
            $table->string('email');
            $table->enum('status', ['contacted', 'no_answered', 'waiting' ])->default('no_answered');
            $table->datetime('contacted');
            $table->timestamps();
            $table->softDeletesTz(); //validar se é necessário
        });
        
        Schema::table('opportunities', function (Blueprint $table) {
            $table->foreign('contacted_by')->references('id')->on('users')
                    ->onUpdate('cascade')->onDelete('cascade');
            
            // esta exbindo um erro e não vejo sentido em usar esta logica aqui.
            /*
            SQLSTATE[42000]: Syntax error or access violation: 1072 Key column 'opportunity_id' doesn't exist in table (SQL: alter table `opportunities` add constraint `opportunities_opportunity_id_foreign` foreign key (`opportunity_id`) references `opportunities` (`id`) on delete cascade on update cascade)
            **/
            // $table->foreign('opportunity_id')->references('id')->on('opportunities')
            //         ->onUpdate('cascade')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('work_with_us');
    }
}
