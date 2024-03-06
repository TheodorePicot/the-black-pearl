@extends('index')

@section('title', 'Ship Treasures')

@section('content')
    <div>
        @foreach($treasures as $treasure)
            <h4>Treasures ID : {{ $treasure->id }}</h4>
            <p><b>Treasures name</b> : {{ $treasure->name }}, <b>Treasures quantity</b> : {{ $treasure->quantity }}, <b>Treasures
                    type</b> : {{ $treasure->type }}</p>
        @endforeach
    </div>
@endsection
