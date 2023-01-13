<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('r_d_v_s', function (Blueprint $table) {
            $table->id();
            $table->boolean('Canceled');
            $table->boolean('Validate');
            $table->boolean('Refused');
            $table->foreignId('client_id')->references('id')->on('clients');
            $table->foreignId('technicien_id')->references('id')->on('techniciens');
            $table->foreignId('succurcale_id')->references('id')->on('succurcales');

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
        Schema::dropIfExists('r_d_v_s');
    }
};
