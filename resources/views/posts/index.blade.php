@extends('layouts.app')

@section('title', '投稿　登録')

@section('sidebar')
    @parent

    <p>これはマスターサイドバーに追加される</p>
@endsection

@section('content')
    <div>
        <h1>投稿一覧</h1>
        @isset($posts)
        @foreach ($posts as $post)
            <h2>{{ $post->author }}さんの投稿</h2>
            <p>投稿日時：{{ $post->post_date}}</p>
            {{ $post->message }}
            <br/><hr/>
        @endforeach
        @endisset            
    </div>
@endsection


