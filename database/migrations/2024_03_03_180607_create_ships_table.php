<?php

use App\Enums\Condition;
use App\Enums\WoodType;
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
            $states = Condition::values();
            $table->id();
            $table->foreignIdFor(\App\Models\User::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('name')->unique();
            $table->integer('treasury')->default(0);
            $table->enum('wood_type', WoodType::values());
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
