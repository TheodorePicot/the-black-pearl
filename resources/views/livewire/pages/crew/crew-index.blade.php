<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Your Crew') }}
        </h2>
    </x-slot>
    <div>
        @forelse($crewMembers as $crewMember)
            <livewire:pages.crew.crew-show :$crewMember :key="$crewMember->id">
                @empty
                    No treasure !
        @endforelse
    </div>
</div>
