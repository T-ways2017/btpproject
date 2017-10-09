<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employes', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->increments('idEmploye');
            $table->string('first_name');
            $table->string('last_name');
            $table->date('birh');
            $table->string('photo');
            $table->string('email')->unique();
            $table->timestamps();

            $table->integer('codCompetence')->unsigned();
            $table->foreign('codCompetence')
                ->references('codCompetence')
                ->on('competences')
                ->onDelete('restrict')
                ->onUpdate('restrict');


            $table->integer('numGroup')->unsigned();
            $table->foreign('numGroup')
                ->references('numGroup')
                ->on('groupes')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employes', function (Blueprint $table) {
            //
            $table->dropForeign('employes_competences_codCompetence_foreign');
            $table->dropForeign('employes_groupe_numGroup_foreign');
        });
        Schema::drop('employes');
    }
}
