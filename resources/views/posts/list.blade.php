@extends('layouts.app')

@section('content')
    @foreach($posts as $post)
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{$post->title}}
                        <span class="pull-right">{{$post->user->name}}</span>
                    </div>

                    <div class="panel-body">
                        {{$post->content}}
                        <div>
                            <a href="{{url('/posts',$post->id)}}">More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection