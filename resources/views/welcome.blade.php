@extends('layouts.app')

@section('content')
    <div id="title" class="shadow-lg">
        <div class="container py-5">
            <div class="py-3">
                @if (session()->has('message'))
                    <div class="alert alert-danger">
                        {{ session('message') }}
                    </div>
                @endif
                
                <h1 class="text-center text-light pt-5">24/7 ACCESS TO BOOKS</h1>
                
                <p class="text-center text-light pb-5">
                    "Get access to quality books 7 days a week, 365 days a year."
                </p>
            </div>
        </div>
    </div>

    <section class="py-5">
        <div class="pt-2 container">
          <div class="row" id="divReturnData">
            <aside class="col-md-3 text-center mb-5">
                <h3 class="default-font pb-4 text-muted" style="margin-top: -5px;">
                    View categories
                </h3>

                <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Select a Category
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href=" {{ url('/') }} "> All </a>
                        <a class="dropdown-item" href="category/"> {{ ('category') }} </a>
                    </div>
                </div>
            </aside>

            <aside class="col-md-9">
                <div class="row">
                    <div class="col-md-3 mb-5">
                        <div class="views text-center">
                            <!-- Book Image -->
                            <div>
                                <a href="/bookDetails/book_id">
                                    <img src="{{ asset('imgs/book_cover.jpg') }}" class="img-fluid rounded"/>
                                </a>
                            </div>

                            <!-- Book details -->
                            <div class="text-center">
                                <div class="py-3">
                                    <!-- Book name -->
                                    <div class="pb-2">
                                        bookname
                                    </div>

                                    <div>
                                        <!-- author's name -->
                                        <div class="pt-3 pb-2">
                                            <i>by </i><a href="#!"> book_author </a>
                                        </div>

                                        <!-- Book category -->
                                        <span class="font-weight-bold">
                                            book_category
                                        </span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <hr>

                        <div class="text-center">
                            <a href="/bookDetails/book_id" class="btn btn-sm bgColor">More Details</a>
                        </div>
                    </div>

                    <div class="col-md-3 mb-5">
                        <div class="views text-center">
                            <!-- Book Image -->
                            <div>
                                <a href="/bookDetails/book_id">
                                    <img src="{{ asset('imgs/book_cover.jpg') }}" class="img-fluid rounded"/>
                                </a>
                            </div>

                            <!-- Book details -->
                            <div class="text-center">
                                <div class="py-3">
                                    <!-- Book name -->
                                    <div class="pb-2">
                                        bookname
                                    </div>

                                    <div>
                                        <!-- author's name -->
                                        <div class="pt-3 pb-2">
                                            <i>by </i><a href="#!"> book_author </a>
                                        </div>

                                        <!-- Book category -->
                                        <span class="font-weight-bold">
                                            book_category
                                        </span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <hr>

                        <div class="text-center">
                            <a href="/bookDetails/book_id" class="btn btn-sm bgColor">More Details</a>
                        </div>
                    </div>

                    <div class="col-md-3 mb-5">
                        <div class="views text-center">
                            <!-- Book Image -->
                            <div>
                                <a href="/bookDetails/book_id">
                                    <img src="{{ asset('imgs/book_cover.jpg') }}" class="img-fluid rounded"/>
                                </a>
                            </div>

                            <!-- Book details -->
                            <div class="text-center">
                                <div class="py-3">
                                    <!-- Book name -->
                                    <div class="pb-2">
                                        bookname
                                    </div>

                                    <div>
                                        <!-- author's name -->
                                        <div class="pt-3 pb-2">
                                            <i>by </i><a href="#!"> book_author </a>
                                        </div>

                                        <!-- Book category -->
                                        <span class="font-weight-bold">
                                            book_category
                                        </span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <hr>

                        <div class="text-center">
                            <a href="/bookDetails/book_id" class="btn btn-sm bgColor">More Details</a>
                        </div>
                    </div>

                    <div class="col-md-3 mb-5">
                        <div class="views text-center">
                            <!-- Book Image -->
                            <div>
                                <a href="/bookDetails/book_id">
                                    <img src="{{ asset('imgs/book_cover.jpg') }}" class="img-fluid rounded"/>
                                </a>
                            </div>

                            <!-- Book details -->
                            <div class="text-center">
                                <div class="py-3">
                                    <!-- Book name -->
                                    <div class="pb-2">
                                        bookname
                                    </div>

                                    <div>
                                        <!-- author's name -->
                                        <div class="pt-3 pb-2">
                                            <i>by </i><a href="#!"> book_author </a>
                                        </div>

                                        <!-- Book category -->
                                        <span class="font-weight-bold">
                                            book_category
                                        </span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <hr>

                        <div class="text-center">
                            <a href="/bookDetails/book_id" class="btn btn-sm bgColor">More Details</a>
                        </div>
                    </div>

                    <div class="col-md-3 mb-5">
                        <div class="views text-center">
                            <!-- Book Image -->
                            <div>
                                <a href="/bookDetails/book_id">
                                    <img src="{{ asset('imgs/book_cover.jpg') }}" class="img-fluid rounded"/>
                                </a>
                            </div>

                            <!-- Book details -->
                            <div class="text-center">
                                <div class="py-3">
                                    <!-- Book name -->
                                    <div class="pb-2">
                                        bookname
                                    </div>

                                    <div>
                                        <!-- author's name -->
                                        <div class="pt-3 pb-2">
                                            <i>by </i><a href="#!"> book_author </a>
                                        </div>

                                        <!-- Book category -->
                                        <span class="font-weight-bold">
                                            book_category
                                        </span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <hr>

                        <div class="text-center">
                            <a href="/bookDetails/book_id" class="btn btn-sm bgColor">More Details</a>
                        </div>
                    </div>

                    <div class="col-md-3 mb-5">
                        <div class="views text-center">
                            <!-- Book Image -->
                            <div>
                                <a href="/bookDetails/book_id">
                                    <img src="{{ asset('imgs/book_cover.jpg') }}" class="img-fluid rounded"/>
                                </a>
                            </div>

                            <!-- Book details -->
                            <div class="text-center">
                                <div class="py-3">
                                    <!-- Book name -->
                                    <div class="pb-2">
                                        bookname
                                    </div>

                                    <div>
                                        <!-- author's name -->
                                        <div class="pt-3 pb-2">
                                            <i>by </i><a href="#!"> book_author </a>
                                        </div>

                                        <!-- Book category -->
                                        <span class="font-weight-bold">
                                            book_category
                                        </span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <hr>

                        <div class="text-center">
                            <a href="/bookDetails/book_id" class="btn btn-sm bgColor">More Details</a>
                        </div>
                    </div>

                    <div class="col-md-3 mb-5">
                        <div class="views text-center">
                            <!-- Book Image -->
                            <div>
                                <a href="/bookDetails/book_id">
                                    <img src="{{ asset('imgs/book_cover.jpg') }}" class="img-fluid rounded"/>
                                </a>
                            </div>

                            <!-- Book details -->
                            <div class="text-center">
                                <div class="py-3">
                                    <!-- Book name -->
                                    <div class="pb-2">
                                        bookname
                                    </div>

                                    <div>
                                        <!-- author's name -->
                                        <div class="pt-3 pb-2">
                                            <i>by </i><a href="#!"> book_author </a>
                                        </div>

                                        <!-- Book category -->
                                        <span class="font-weight-bold">
                                            book_category
                                        </span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <hr>

                        <div class="text-center">
                            <a href="/bookDetails/book_id" class="btn btn-sm bgColor">More Details</a>
                        </div>
                    </div>

                    <div class="col-md-3 mb-5">
                        <div class="views text-center">
                            <!-- Book Image -->
                            <div>
                                <a href="/bookDetails/book_id">
                                    <img src="{{ asset('imgs/book_cover.jpg') }}" class="img-fluid rounded"/>
                                </a>
                            </div>

                            <!-- Book details -->
                            <div class="text-center">
                                <div class="py-3">
                                    <!-- Book name -->
                                    <div class="pb-2">
                                        bookname
                                    </div>

                                    <div>
                                        <!-- author's name -->
                                        <div class="pt-3 pb-2">
                                            <i>by </i><a href="#!"> book_author </a>
                                        </div>

                                        <!-- Book category -->
                                        <span class="font-weight-bold">
                                            book_category
                                        </span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <hr>

                        <div class="text-center">
                            <a href="/bookDetails/book_id" class="btn btn-sm bgColor">More Details</a>
                        </div>
                    </div>
                </div>

            </aside>
          </div>
        </div>
    </section>
@endsection