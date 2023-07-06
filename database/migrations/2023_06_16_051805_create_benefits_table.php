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
        Schema::create('benefits', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
        Schema::create('benefit_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('benefit_id');
            $table->string('locale')->index();
            $table->string('title');
            $table->text('description')->nullable();

            $table->unique(['benefit_id', 'locale']);
            $table->foreign('benefit_id')->references('id')->on('benefits')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('benefit_translations');
        Schema::dropIfExists('benefits');
    }
};
