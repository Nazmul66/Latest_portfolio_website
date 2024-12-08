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
        Schema::create('blog_sections', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->integer('user_id');
            $table->integer('comment_id')->nullable();
            $table->string('title');
            $table->string('slug');
            $table->text('image');
            $table->text('description');
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_image')->nullable();
            $table->boolean('status')->default(1)->comment('1=active, 0=inactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_sections');
    }
};
