<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulaireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulaire', function (Blueprint $table) {
            $table->id();
            $table->string('address',100);
            $table->string('tel',100);
            $table->string('cin_nif',100);
            $table->string('state',100)->default("non traite");
            $table->timestamps();


            $table->foreignId('user_id')
                  ->constrained()
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formulaire');
    }
}
