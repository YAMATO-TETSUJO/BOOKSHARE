@extends('layout')

@section('content')
    {{-- <p>{{ $message }}</p> --}}

    @include('search')

    <table class='table table-striped table-hover'>
        <tr>
            <th>タイトル</th><th>著者</th><th>所有者</th>
        </tr>
        @foreach ($books as $book)
            <tr>
                <td>
                    <a href='{{ route("book.show", ["id" =>  $book->id]) }}'>
                        {{ $book->title }}
                    </a>
                </td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->user->name }}</td>
            </tr>
        @endforeach
    </table>

    <div>
        @auth
            <a href={{ route('book.new') }} class='btn btn-primary'>新規の本の追加</a>
        @endauth
        <a href={{ route('book.list') }} class='btn btn-primary'>検索条件クリア</a>
        <a href={{ route('mybook.list') }} class='btn btn-primary'>自分の本の表示</a>
    </div>
@endsection