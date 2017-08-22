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
    
    
    
    
}