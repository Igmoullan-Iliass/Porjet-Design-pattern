<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRendvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rendv', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->datetime('time');
            $table->string('status');
            $table->foreignId('id_resp')->constrained('responsable')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_client')->constrained('clients')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('rendv');
    }
}