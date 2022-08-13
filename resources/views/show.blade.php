@extends('layout')

@section('content')
    <div class="container">
@foreach($posts as $post)
    {{$post->name}}
    {{$post->email}}
    {{$post->message}}
    {{$post->created_at}}
@endforeach
    </div>
@endsection
