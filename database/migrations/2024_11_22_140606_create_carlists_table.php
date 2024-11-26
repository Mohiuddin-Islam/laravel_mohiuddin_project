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
        Schema::create('carlists', function (Blueprint $table) {
            $table->id();
            $table->string('brand',255);
            $table->string('model',255);
            $table->string('engine',255);
            $table->decimal('price_per_day',8,2)->nullable();
            $table->string('image',255)->nullable();
            $table->enum('status',['available', 'unavailable']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carlists');
    }
};
