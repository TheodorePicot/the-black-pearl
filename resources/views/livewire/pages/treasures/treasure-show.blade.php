<div>
    <h4>Treasure ID : {{ $treasure->id }}</h4>
    <p><b>Treasure name</b> : {{ $treasure->name }}, <b>Treasure value</b> : {{ $treasure->value }}, <b>Treasure
            description</b> : {{ $treasure->description }}, <b>Weight</b> : {{ $treasure->weight }}, <b>Condition</b>
        : {{ $treasure->condition }}</p>

    <button type="button" wire:click="sellTreasure" wire:confirm="Are you sure you want to sell this treasure, by doing so you will add {{ $treasure->value }} gold coins to your treasury">Sell</button>
</div>
