<?php

use App\Models\categories;
use App\Models\subcategories;
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
            $table->id()->unique();
            $table->string('name');
            $table->string('slug')->unique();
            $table->json('colors')->nullable();
            $table->json('storage')->nullable();
            $table->integer('stock');
            $table->integer('actual_price');
            $table->integer('old_price');
            $table->foreignIdFor(categories::class);
            $table->foreignIdFor(subcategories::class);
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
