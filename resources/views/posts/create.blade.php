@extends('layouts.app')

@section('title', '投稿　登録')

@section('sidebar')
    @parent

    <p>これはマスターサイドバーに追加される</p>
@endsection

@section('content')
    <div>
        <h1>投稿　登録</h1>
        <h2>フォーム</h2>
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div style='margin-top: 20px; margin-bottom: 20px;'>名前:<input name="author" value="{{ old('author') }}" ></div>
            @error('author')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div style='margin-top: 20px; margin-bottom: 20px;'>メッセージ:<textarea name="message">{{ old('message') }}</textarea></div>
            @error('message')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <button> 送信 </button>
        </form>
    </div>

<!--         @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif -->

@endsection


