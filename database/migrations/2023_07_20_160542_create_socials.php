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
        Schema::create('socials', function (Blueprint $table) {
            $table->id();
            $table->string('twitterLink', 500);
            $table->string('githubLink', 500);
            $table->string('linkedinLink', 500);
            $table->string('facebookLink', 500);
            $table->string('instagramLink', 500);
            $table->string('youtubeLink', 500);
            $table->string('behanceLink', 500);
            $table->string('tiktokLink', 500);

            // Common table
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('socials');
    }
};
