<?php

use App\Enums\Condition;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ships', function (Blueprint $table) {
            $states = [Condition::Destroyed->value, Condition::BadlyDamaged->value, Condition::Damaged->value, Condition::Worn->value, Condition::Pristine->value];
            $table->id();
            $table->foreignIdFor(\App\Models\User::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('name')->unique();
            $table->enum('wood_type', ['oak', 'spruce', 'birch', 'mangrove']);
            $table->enum('hull', $states)->default(Condition::Pristine->value);
            $table->enum('foremast', $states)->default(Condition::Pristine->value);
            $table->enum('mainmast', $states)->default(Condition::Pristine->value);
            $table->enum('prison', $states)->default(Condition::Pristine->value);
            $table->enum('cabins', $states)->default(Condition::Pristine->value);
            $table->enum('sails', $states)->default(Condition::Pristine->value);
            $table->enum('flag', $states)->default(Condition::Pristine->value);
            $table->enum('deck', $states)->default(Condition::Pristine->value);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ships');
    }
};
