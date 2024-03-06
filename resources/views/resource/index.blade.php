@extends('index')

@section('title', 'Ship Resources')

@section('content')
    <div>
        @forelse($resources as $resource)
            <h4>Resource ID : {{ $resource->id }}</h4>
            <p><b>Resource name</b> : {{ $resource->name }}, <b>Resource quantity</b> : {{ $resource->quantity }}, <b>Resource
                    type</b> : {{ $resource->type }}</p>
        @empty
            No resources !
        @endforelse
    </div>
@endsection
