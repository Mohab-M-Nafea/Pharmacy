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
        Schema::create('medicines', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->ulid('medicine_id', 5)->primary();
            $table->string('medicine_code')->unique();
            $table->string('medicine_name')->unique();
            $table->string('medicine_description');
            $table->string('medicine_generic_name');
            $table->float('medicine_purchase_price');
            $table->float('medicine_retail_price');
            $table->integer('medicine_quantity');
            $table->string('medicine_unit');
            $table->date('medicine_expired_date');
            $table->string('medicine_image')->nullable();
            $table->ulid('category_id', 5);
            $table->ulid('supplier_id', 5);
            $table->foreign('category_id')->references('category_id')->on('categories')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('supplier_id')->references('supplier_id')->on('suppliers')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicines');
    }
};
