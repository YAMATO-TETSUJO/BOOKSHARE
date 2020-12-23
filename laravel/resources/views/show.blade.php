<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>bookshare</title>
        <style>body {padding: 10px;}</style>
    </head>
    <body>
        <h1>bookshare</h1>
        <p>{{ $message }}</p>
        <p>{{ $book->id }}</p>
        <p>{{ $book->isbn }}</p>

        <p>
            <a href={{ route('book.list') }}>一覧に戻る</a>
        </p>
    </body>
</html>