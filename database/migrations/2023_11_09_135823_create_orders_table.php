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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('barcode')->nullable();
            $table->string('name')->nullable();
            $table->integer('product_project_id')->nullable();
            $table->float('count')->nullable();
            $table->float('total')->nullable();
            $table->float('discount')->nullable();
            $table->string('type')->nullable();
            $table->string('status')->nullable();
            $table->string('additional_data')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
