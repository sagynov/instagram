@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/p" method="post" enctype="multipart/form-data" method="post">
        @csrf
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h2>Add New Post</h2>
                </div>
                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label">{{ __('Post Caption') }}</label>

                    <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" autocomplete="caption" autofocus>

                    @error('caption')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                </div>
                <div class="row">
                    <label class="form-label col-md-4" for="image">Post Image</label>
                    <input type="file" name="image" class="form-control-file" id="image">
                    @error('image')
                        <span class="text-danger" role="alert">
                            <small><b>{{ $message }}</b></small>
                        </span>
                    @enderror
                </div>
                <div class="row">
                    <button class="mt-4 btn btn-primary">Add New Post</button>
                </div>
            </div>
        </div>
        </form>
    </div>
@endsection