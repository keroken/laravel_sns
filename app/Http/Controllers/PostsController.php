<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

use Validator;

use Illuminate\Support\Facades\Auth;

class postsController extends Controller
{
    //コンストラクタ（このクラスが呼ばれたら最初に処理する箇所）
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    //ダッシュボード表示
    public function index()
    {
        $posts = Post::orderBy('created_at', 'asc')->get();
        return view('posts', ['posts' => $posts]);
    }
    
    //更新画面
    public function edit(post $post)
    {
        return view('postedit', ['post' => $post]);
    }
    
    //更新
    public function update(Request $request)
    {
        // バリデーション
        $validator = Validator::make($request->all(), [
            'message' => 'required',

        ]);
        //バリデーション：エラー
        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }
        
        // データ更新
        $post = Post::find($request->id);
        $post->message = $request->message;
        $post->save(); //「/」ルートにリダイレクト
        return redirect('/'); 
    }
    

    
    //登録
    public function store(Request $request)
    {
        
        // バリデーション
        $validator = Validator::make($request->all(), [
            'message' => 'required',
        ]);
        //バリデーション：エラー
        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }
        
    // User取得
        $user = Auth::user();
    
    // Eloquent モデル
        $post = new Post;
        $post->user_id = $user->id;
        $post->username = $user->name;
        $post->message = $request->message;
        // $post->image_url = $request->image_url;
        // $request->user()->posts()->save($post);
        $post->save();
        return redirect('/');
    }
    
    //削除
    public function destroy(Post $post){
        $post->delete();
        return redirect('/');
    }

}

