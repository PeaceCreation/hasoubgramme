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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('description');
            $table->string('slug');
            $table->integer('likes')->default(0);
            $table->timestamps();
            $table->foreignId('user_id')->nullable()->constrained()->cascadeOnDelete(); // Make user_id nullable
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
