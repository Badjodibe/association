<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('administration', function (Blueprint $table) {
            $table->id('administration_id');
            $table->foreignId('post_id')->references('post_id')->on('posts');
            $table->foreignId('member_id')->references('member_id')->on('membres')->unique();
            $table->text('description')->nullable();
            $table->string('mandat')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('administration');
    }

};