@extends('layouts.app')

@section('content')
    <div class='container'>
        <div class="mb-5 clearfix">
        <form action="{{ route('posts.index') }}" method="GET" class='float-end'>
            <input type="text" name="search" value="{{ $search }}">
            <input type="submit" value="検索">
        </form>
        </div>
        <h1>投稿一覧</h1>
        <div>
        @isset($posts)
        @foreach ($posts as $post)
            <div>
            <h2>{{ $post->author }}さんの投稿</h2>
            <p>投稿日時：{{ $post->post_date }}</p>
            <div style='word-break: break-all;'>
            {!! nl2br(htmlspecialchars($post->message)) !!}
            </div>
            <hr/>
            </div>
        @endforeach
        @endisset            
        </div>
        {{ $posts->links() }}
    </div>

@endsection



