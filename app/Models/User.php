<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use GuzzleHttp\Psr7\Response;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * If the user is a captain, gets the ship he owns.
     *
     * @return HasOne the ship owned by the user, if he is a captain.
     */
    public function ship(): HasOne
    {
        return $this->hasOne(Ship::class);
    }

    public function ownsShip(): bool
    {
        return $this->ship() != null;
    }

    /**
     * Get all of the resources on the captains ship.
     */
    public function resources(): HasManyThrough
    {
        return $this->hasManyThrough(Resource::class, Ship::class);
    }

    /**
     * Get all of the treasures on the captains ship.
     */
    public function treasures(): HasManyThrough
    {
        return $this->hasManyThrough(Treasure::class, Ship::class);
    }

    /**
     * If the user is not a captain, gets the ships he works for.
     *
     * @return BelongsToMany the ships he works for.
     */
    public function ships(): BelongsToMany
    {
        return $this->belongsToMany(Ship::class, 'crew_members');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'email',
        'password',
        'name',
        'first_name',
        'last_name',
        'age',
        'description',
        'speciality'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
