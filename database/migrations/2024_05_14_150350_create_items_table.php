<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name', 25);
            $table->string('slug', 25)->nullable();
            $table->string('type', 50)->nullable();
            $table->string('category', 100)->nullable();
            $table->tinyInteger('weight')->nullable();
            $table->decimal('cost', 5, 2)->nullable();
            $table->string('damage_dice', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};