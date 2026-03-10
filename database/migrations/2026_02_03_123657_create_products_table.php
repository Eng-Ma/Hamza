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

            // في حال حدف الاساس يحدف المنتجات معاه
            $table->string('name');
            $table->enum('product_type', ['face', 'body']);
            $table->unsignedBigInteger('category_id');
            $table->string('image');
            $table->string('content');
            $table->integer('price');
            $table->integer('quantity');
            $table->integer('package_size');
            $table->text('main_components')->nullable();
            $table->text('description')->nullable();


            $table->foreign('category_id')->references('id')->on('categories');
            $table->string('status')->default('Active');
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
