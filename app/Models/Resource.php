<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Resource extends Model
{
    use HasFactory;

    /**
     * Get the ship where the resource is stored.
     *
     * @return BelongsTo the ship where the resource is stored.
     */
    public function ship(): BelongsTo
    {
        return $this->belongsTo(Ship::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'quantity',
        'type'
    ];
}
