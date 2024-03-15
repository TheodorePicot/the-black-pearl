<?php

namespace app\Livewire\Pages\Treasures;

use App\Models\Treasure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

class TreasureIndex extends Component
{
    #[On('sell-treasure')]
    public function sellTreasure($treasureId): void
    {
        $treasure = Treasure::findOrFail($treasureId);
        Log::debug("Selling the treasure with the id $treasure->id");
        $treasure->delete();
        $captainsShip = Auth::user()->ship;
        Log::debug("This is the treasures value : $treasure->value and this is the old ships treasury : $captainsShip->treasury");
        $captainsShip->treasury += $treasure->value;
        Log::debug("This is the new ships treasury : $captainsShip->treasury");
        $captainsShip->save();
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.pages.treasures.treasure-index', [
            'treasures' => Auth::user()->treasures
        ]);
    }
}
