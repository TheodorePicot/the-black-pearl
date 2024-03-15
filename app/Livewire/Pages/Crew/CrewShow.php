<?php

namespace App\Livewire\Pages\Crew;

use App\Models\User;
use Livewire\Component;

class CrewShow extends Component
{
    public User $crewMember;

    public function kickOutSailor(): void
    {
        $this->dispatch('kick-out-sailor', userId: $this->crewMember->id);
    }
}
