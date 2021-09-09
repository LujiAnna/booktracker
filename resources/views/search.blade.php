@extends('layout')

@section('content')

        <div class="container">
          <div class="col-md-7 col-lg-8 mt-4">
            <h1 class="mb-3">Search</h1>
            {{-- action: route to go to controller --}}
              <form class="jumbotron" method="get" action='search'>
                 {{-- @csrf --}}
                <div class="input-group mb-3">
                {{-- type='search' vs type='text' --}}
                  <input class="form-control me-2" type="search" name='search' id="search" placeholder="Search by Book Title, Author, or ISBN" aria-label="Search" value="{{request('search')}}" required>
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
                </div>
               

                <div class="form-check form-check-inline">
                  <input id="all" name="searchMethod" type="radio" class="form-check-input" value="all" checked required>
                  <label class="form-check-label" for="credit">all</label>
                </div>

                <div class="form-check form-check-inline">
                  <input id="title" name="searchMethod" type="radio" class="form-check-input" value="title" required>
                  <label class="form-check-label" for="credit">title</label>
                </div>

                <div class="form-check form-check-inline">
                  <input id="title" name="searchMethod" type="radio" class="form-check-input" value="author" required>
                  <label class="form-check-label" for="credit">author</label>
                </div>

                <div class="form-check form-check-inline">
                  <input id="genre" name="searchMethod" type="radio" class="form-check-input" value="author" required>
                  <label class="form-check-label" for="credit">genre</label>
                </div>
               </form>
            </div>
          </div>

  <div class="container px-4 py-5" id="custom-cards">
    <h2 class="pb-2 border-bottom ">Books</h2>
    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">

    @foreach ($bookitems as $item)
    {{-- {{ $item->volumeInfo->title }} --}}
      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background: url('{{ $item->volumeInfo->imageLinks->thumbnail }}') no-repeat center;">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                <h6 class="mb-5 pb-5 fw-bold">{{ $item->volumeInfo->title }} </h6>
            <h2 class=" mb-4 pt-5 mt-5 display-6 lh-1 fw-bold"> </h2>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                {{-- <img src="{{ $item->volumeInfo->imageLinks->smallThumbnail }}" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white"> --}}
                <small></small>
              </li>
              <li class="d-flex align-items-center me-3">
                <small>{{ $item->volumeInfo->authors[0] }}</small>
              </li>
              <li class="d-flex align-items-center">
                <small>{{ Str::upper($item->volumeInfo->language) }}</small>
              </li>
            </ul>
          </div>
        </div>
      </div>
@endforeach

      {{-- <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-2.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Much longer title that wraps to multiple lines. how wonderful</h2>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="https://avatars.githubusercontent.com/u" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
                <small>Author</small>
              </li>
              <li class="d-flex align-items-center">
                <small>4s</small>
              </li>
            </ul>
          </div>
        </div>
      </div> --}}

      {{-- <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-3.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Another longer title belongs here</h2>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="https://avatars.githubusercontent.com/u" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
                <small>Author</small>
              </li>
              <li class="d-flex align-items-center">
                <small>5s</small>
              </li>
            </ul>
          </div>
        </div>
      </div> --}}

    </div>
  </div>
        
    
@endsection
