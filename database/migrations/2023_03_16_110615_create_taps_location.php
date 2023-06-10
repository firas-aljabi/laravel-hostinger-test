<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('taps_location', function (Blueprint $table) {
            $table->increments("id");
            //onDelete('cascade') is for(if the user is deleted all of his listing will be deleted)
            $table->string('location');
            $table->string('personName');
            $table->string('website');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('taps_location');
    }
};
