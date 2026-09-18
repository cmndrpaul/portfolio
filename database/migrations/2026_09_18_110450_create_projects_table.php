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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');
            $table->longText('long_description')->nullable();
            $table->string('category')->default('Full-Stack');
            $table->string('featured_image')->nullable();
            $table->json('images')->nullable();
            $table->json('tags')->nullable();
            $table->string('github_url')->nullable();
            $table->string('live_url')->nullable();
            $table->string('client')->nullable();
            $table->string('role')->nullable();
            $table->string('year')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
