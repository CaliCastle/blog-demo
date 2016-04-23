@extends('layouts.app')

@section('title', '新建文章')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <form action="/create/post" method="POST" class="form">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label>文章标题</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="form-group">
                    <label>文章内容</label>
                    <textarea name="body" class="form-control" style="resize: vertical;"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">新建</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop