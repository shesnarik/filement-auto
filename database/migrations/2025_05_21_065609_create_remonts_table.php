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
        Schema::create('remonts', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->text('notes')->nullable();
            $table->foreignId('car_id')->constrained()->onDelete('cascade');
            $table->unsignedInteger('price')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('remonts');
    }
};
