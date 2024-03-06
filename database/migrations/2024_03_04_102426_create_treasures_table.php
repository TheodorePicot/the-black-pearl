<?php

use App\Enums\Condition;
use App\Models\Ship;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('treasures', function (Blueprint $table) {
            $states = [Condition::Destroyed->value, Condition::BadlyDamaged->value, Condition::Damaged->value, Condition::Worn->value, Condition::Pristine->value];
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->integer('value');
            $table->integer('weight');
            $table->enum('condition', $states);
            $table->foreignIdFor(Ship::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('treasures');
    }
};
