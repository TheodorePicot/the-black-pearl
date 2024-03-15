<?php

namespace App\Policies;

use App\Models\Treasure;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Database\Query\Builder;

class TreasurePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Treasure $treasure): bool
    {
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Treasure $treasure): bool
    {
        return $user->is_captain && $user->ownsShip() && $user->ship->id == $treasure->ship->id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Treasure $treasure): bool
    {
        return $user->is_captain && $user->ownsShip() && $user->ship->id == $treasure->ship->id;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Treasure $treasure): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Treasure $treasure): bool
    {
        return false;
    }
}
