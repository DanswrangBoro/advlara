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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('content')->nullable();
            $table->text('excerpt')->nullable();
            $table->string('type')->default('page'); // page, blog, service
            $table->string('status')->default('draft'); // draft, published, archived
            $table->string('template')->default('default'); // default, blog, service, custom
            
            // SEO fields
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            
            // Featured image
            $table->string('featured_image')->nullable();
            
            // Publishing
            $table->timestamp('published_at')->nullable();
            $table->unsignedBigInteger('author_id')->nullable();
            
            // Ordering
            $table->integer('sort_order')->default(0);
            
            // Visibility
            $table->boolean('is_featured')->default(false);
            $table->boolean('show_in_menu')->default(true);
            
            $table->timestamps();
            
            // Indexes
            $table->index(['status', 'type']);
            $table->index(['published_at']);
            $table->index(['sort_order']);
            
            // Foreign keys
            $table->foreign('author_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
