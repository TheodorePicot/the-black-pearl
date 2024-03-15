<?php

namespace App\Livewire\Pages\Resources;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

class ResourceIndex extends Component
{
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.pages.resources.resource-index', [
            'resources' => Auth::user()->resources
        ]);
    }
}
