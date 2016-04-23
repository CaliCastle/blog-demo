@extends('layouts.app')

@section('title', '更新文章《' . $post->title . "》")

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="/post/{{ $post->id }}" method="POST" class="form">
                    {!! csrf_field() !!}
                    {!! method_field('PATCH') !!}
                    <div class="form-group">
                        <label>文章标题</label>
                        <input type="text" class="form-control" name="title" value="{{ $post->title }}">
                    </div>
                    <div class="form-group">
                        <label>文章内容</label>
                        <textarea name="body" class="form-control" style="resize: vertical;">{{ $post->body }}</textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">更新</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop