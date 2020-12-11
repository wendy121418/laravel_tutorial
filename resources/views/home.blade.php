@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/img/logo.png" class="w-100">
        </div>
        <div class="con-9 p-5">
            <div class="d-flex align-items-center pv-4">
                <h1>{{ $user->username }}</h1>
            </div>

            <div class="d-flex ">
                <div class="pr-3"><strong>23k</strong>posts</div>
                <div class="pr-3"><strong>100k</strong>followers</div>
                <div class="pr-3"><strong>10</strong>following</div>
            </div>

            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row">
        <div class="col-4">
            <img src="/img/post1.jpg" class="w-100 h-50">
        </div>
        <div class="col-4">
            <img src="/img/post2.jpg" class="w-100 h-50">
        </div>
        <div class="col-4">
            <img src="/img/post3.jpg" class="w-100 h-50">
        </div>
    </div>
</div>
@endsection
