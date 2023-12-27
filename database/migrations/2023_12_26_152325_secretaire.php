<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('secretaires', function (Blueprint $table) {
            $table->id('secretaire_id');
            $table->foreignId('community_id')->references('community_id')->on('communities')->onDelete('cascade');
            $table->foreignId('member_id')->references('member_id')->on('membres')->onDelete('cascade')->unique();
            $table->string('mandat');
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('secretaires');
    }
};
