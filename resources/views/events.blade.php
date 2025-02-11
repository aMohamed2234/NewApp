@extends('layouts.app')

@section('content')
<div>
    <h1>Event Page</h1>

    @foreach ($events as $event)
    <div class="container mt-5 d-flex justify-content-center">
        <div class="card shadow-lg" style="width: 22rem; border-radius: 15px; overflow: hidden;">
            <div class="card-body text-center">
                <p class="card-title fw-bold">ID: {{ $event->id }}</p>
                <h3 class="card-text text-muted">{{ $event->title }}</h3>
                <p>{{ $event->location }}</p>
            </div>
        </div>
    </div>
    @endforeach

</div>
@endsection
