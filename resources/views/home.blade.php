@extends('layout')

@section('content')

<div class="bg-image h-100"
     style="background-image: url(https://mdbootstrap.com/img/Photos/new-templates/search-box/img6.jpg); ">
    <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0,0,0,.43);">
        <div class="container" style="margin: 100px auto 100px auto">
{{--            <div class="row">--}}
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                    <div class="card mb-2">
                        <div class="card-body p-2">
                            <div class="input-group input-group-lg">
                                <input type="text" class="form-control form-control-lg rounded"
                                       placeholder="Search for your favourite book..."
                                       aria-label="Type Keywords" aria-describedby="basic-addon2"/>
                                <span class="input-group-text border-0" id="basic-addon2"><i
                                        class="fas fa-search"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="card text-center bg-black">

{{--                                TODO: activate collapse--}}

                        <div class="card-body p-4">
                            <div class="row">
                                <button type="button" class="btn btn-warning" style="align-items: center; margin: 20px 0 20px 0"
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
{{--            </div>--}}
        </div>
    </div>
</div>

@endsection


