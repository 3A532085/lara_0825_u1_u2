<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
//    \App\Post::create([
//        'title'=>'test title',
//        'content'=>'test content',
//    ]);

//    $post = new\App\Post();
//    $post ->title ='test title';
//    $post ->content ='test content';
//    $post ->save();

//  $posts=\App\Post::all();
//  dd($posts);

//    $post=\App\Post::find(1);
//    dd($post);

//  $posts=\App\Post::where('id','<',10)->orderBy('id','DESC')->get();
//  dd($posts);

//    $post=\App\Post::find(1);
//    $post->update([
//    'title'=>'updated title',
//    'content'=>'updated content',
//    ]);

//    $post=\App\Post::find(1);
//    $post->title='saved title';
//    $post->content='saved content';
//    $post->save();

    $post=\App\Post::find(1);
    $post->delete();

});
