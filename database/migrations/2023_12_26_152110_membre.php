<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('membres', function (Blueprint $table) {
            $table->id('member_id');
            $table->string('name');
            $table->string('surnames');
            $table->foreignId('community_id')->references('community_id')->on('communities')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->unique();
            $table->string('filliere')->nullable();
            $table->date('belongDate')->nullable();
            $table->string('photo')->nullable();
            $table->text('description')->nullable();
            $table->foreignId('role_id')->references('role_id')->on('roles')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('membres');
    }
};

