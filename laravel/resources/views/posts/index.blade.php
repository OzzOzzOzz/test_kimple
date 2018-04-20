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
                @foreach($posts as $post)
                    <tr>
                        <th>{{$post->id}}</th>
                        <td>{{$post->title}}</td>
                        <td>{{$post->body}}</td>
                        <td>{{$post->created_at}}</td>
                        <td><a href="#" class="btn btn-default">View</a>
                            <a href="#" class="btn btn-default">Edit</a></td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection