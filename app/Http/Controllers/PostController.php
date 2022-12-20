<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // public function index(Post $post)
    public function index() //関数を定義している
    {
        $post = Post::get(); //modelのにある"post"を持ってきて、$postに入れる。そしてviewに渡す
        return view('posts/index')->with(['posts' => $post]);  //viewにお願いしている
    } //view('posts/index')=viewのPost.indexというファイルを指定してる
}
