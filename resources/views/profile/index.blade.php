@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row align-items-center">
        <div class="col-3">
            <img src="{{ $user->profile->getImage() }}" alt="#" class="rounded-circle w-100">
        </div>
        <div class="col-9">
            <div class="d-flex align-items-baseline justify-content-between">
            <div class="d-flex align-items-center mb-3">
            <div class="h4">{{ $user->username }}</div>
            <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
            </div>
            @can('update', $user->profile)
                <a href="/p/create">Add New Post</a>
            @endcan
            </div>
            @can('update', $user->profile)
                <div>
                    <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
                </div>
            @endcan
            <div class="d-flex">
                <div class="mr-5"><strong>{{ $postsCount }}</strong> posts</div>
                <div class="mr-5"><strong>{{ $followersCount }}</strong> followers</div>
                <div class="mr-5"><strong>{{ $followingCount }}</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">
            {{ $user->profile->title }}
            </div>
            <div>
                {{ $user->profile->description }}
            </div>
            <div>

                <a href="#">{{ $user->profile->url }}</a>
            </div>
        </div>
    </div>

    <!-- Posts -->
    <div class="row mt-5">

        @forelse ($user->posts as $post)
            <div class="col-4 mb-4">
                <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-100" alt="#">
                </a>
            </div>
        @empty
            <p>No posts published yet</p>
        @endforelse
    </div>
</div>
@endsection
