@extends('layouts.ahuse')

@section('title', 'Ahuse - ' . $post->title)

@section('body-content')
    <div class="container add-top-gap-sm margin-bottom-small">
        <a href="/posts" class="btn btn-default">&lt; Go back to All Posts</a>
        <hr/>
        {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
        {!! Form::close() !!}
        <h1>{{$post->title}}</h1>
        <p>{!! $post->body !!}</p>
        <hr/>
        <small>{{$post->created_at}}</small>
    </div>
@endsection