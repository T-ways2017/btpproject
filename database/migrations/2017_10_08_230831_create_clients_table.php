<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->engine='InnoDB';
            $table->increments('idClient');
            $table->string('nom');
            $table->string('prenom');
            $table->string('email',100)->unique();
            $table->string('phone',10)->unique();
            $table->date('birthday');
            $table->string('photo');
            $table->string('fonction')->nullable();
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
        Schema::dropIfExists('clients');
    }
}
