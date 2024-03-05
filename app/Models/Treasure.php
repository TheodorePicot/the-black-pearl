<?php

namespace App\Models;

use App\Enums\Condition;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Treasure extends Model
{
    use HasFactory;

    /**
     * Get the ship where the treasure is stored.
     *
     * @return BelongsTo the ship where the treasure is stored.
     */
    public function ship(): BelongsTo
    {
        return $this->belongsTo(Ship::class);
    }

    /**
     * Casts the condition to the {@link Condition} enumeration.
     */
    protected $casts = [
        'condition' => Condition::class
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'value',
        'weight',
        'condition'
    ];
}
