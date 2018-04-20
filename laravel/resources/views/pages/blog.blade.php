<?php $isLoged=$data['isLoged'] ?>
@extends('main')

@section('title', "SuBlog")

@section('content')

    <?php if (! $isLoged) { echo "not ";} echo "loged." ?>

    <div class="row">
        <div class="col-md-8">

            <h1>All posts</h1>
            <hr>
        </div>
        <div class="col-md-3">
            <a href="{{route('posts.create')}}" class="btn btn-lg btn-block btn-primary btn-align">Create a new Post</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <th>#</th>
                <th>Title</th>
                <th>Body</th>
                <th>Created At</th>
                <th></th>
                </thead>
            <tbody>
                @foreach($data['posts'] as $post)
                    <tr>
                        <th>{{$post->id}}</th>
                        <td>{{$post->title}}</td>
                        <td>{{substr($post->body, 0, 50)}}{{strlen($post->body) > 50 ? "..." : ""}}</td>
                        <td>{{date('M j, Y', strtotime($post->created_at))}}</td>
                        <td><a href="{{ route('posts.show', $post->id) }}" class="btn btn-default">View</a>
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-default">Edit</a></td>

                    </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>

@endsection