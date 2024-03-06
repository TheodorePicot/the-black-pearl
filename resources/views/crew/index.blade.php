@extends('index')

@section('title', 'Ship Crew')

@section('content')
    <div>
        @forelse($treasures as $treasure)
            <h4>Treasures ID : {{ $treasure->id }}</h4>
            <p><b>Treasures name</b> : {{ $treasure->name }}, <b>Treasures value</b> : {{ $treasure->value }}, <b>Treasures
                    description</b> : {{ $treasure->description }}, <b>Weight</b> : {{ $treasure->weight }},  <b>Condition</b> : {{ $treasure->condition }}</p>
        @empty
            No treasure !
        @endforelse
    </div>
@endsection
