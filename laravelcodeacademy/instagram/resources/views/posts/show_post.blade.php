@extends('layouts.app')
@section('content')
    <div class="container border p-0 d-flex" style="-maxheight: 800px">
     
        <div class=" border col-8">
            <img src={{"/storage/".$post->image}} alt="" class="w-100 h-100">
        </div>
        <div class="border col-4">
            <h1>Hellow</h1>

        </div>
    </div>
@endsection