@extends('layout')

@section('content')
    {{-- <p>{{ $message }}</p> --}}

    @include('search')

    <table class='table table-striped table-hover'>
        <tr>
            <th>タイトル</th><th>著者</th><th>所有者</th>
        </tr>
        @foreach ($books as $book)
            @auth
                @if($book->user_id == $login_user_id)
                    <tr>
                        <td>
                            <a href='{{ route("book.show", ["id" =>  $book->id]) }}'>
                                {{ $book->title }}
                            </a>
                        </td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->user->name }}</td>
                    </tr>
                @endif
            @endauth
        @endforeach
    </table>

    <div>
        @auth
            <a href={{ route('book.new') }} class='btn btn-primary'>新規の本の追加</a>
        @endauth
        <a href={{ route('mybook.list') }} class='btn btn-primary'>検索条件クリア</a>
    </div>
@endsection