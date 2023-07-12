@extends('layouts.main-layout')
@section('content')
    <div>
        @foreach ($movies as $movie)
            <ul class="card p-2">
                <li>{{ $movie->title }} {{ $movie->original_title }} {{ $movie->date }}
                    {{ $movie->nationality }}
                    {{ $movie->vote }}</li>
            </ul>
        @endforeach
    </div>
@endsection
