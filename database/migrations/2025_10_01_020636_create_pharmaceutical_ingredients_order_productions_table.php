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
        Schema::create('pharmaceutical_ingredients_order_productions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pharmaceutical_ingredient_id')
                ->constrained();
            $table->foreignId('formula_id')
                ->constrained();
            $table->decimal('gram_quantity', 10, 4);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pharmaceutical_ingredients_order_productions');
    }
};
