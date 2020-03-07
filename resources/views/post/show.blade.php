@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" alt="#" class="w-100">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div class="mr-3">
                        <img src="{{ $post->user->profile->getImage() }}" alt="#" class="w-100 rounded-circle" style="max-width: 40px;">
                    </div>
                    <div>
                        <div class="font-weight-bold">
                        <a class="text-dark" href="/profile/{{ $post->user->id }}">{{ $post->user->username }}</a>
                        <span class="mx-2">&bull;</span>
                        <a href="#">Follow</a> 
                        </div>
                    </div>
                </div>
                <hr>
                <p>
                <span class="font-weight-bold">
                <a class="text-dark" href="/profile/{{ $post->user->id }}">{{ $post->user->username }}</a>
                </span> 
                {{ $post->caption }}
                </p>
            </div>
        </div>
    </div>
</div>

@endsection