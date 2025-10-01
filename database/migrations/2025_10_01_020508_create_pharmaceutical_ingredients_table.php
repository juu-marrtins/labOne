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
        Schema::create('pharmaceutical_ingredients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('supplier_id')
                ->constrained();
            $table->string('name', 100)
                ->unique();
            $table->decimal('purity', 8, 2)
                ->nullable();
            $table->decimal('assay', 4, 2)
                ->nullable();
            $table->decimal('stability', 4, 2)
                ->nullable();
            $table->decimal('solubility', 8, 2)
                ->nullable();
            $table->decimal('density', 8, 2)
                ->nullable();
            $table->decimal('viscosity', 8, 2)
                ->nullable();
            $table->decimal('ph', 4, 2)
                ->nullable();
            $table->decimal('gram_cost', 8, 2);
            $table->decimal('gram_sale_price', 8, 2);
            $table->date('fabrication');
            $table->date('expire_at');
            $table->enum('physical_state', ['solid', 'liquid', 'paste', 'gel', 'syrup']);
            $table->string('batch', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pharmaceutical_ingredients');
    }
};
