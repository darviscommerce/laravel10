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
        Schema::create('manta_photoalbums', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->string('deleted_by')->nullable();
            $table->integer('company_id')->nullable();
            $table->string('host')->nullable();
            $table->string('locale')->nullable();
            $table->integer('pid')->nullable();
            $table->integer('sort')->nullable();
            $table->string('slug')->nullable();
            $table->string('seo_title')->nullable();
            $table->text('seo_description')->nullable();
            $table->text('tags')->nullable();
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->string('excerpt')->nullable();
            $table->string('content')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manta_photoalbums');
    }
};
