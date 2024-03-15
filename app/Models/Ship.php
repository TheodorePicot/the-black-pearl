<?php

namespace App\Models;

use App\Enums\Condition;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ship extends Model
{
    use HasFactory;

    /**
     * The relationships that should always be loaded.
     *
     * @var array
     */
    protected $with = ['resources'];

    /**
     * Get the captain of the ship.
     *
     * @return BelongsTo the captain the ship belongs to.
     */
    public function captain(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the crew of the ship.
     *
     * @return belongsToMany the crew of the ship.
     */
    public function crewMembers(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'crew_members');
    }

    /**
     * Get the resources stored on the ship.
     *
     * @return HasMany the resources stored on the ship.
     */
    public function resources(): HasMany
    {
        return $this->hasMany(Resource::class);
    }

    /**
     * Get the treasures stored on the ship.
     *
     * @return HasMany the treasures stored on the ship.
     */
    public function treasures(): HasMany
    {
        return $this->hasMany(Treasure::class);
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
