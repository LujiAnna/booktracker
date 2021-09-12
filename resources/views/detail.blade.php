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

<form action="/books" method="post">
    @csrf
    <input type="hidden" name="google_id" value="{{ $book->id }}"/>
    <input type="hidden" name="title" value="{{ $book->volumeInfo->title }}"/>
    <input type="hidden" name="author" value="{{ $book->volumeInfo->authors[0] }}"/>
    <input type="hidden" name="description" value="{{ $book->volumeInfo->subtitle ?? null }}"/>
    <input type="hidden" name="img_url" value="{{ $book->volumeInfo->imageLinks->small }}"/>
    <button class="btn btn-primary" type="submit">Add to my books</button>
</form>

@endsection
