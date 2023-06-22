<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('company', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('company_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id');
            $table->string('locale')->index();
            $table->string('title');

            $table->unique(['company_id', 'locale']);
            $table->foreign('company_id')->references('id')->on('company')->onDelete('cascade');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('company_translations');
        Schema::dropIfExists('company');
    }
};
