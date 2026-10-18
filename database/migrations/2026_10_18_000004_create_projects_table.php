<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('type');                // analysis | ml | engineering | web
            $table->string('thumb');               // bars | scatter | pipeline | browser | donut | matrix
            $table->boolean('is_dark')->default(false);
            $table->string('title');
            $table->text('description');
            $table->text('contribution');
            $table->json('tags')->nullable();
            $table->string('url');
            $table->string('repo_url')->nullable();
            $table->string('demo_url')->nullable();
            $table->unsignedSmallInteger('sort_order')->default(0);
            $table->boolean('is_published')->default(true);
            $table->timestamps();

            $table->index(['is_published', 'sort_order']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
