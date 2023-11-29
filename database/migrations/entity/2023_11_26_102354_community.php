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
        Schema::create('community', function (Blueprint $table) {
            $table->id("id");
            $table->string('name');
            $table->text('description')->nullable();
            $table->timestamps();
            $table->date("belongDate");
            $table->string("path_to_logo");
            $table->renameColumn('id', 'community_id');
        });

        Schema::create('member', function (Blueprint $table) {
            $table->id("id");
            $table->foreignId('community_id')->constrained()->onDelete('cascade');
            $table->date("inscription_date");
            $table->string("title");
            $table->string("cycle");
            $table->string("biographie");
            $table->string("path_to_photo");
            $table->string("filliere");
            $table->string("nationality");
            $table->string("mail");
            $table->renameColumn('id', 'member_id');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('membres');
        Schema::dropIfExists('communautes');
    }
};
