@extends('layouts.app')

@section('content')

    <!-- Bootstrap 定形コード -->
    
    <div class="panel-body">
        <!-- バリデーションエラーの表示に使用 -->
        @include('common.errors')
        
        <!-- 投稿フォーム -->
        <form action="{{ url('posts') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            <!-- 投稿タイトル -->
            <div class="form-group">
                <label for="post" class="col-sm-3 control-label">メッセージ</label>
                <div class="col-sm-6">
                    <input type="text" name="message" id="message" class="form-control"/>
                </div>
            </div>
            <!-- 投稿ボタン -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> 送信
                    </button>
                </div>
            </div>
        </form>
    </div>
    
    <!-- Post: 投稿リスト -->
    @if (count($posts) > 0)
    <div class="panel panel-default">
        <div class="panel-heading">
            投稿
        </div>
        <div class="panel-body">
            <table class="table table-striped task-table">
            <!-- テーブルヘッダ -->
                <thead> 
                    <th>投稿一覧</th>
                    <th>&nbsp;</th>
                </thead>
            <!-- テーブル本体 -->
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                <!-- message -->
                        <td class="table-text">
                            <div>{{ $post->message }}</div>
                            <div>{{ $post->username }}</div>
                        </td>
                            <!-- 更新ボタン -->
                            <td>
                                <form action="{{ url('postedit/'.$post->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-primary">
                                        <i class="glyphicon glyphicon-refresh"></i> 更新
                                    </button>
                                </form>
                            </td>
                            <!-- 削除ボタン -->
                            <td>
                                <form action="{{ url('post/'.$post->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> 削除
                                    </button>
                                </form>
                            </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endif
    <!-- Post: 投稿リスト -->
    
@endsection
