<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOuvragesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ouvrages', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->increments('idOuvrage');
            $table->string('name_ouvrage');
            $table->string('image_ouvrage');
            $table->date('debut_prevu');
            $table->date('fin_prevu');
            $table->float('lat',10,10);
            $table->float('lng',10,10);

            $table->integer('idClient')->unsigned();
            $table->foreign('idClient')
                ->references('idClient')
                ->on('clients')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->integer('idEtat')->unsigned();
            $table->foreign('idEtat')
                ->references('idEtat')
                ->on('etat_avances')
                ->onDelete('restrict')
                ->onUpdate('restrict')
            ;


            $table->integer('idTypeOuvr')->unsigned();
            $table->foreign('idTypeOuvr')
                ->references('idTypeOuvr')
                ->on('type_ouvrages')
                ->onDelete('restrict')
                ->onUpdate('restrict')
            ;
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

        Schema::table('ouvrages', function (Blueprint $table) {
            //
            $table->dropForeign('ouvrages_client_idClient_foreign');
            $table->dropForeign('ouvrages_type_ouvrage_idTypeOuvr_foreign');
            $table->dropForeign('ouvrages_etat_avance_idEtat_foreign');
        });
        Schema::drop('ouvrages');
    }
}
