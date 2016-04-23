@extends('layouts.app')

@section('title', '主页')

@section('content')
    <div class="container">
        <div class="row text-center">
            <h3>文章列表</h3>
            @if(Auth::check())
            <div class="col-xs-10 col-xs-offset-1">
                <a href="/create/post" class="pull-right"><i class="fa fa-plus fa-2x"></i></a>
            </div>
            @endif
        </div>
        <br>
        @foreach($posts as $post)
            <div class="row">
                <div class="col-xs-10 col-xs-offset-1">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <a href="/post/{{ $post->id }}" style="color: #eee;"><h4 class="panel-title">{{ $post->title }}</h4></a>
                        </div>
                        <div class="panel-body">
                            <p class="navbar-right">作者:{{ $post->user->name }}</p>
                            {{ $post->body }}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@stop