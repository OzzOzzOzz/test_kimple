<?php $isLoged = true ?>
@extends('main')

@section('title', "Create post")

@section('content')

    <div class="row">
        <div class="col-md-8 " >
            <h1>Create New Post</h1>
            <hr>
            {!! Form::open(['route' => 'posts.store']) !!}
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title', null, array('class' => 'form-control')) }}

            {{ Form::label('body', 'Post Body:') }}
            {{ Form::textarea('body', null, array('class' => 'form-control')) }}

            {{ Form::submit('Create Post', array('class' => 'btn btn-sucess btn-lg btn-block')) }}

            {!! Form::close() !!}
        </div>
    </div>

@endsection

