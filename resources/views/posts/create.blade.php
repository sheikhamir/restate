@extends('layouts.ahuse')

@section('title', 'Add a Post')

@section('body-content')
    <div class="container add-top-gap-sm margin-bottom-small">
        <h1 class="text-center">@yield('title')</h1>
        {!! Form::open(['action' => 'PostsController@store']) !!}
            <div class="form-group">
                {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title']) }}
            </div>
            <div class="form-group">
                {{ Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Content']) }}
            </div>
            {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
        {!! Form::close() !!}
    </div>
@endsection