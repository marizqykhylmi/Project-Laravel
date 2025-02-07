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
    Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('color')->nullable();
        $table->string('category');
        $table->string('system')->nullable();
        $table->string('power_suply')->nullable(); // Menambahkan kolom power_suply
        $table->string('status');
        $table->string('front_port')->nullable();
        $table->string('display_size')->nullable();
        $table->string('product_size')->nullable();
        $table->string('package_size')->nullable();
        $table->decimal('net_weight', 8, 2)->nullable();
        $table->decimal('gross_weight', 8, 2)->nullable();
        $table->integer('quantity');
        $table->integer('rating')->default(0);
        $table->decimal('price', 10, 2)->nullable(); // Menambahkan kolom price
        $table->string('image')->nullable();
        $table->timestamps();
    });
}



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
