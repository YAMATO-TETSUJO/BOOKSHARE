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
        @foreach ($books as $book)
            <p>
                <a href='{{ route("book.show", ["id" =>  $book->id]) }}'>
                    {{ $book->id }},
                    {{ $book->isbn }}
                </a>
            </p>
        @endforeach
    </body>
</html>