<?php

namespace App\Models;

use App\Enums\Condition;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ship extends Model
{
    use HasFactory;

    /**
     * Get the captain of the ship.
     */
    public function captain(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the crew of the ship.
     *
     * @return HasMany the crew of the ship.
     */
    public function crew(): HasMany
    {
        return $this->hasMany(User::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'wood_type'
    ];

    /**
     * The attributes of the ship that will be cast to the {@link Condition} enumeration.
     */
    protected $casts = [
        'hull' => Condition::class,
        'foremast' => Condition::class,
        'mainmast' => Condition::class,
        'prison' => Condition::class,
        'cabins' => Condition::class,
        'sails' => Condition::class,
        'flag' => Condition::class,
        'deck' => Condition::class
    ];
}
