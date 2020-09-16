@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4 p-5 text-center">
            <img alt="profile picture" class="rounded-circle" src="https://instagram.frix3-1.fna.fbcdn.net/v/t51.2885-19/s150x150/35174804_604504909930928_4652890457196462080_n.jpg?_nc_ht=instagram.frix3-1.fna.fbcdn.net&_nc_ohc=IrjDanE7XtkAX99MxPq&oh=109c86296018ffa8c4735effbf5c8bb7&oe=5F8A0B7C">
        </div>
        <div class="col-5 pt-5">
            <div><h2>{{ $user->username }}</h2></div>
            <div class="d-flex">
                <div class="pr-5"><strong>30</strong> posts</div>
                <div class="pr-5"><strong>700</strong> followers</div>
                <div class="pr-5"><strong>544</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold"></div>
            <div>TDA "Līgo" 💚💯🔥💃🏻</div>
            <div><a href="#"></a></div>
        </div>
    </div>

    <div class="row pt-4">
        <div class="col-4">
            <img src="https://instagram.frix3-1.fna.fbcdn.net/v/t51.2885-15/e35/c0.135.1080.1080a/s320x320/117820567_308404960469035_4973302457522561170_n.jpg?_nc_ht=instagram.frix3-1.fna.fbcdn.net&_nc_cat=107&_nc_ohc=1wjewYK9UAwAX9_lf7y&_nc_tp=16&oh=b9ac5a74fd442f4cc2cf3f9137f86d96&oe=5F8B2636" class="w-100" alt="image_picture_1">
        </div>
        <div class="col-4">
            <img src="https://instagram.frix3-1.fna.fbcdn.net/v/t51.2885-15/e35/c0.133.1066.1066a/s320x320/76831100_2503409399873372_8887185097623843762_n.jpg?_nc_ht=instagram.frix3-1.fna.fbcdn.net&_nc_cat=108&_nc_ohc=sVN8iQH9VHQAX8JSQSO&_nc_tp=16&oh=df63a70c715d279919e1a67701f54d44&oe=5F8D8406" class="w-100" alt="image_picture_2">
        </div>
        <div class="col-4">
            <img src="https://instagram.frix3-1.fna.fbcdn.net/v/t51.2885-15/e35/c135.0.809.809a/s320x320/60511138_2411747845725894_9094612138530622097_n.jpg?_nc_ht=instagram.frix3-1.fna.fbcdn.net&_nc_cat=106&_nc_ohc=FXxhWLfp2FQAX8TTmJE&_nc_tp=16&oh=73ccafe3e7d787c1c43451203d6e56d4&oe=5F8CC676" class="w-100" alt="image_picture_3">
        </div>
    </div>
</div>
@endsection
