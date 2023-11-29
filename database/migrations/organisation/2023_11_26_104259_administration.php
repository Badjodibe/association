<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('administration', function (Blueprint $table) {
            $table->id("id");
            $table->foreignId('post_id')->constrained()->onDelete('cascade');
            $table->foreignId('member_id')->constrained()->onDelete('cascade');
            $table->text('description')->nullable();
            $table->timestamps();
            $table->date("mandat");
            $table->renameColumn('id', 'administration_id');
        });

        Schema::create('secretaire', function (Blueprint $table) {
            $table->id("id");
            $table->foreignId('community_id')->constrained()->onDelete('cascade');
            $table->foreignId('member_id')->constrained()->onDelete('cascade');
            $table->text('description')->nullable();
            $table->timestamps();
            $table->date("mandat");
            $table->renameColumn('id', 'secretaire_id');
        });

        Schema::create('post', function (Blueprint $table) {
            $table->id("id");
            $table->string('title');
            $table->date('dateCreation');
            $table->text('description')->nullable();
            $table->timestamps();
            $table->renameColumn('id', 'podt_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administration');
        Schema::dropIfExists('post');
        Schema::dropIfExists('secretaire');
    }
};
