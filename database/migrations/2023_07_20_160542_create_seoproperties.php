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
        Schema::create('seoproperties', function (Blueprint $table) {
            $table->id();

            $table->enum('pageName',['home', 'resume', 'projects', 'contact']);

            // Google SEO
            $table->string('title', 100);
            $table->string('keywords', 1000);
            $table->string('description', 1000);

            // Social SEO
            $table->string('ogSiteName', 500);
            $table->string('ogUrl', 200);
            $table->string('ogTitle', 300);
            $table->string('ogDescription', 1000);
            $table->string('ogImage', 300);

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
        Schema::dropIfExists('seoproperties');
    }
};
