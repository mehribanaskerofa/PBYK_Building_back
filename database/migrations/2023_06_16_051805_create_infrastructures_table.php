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
        Schema::create('infrastructures', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->date('date')->nullable();
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
        Schema::create('infrastructure_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('infrastructure_id');
            $table->string('locale')->index();
            $table->string('title');
            $table->text('description')->nullable();

            $table->unique(['infrastructure_id', 'locale']);
            $table->foreign('infrastructure_id')->references('id')->on('infrastructures')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infrastructure_translations');
        Schema::dropIfExists('infrastructures');
    }
};
