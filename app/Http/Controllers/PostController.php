<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //public function index(Post $post) postはインスタンス
    public function index(Post $post)//$postというテーブル。データはまだ //関数を定義している //$postはpost.phpのpostmodelのデータ。postmodelと紐づいてる$postですという宣言
    {                     //Postモデル型$post
        //$post = Post::get(); //modelのにある"post"を持ってきて、$postに入れる。そしてviewに渡す。 なにも宣言されてないただの$post
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit(1)]);  //viewにお願いしている
    } //view('posts/index')=viewのPost.indexというファイルを指定してる
    
    public function show(Post $post) 
    {
        return view('posts/show')->with(['post'=> $post]); //postsというフォルダのshow.bladeというファイル$postのデータをpostに入れる
    }

    public function create  ()
    {
        return view('posts/create');
    }
}