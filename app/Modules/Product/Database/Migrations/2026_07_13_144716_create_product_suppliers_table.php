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
        Schema::create('product_suppliers', function (Blueprint $table) {
            $table->id();
            $this->string('supplier_sku')->unique();
            $table->foreignId('product_variant_id')->constrained('product_variants');
            $table->foreignId('supplier_id')->constrained('suppliers');
            $table->decimal('cost_price', 19, 4);
            $tabela->unsignedSmallInteger('lead_time_days')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_suppliers');
    }
};
