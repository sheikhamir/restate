@extends('layouts.ahuse')

@section('title', 'Property View')

@section('body-content')
    <div class="container add-top-gap-sm margin-bottom-small">
        @if(count($posts) > 0)
            @foreach($posts as $post)
                <a href="/posts/{{$post->id}}" class="list-group-item">
                    <h3>{{$post->title}}</h3>
                    <small>Created on {{$post->created_at}}</small>
                </a>
            @endforeach
            {{-- Displays the pagination links --}}
            {{$posts->links()}}
        @else
            <h1>No Posts Found</h1>
        @endif
    </div>
@endsection