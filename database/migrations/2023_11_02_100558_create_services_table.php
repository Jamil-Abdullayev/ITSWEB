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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title_az')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_ru')->nullable();
            $table->text('description_az')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_ru')->nullable();
            $table->json('media')->nullable();
            $table->float('price')->nullable();
            $table->string('currency')->nullable();
            $table->string('type')->nullable();
            $table->string('status')->nullable();
            $table->json('additional_data')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
