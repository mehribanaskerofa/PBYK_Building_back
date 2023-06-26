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
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('block_id');
            $table->integer('floor');
            $table->integer('room');//static
            $table->string('area');
            $table->string('layout');
            $table->string('date');
            $table->boolean('active')->default(true);
            $table->timestamps();

            $table->foreign('block_id')->references('id')->on('blocks')->onDelete('cascade');

        });
        Schema::create('house_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('house_id');
            $table->string('locale')->index();
            $table->string('price');

            $table->unique(['house_id', 'locale']);
            $table->foreign('house_id')->references('id')->on('houses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('house_translations');
        Schema::dropIfExists('houses');
    }
};
