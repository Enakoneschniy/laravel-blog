@extends('layouts.app')

@section('content')
    {!! $posts->render() !!}
    @foreach($posts as $post)
        <div class="media">
            <div class="media-left media-middle">
                <a href="{{url('/posts', $post->id)}}">
                    <img class="media-object" src="/uploads/posts/resize/{{$post->preview_image}}" alt="{{$post->title}}">
                </a>
            </div>
            <div class="media-body">
                <a href="{{url('/posts', $post->id)}}"><h3 class="media-heading">{{$post->title}}</h3></a>
                {!! $post->preview_text !!}
            </div>
        </div>
    @endforeach
    {!! $posts->render() !!}
@endsection