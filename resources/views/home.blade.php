@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center py-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                        <form method="POST" action="{{ route('upload_book') }}"  enctype="multipart/form-data">
                            @csrf
                            <div>
                                <input type="text" name="name" placeholder="Enter book name">
                            </div>

                            <div>
                                <textarea name="description"></textarea>
                            </div>

                            <div>
                                <input type="file" name="book_cover">
                            </div>

                            <button type="submit">Upload</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection