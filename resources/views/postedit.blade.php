@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-12">
        @include('common.errors')
        <form action="{{ url('post/update') }}" method="POST">
            
            <div class="form-group">
                <label for="message">投稿</label>
                <input type="text" id="message" name="message" class="form-control" value="{{$post->message}}">
            </div>

            <div class="form-group">
                <label for="username">ユーザー : </label><span>{{$post->username}}</span>
            </div>

            <!-- Save ボタン/Back ボタン -->
            <div class="well well-sm">
                <button type="submit" class="btn btn-primary">更新</button>
                <a class="btn btn-link pull-right" href="{{ url('/') }}">
                    <i class="glyphicon glyphicon-backward"></i> 戻る
                </a>
            </div>
            <!--/ Save ボタン/Back ボタン -->
            <!-- id 値を送信 -->
            <input type="hidden" name="id" value="{{$post->id}}" />
            <!--/ id 値を送信 -->
            <!-- CSRF -->
            {{ csrf_field() }}
            <!--/ CSRF -->
        </form>
    </div>
</div>
@endsection
