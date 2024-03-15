<?php

namespace App\Livewire\Pages\Crew;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

class CrewIndex extends Component
{
    #[On('kick-out-sailor')]
    public function kickOutSailor($userId): void
    {
        Log::debug("Kicking out the sailor of id : $userId");
        $captainsShip = Auth::user()->ship;

        $captainsShip->crewMembers()->detach($userId);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.pages.crew.crew-index', [
            'crewMembers' => Auth::user()->ship->crewMembers
        ]);
    }
}
