@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">This is Events Page</h1>
<!--receive session message-->
  @if (session('success'))
   <div>
    {{ session('success')}}
   </div>
   @endif
   <div>
    <a href="{{route('events.create')}}">
        <button type="button" class="btn btn-danger" style="margin-bottom: 50px;">Create</button>
    </a>

   </div>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        @foreach ($events as $event)
        <div class="col">
            <div class="card bg-danger h-100" style="border-radius: 15px; overflow: hidden;">
                <div class="card-body text-center">
                    <p class="card-title fw-bold">ID: {{ $event->id }}</p>
                    <h3 class="card-text text-muted">{{ $event->title }}</h3>
                    <p>{{ $event->location }}</p>
                    <p>
                        <a href="{{route('events.edit')}}">edit post</a>
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
