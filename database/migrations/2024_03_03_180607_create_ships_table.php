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
            $states = [Condition::Destroyed, Condition::BadlyDamaged, Condition::Damaged, Condition::Worn, Condition::Pristine];
            $table->id();
            $table->foreignIdFor(\App\Models\User::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('name')->unique();
            $table->enum('wood_type', ['oak', 'spruce', 'birch', 'mangrove']);
            $table->enum('hull', $states)->default(Condition::Pristine);
            $table->enum('foremast', $states)->default(Condition::Pristine);
            $table->enum('mainmast', $states)->default(Condition::Pristine);
            $table->enum('prison', $states)->default(Condition::Pristine);
            $table->enum('cabins', $states)->default(Condition::Pristine);
            $table->enum('sails', $states)->default(Condition::Pristine);
            $table->enum('flag', $states)->default(Condition::Pristine);
            $table->enum('deck', $states)->default(Condition::Pristine);
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
