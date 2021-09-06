@extends('layout')

@section('content')

        <div class="container">
          <div class="col-md-7 col-lg-8">
            <h1 class="mb-3">Search</h1>
              <form class="needs-validation jumbotron " novalidate>
                <div class="input-group mb-3">
                  <input class="form-control me-2" type="search" placeholder="Search by Book Title, Author, or ISBN" aria-label="Search" value="" required>
                    <div class="invalid-feedback">
                      Valid text is required.
                    </div>
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
        </div>
        {{-- (top 4 most recent books) --}}
        <h2>Recent Books:</h2>
        <hr class="my-4"> 
@endsection
