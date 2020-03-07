@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($posts as $post)
            <div class="row mt-4 mb-2">
                <div class="col-6 offset-3">
                <a href="/p/{{ $post->id }}">
                <img src="/storage/{{ $post->image }}" alt="" class="w-100">
                
                </a>
                </div>
            </div>
            <div class="row">
                <div class="col-6 offset-3">
                    <p>
                        <span class="font-weight-bold">
                            <a class="text-dark" href="/profile/{{ $post->user->id }}">{{ $post->user->username }}</a>
                        </span> 
                        {{ $post->caption }}
                    </p>
                </div>
            </div>
        @endforeach

        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
@endsection