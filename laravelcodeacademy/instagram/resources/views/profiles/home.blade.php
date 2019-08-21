@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-3 pl-5">
            <img src="https://d29fhpw069ctt2.cloudfront.net/icon/image/38701/preview.svg" width="150" height="150" class="rounded-circle">
        </div>
        <div class="col-9 pt-3">
        <div class="d-flex justify-content-between align-items-baseline">
            <h1>{{$user->username}}</h1>
            <a href="{{route('post.create')}}">Add new Post</a>
        </div>
            <div class="d-flex">
            <div class="pr-5"><strong>{{$user->posts->count()}}</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-3">
            <div class="font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="" class="font-weight-bold">{{$user->profile->url ?? "N/A"}}</a></div>
            </div>
        </div>
    </div>
    <div class="row pt-4">
        @foreach ($user->posts as $post)
            <div class="col-4  p-3 " style="max-height: 400px;">
                <a href={{"/p/show/".$post->id}}> 
                    <img src="/storage/{{$post->image}}" class="mh-100 mw-100">    
                </a>
            </div>
        @endforeach    
    </div>
</div>
@endsection
