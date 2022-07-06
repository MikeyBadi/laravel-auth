@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container">
        <p>Welcome to Index List</p>
        <table class="table">

            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>

            <tbody>

                @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{$post->id}}</th>
                        <td>{{$post->title}}</td>
                        <td>
                            <a class="btn btn-success" href="{{ route('admin.posts.show',$post)}}">Show</a>
                            <a class="btn btn-primary" href="#">Edit</a>
                            <a class="btn btn-danger" href="#">Delete</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>

          </table>
    </div>
</div>
@endsection
