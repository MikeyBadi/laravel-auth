@extends('layouts.app')

@section('content')
<div class="container">
    {{-- @dd($post) --}}
    <h1>Title: {{$post->title}}</h1>
    <p>Content: {{$post->content}}</p>
    <a class="btn btn-success" href="{{route('admin.posts.index', $post)}}">Torna indietro</a>
    <a href="{{route('admin.posts.index', $post)}}" class="btn btn-primary">EDIT</a>
</div>
@endsection
