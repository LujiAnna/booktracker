@extends('layout')

@section('content')
<h1>{{ $book->volumeInfo->title }}</h1>

@foreach($book->volumeInfo->authors as $author)
    <i>{{ $author }}</i>
    @if(! $loop->last)
        ,
    @endif
@endforeach

@if(! empty($book->volumeInfo->subtitle))
    <p>{{ $book->volumeInfo->subtitle }}</p>
@endif

@if(! empty($book->volumeInfo->imageLinks->small))
    <img src="{{ $book->volumeInfo->imageLinks->small }}">
@endif


@endsection
