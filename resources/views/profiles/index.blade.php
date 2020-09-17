@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4 p-5 text-center">
            <img alt="profile picture" class="rounded-circle" src="https://instagram.frix3-1.fna.fbcdn.net/v/t51.2885-19/s150x150/35174804_604504909930928_4652890457196462080_n.jpg?_nc_ht=instagram.frix3-1.fna.fbcdn.net&_nc_ohc=IrjDanE7XtkAX99MxPq&oh=109c86296018ffa8c4735effbf5c8bb7&oe=5F8A0B7C">
        </div>
        <div class="col-8 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h2>{{ $user->username }}</h2>

                @can('update', $user->profile)
                    <a href="/p/create">Add new post</a>
                @endcan

            </div>

            @can('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit">Edit profile</a>
            @endcan

            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-5"><strong>700</strong> followers</div>
                <div class="pr-5"><strong>544</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-4">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-100" alt="image_picture_1">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
