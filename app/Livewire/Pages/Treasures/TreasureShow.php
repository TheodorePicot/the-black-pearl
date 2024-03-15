<?php

namespace app\Livewire\Pages\Treasures;

use App\Models\Treasure;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TreasureShow extends Component
{
    public Treasure $treasure;

    public function sellTreasure(): void
    {
        $this->dispatch('sell-treasure', treasureId: $this->treasure->id);
    }
}
