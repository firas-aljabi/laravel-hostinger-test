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
        Schema::create('NFC.user_infos', function (Blueprint $table) {
            $table->increments("id");
     
            //onDelete('cascade') is for(if the user is deleted all of his listing will be deleted)
            $table->string('name');
            $table->string('email');
            $table->string('location');
            $table->string('phonenumber');
            $table->string('photo');
            $table->string('bio');
            $table->string('facebook');
            $table->string('instagrame');
            $table->string('twitter');
            $table->string('tiktok');
            $table->string('linkedIn');
            $table->string('telegrame');
            $table->string('Buissnes_type');
            $table->string('emailLogedIn');
            $table->string('whatsapp');
            $table->boolean('appleWallet');
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
        Schema::dropIfExists('NFC.user_infos');
    }
};
