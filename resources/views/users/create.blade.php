<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <div>
            <h1>刀剣　登録</h1>
            <h2>フォーム</h2>
            <form action="/tokens/store" method="POST">
                @csrf
                <div>名前:<input name="name" value="{{ old('name') }}" ></div>
                <div>刀種:<input name="type" value="{{ old('type') }}" ></div>
                <button> 送信 </button>
            </form>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </body>
</html>
