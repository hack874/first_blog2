<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Post;

class PostController extends Controller
{
    //public function index(Post $post) postはインスタンス
    public function index(Post $post)//$postというテーブル。データはまだ //関数を定義している //$postはpost.phpのpostmodelのデータ。postmodelと紐づいてる$postですという宣言
    {                     //Postモデル型$post
        //$post = Post::get(); //modelのにある"post"を持ってきて、$postに入れる。そしてviewに渡す。 なにも宣言されてないただの$post
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit(5)]);  //viewにお願いしている
    } //view('posts/index')=viewのPost.indexというファイルを指定してる
    
    public function show(Post $post) 
    {
        return view('posts/show')->with(['post'=> $post]); //postsというフォルダのshow.bladeというファイル$postのデータをpostに入れる
    }

    public function create  ()
    {
        return view('posts/create');
    }
    
    public function store(PostRequest $request, Post $post) //空のpostモデルのインスタンス、入力データの受け取り用にrequestモデルのインスタンス
    {
        $input = $request['post']; //?
        $post->fill($input)->save(); //DBにデータを挿入
        return redirect('/posts/'. $post->id);
    }
    
    public function edit(Post $post)
    {
        return view ('posts/edit')->with(['post'=>$post]);
    }
    
    public function update(PostRequest $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();
        return redirect('/posts/' . $post->id); //aa
    }
    
    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/');
    }
}