<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Your Treasures') }}
        </h2>
    </x-slot>
    <div>
        @forelse($treasures as $treasure)
            <livewire:pages.treasures.treasure-show :$treasure :key="$treasure->id">
                @empty
                    No treasure !
        @endforelse
    </div>
</div>
