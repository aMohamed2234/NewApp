@extends('layouts.app')

@section('content')
    <div>
        <h1>edit event</h1>
        <form action="{{ route('events.edit', $event->id) }}" method="POST"></form>
    </div>
@endsection
