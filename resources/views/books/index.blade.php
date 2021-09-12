@extends('layout')

@section('content')
    <div style="padding:10px">
    @foreach($books as $book)
        <h3>{{ $book->title }}</h3>
        <a href="/search/{{ $book->google_id }}">View in Google</a>
        <i>{{ $book->author }}</i>
        <p>{{ $book->description }}</p>
        <img src="{{ $book->img_url }}">
        @if(! $loop->last)
            <hr>
        @endif
    @endforeach
    </div>
@endsection
