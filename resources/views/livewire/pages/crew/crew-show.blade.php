<div>
    <h4>ID : {{ $crewMember->id }}</h4>
    <p>
        <b>Name</b> : {{ $crewMember->name }},
        <b>Specialty</b> : {{ $crewMember->speciality }},
    </p>
    <button type="button" wire:click="kickOutSailor" wire:confirm="Are you sure you want kick out the sailor : {{ $crewMember->name }} ?">Kick Out</button>
</div>
