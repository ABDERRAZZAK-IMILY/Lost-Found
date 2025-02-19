@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-2xl font-bold">{{ $announcements->titre }}</h1>
    <p>{{ $announcements->description }}</p>
    <p>location: {{ $announcements->lieu }}</p>
    <p>image: {{ $announcements->image }}</p>
    <form method="POST" action="{{ route('announcements.update', $announcement->id) }}">
        @csrf
        @method('PATCH')
        <button type="submit" class="bg-green-500 text-white px-4 py-2">trove</button>
    </form>
    <form method="POST" action="{{ route('announcements.claim', $announcement->id) }}">
        @csrf
        <button type="submit" class="bg-blue-500 text-white px-4 py-2"> pour moi</button>
    </form>
</div>
@endsection