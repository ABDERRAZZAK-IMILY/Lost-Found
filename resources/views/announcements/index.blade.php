@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-2xl font-bold">announcement</h1>
    <ul>
        @foreach($announcements as $announcement)
            <li>
                <a href="{{ route('announcements.show', $announcement->id) }}">
                    {{ $announcement->titre }} - {{ $announcement->description}}
                </a>
            </li>
        @endforeach
    </ul>
</div>
@endsection