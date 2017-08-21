@extends('layouts.app')

@section('content')

    <!-- Bootstrap 定形コード -->
    <section class="row new-post">
        <div class="panel-body col-md-6 col-md-offset-3">
            <header><h3>今の気持ちを発信してみよう！</h3></header>
            <!-- バリデーションエラーの表示に使用 -->
            @include('common.errors')
            
            <!-- 投稿フォーム -->
            <form action="{{ url('posts') }}" method="POST">
                {{ csrf_field() }}
                <!-- 投稿タイトル -->
                <div class="form-group">
                    <textarea class="form-control" name="message" id="message" rows="5"></textarea>
                </div>
                <!-- 投稿ボタン -->
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-plus"></i> 送信
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    
    <section class="row posts">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>投稿フィード</h3></header>
            
            <article class="post">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <div class="info">
                    posted by Kenichi on 12 August 2017
                </div>
                <div class="interaction">
                    <a href="#">Like</a> |
                    <a href="#">Dislike</a> |
                    <a href="#">Edit</a> |
                    <a href="#">Delete</a>
                </div>
            </article>
            
            <article class="post">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <div class="info">
                    posted by Kenichi on 12 August 2017
                </div>
                <div class="interaction">
                    <a href="#">Like</a> |
                    <a href="#">Dislike</a> |
                    <a href="#">Edit</a> |
                    <a href="#">Delete</a>
                </div>
            </article>
            
        </div>
    </section>
    
    
    
@endsection