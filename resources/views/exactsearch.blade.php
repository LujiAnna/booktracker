@extends('layout')

@section('content')
    <h1>Your exact search result... </h1>

    {{--    search bar--}}
    <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
        <div class="card mb-2">
            <div class="card-body p-2">
                <div class="input-group input-group-lg">
                    <form method="GET" action='exactsearch'>
                        <input type="text" class="form-control form-control-lg rounded"
                               name='exactsearch' id="exactsearch"
                               placeholder="Search for your favourite book by title, author or ISBN..."
                               aria-label="Type Keywords" aria-describedby="basic-addon2"/>
                        <span class="input-group-text border-0" id="basic-addon2"><i
                                class="fas fa-search"></i></span>
                    </form>
                </div>
            </div>
        </div>


        <div class="card text-center bg-black">

            {{--                                TODO: activate collapse--}}

            <div class="card-body p-4">
                <div class="row">
                    <button type="button" class="btn btn-warning"
                            style="align-items: center; margin: 20px 0 20px 0"
                        {{--                                            data-toggle="collapse"--}}
                        {{--                                            data-target="#collapseAdvanced" aria-expanded="false"--}}
                        {{--                                            aria-controls="collapseAdvanced"--}}
                    >
                        Advanced search
                    </button>
                </div>

                {{--                                    <div class="collapse" id="collapseAdvanced">--}}
                <div class="row">
                    <div class="col-md-3 mb-4">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                   value="option1"
                                   checked/>
                            <label class="form-check-label text-white font-weight-bold"
                                   for="inlineCheckbox1">ALL</label>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                   value="option2"/>
                            <label class="form-check-label text-white font-weight-bold"
                                   for="inlineCheckbox2">TITLE</label>
                        </div>
                    </div>

                    <div class="col-md-3 mb-4">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                   value="option2"/>
                            <label class="form-check-label text-white font-weight-bold"
                                   for="inlineCheckbox2">AUTHOR</label>
                        </div>
                    </div>

                    <div class="col-md-3 mb-4">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                   value="option2"/>
                            <label class="form-check-label text-white font-weight-bold"
                                   for="inlineCheckbox2">GENRE</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <p class="text-white mb-0"><span class="text-warning">108 </span>results
                        </p>
                        <div>
                            <button type="button" class="btn btn-link text-white"
                                    data-mdb-ripple-color="dark">Reset
                            </button>
                            <button type="button" class="btn btn-warning">Search</button>
                        </div>
                    </div>
                </div>
                {{--                                    </div>--}}
            </div>
        </div>
    </div>
    {{--    end search bar--}}

    {{--    book display--}}
    <div class="container-fluid">
        <div class="d-flex mt-5 justify-content-center">
            <div class="card" style="width: 450px;">
                <img src="#" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">Book title</h5>
                    <div class="col-sm-12 text-center" style="margin:10px">
                        <h6 class="card-subtitle text-muted">Author</h6>
                        <h6 class="card-subtitle text-muted">Genre</h6>
                    </div>

                    <p class="card-text text-center">This is where the book description will be displayed</p>
                    <div class="text-center" style="margin: 10px">

                        <a href="#" class="btn btn-primary" style="margin:15px">See all books from this
                            author</a>
                        <a href="#" class="btn btn-primary" style="margin:15px">See all books from this
                            genre</a>
                        <a href="#" class="btn btn-primary" style="margin:15px">Add book to my list</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--    end book display--}}

    {{--    go back to home--}}
    <div class="text-center" style="margin: 35px">
        <a href="home" class="btn btn-primary">Go back</a>
    </div>
    {{--    end go back to home--}}


@endsection

