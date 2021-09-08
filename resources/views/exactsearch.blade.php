@extends('layout')

@section('content')
    <h1>Your exact search result... </h1>

     //TODO add home search bar here for new search

    <div class="container">
        <div class="card" style="width: 18rem;">
            <img src="#" class="card-img-top" alt="...">
            <div class="card-body">

                <h5 class="card-title">Book title</h5>
                <div class="col-sm-6">
                    <h6 class="card-subtitle text-muted">Author</h6>
                    <h6 class="card-subtitle text-muted">Genre</h6>
                </div>

                <p class="card-text">This is where the book description will be displayed</p>
                <a href="#" class="btn btn-primary">See all books from this author</a>
                <a href="#" class="btn btn-primary">See all books from this genre</a>

                <a href="#" class="btn btn-primary">Add book to my list</a>


            </div>
        </div>
    </div>

    // TODO go back home button

@endsection

