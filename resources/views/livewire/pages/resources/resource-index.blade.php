<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Your Resources') }}
        </h2>
    </x-slot>
    <div>
        @forelse($resources as $resource)
            <livewire:pages.resources.resource-show :$resource :key="$resource->id">
                @empty
                    No treasure !
        @endforelse
    </div>
</div>
