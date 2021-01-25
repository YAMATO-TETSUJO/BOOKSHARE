@extends('layout')

@section('content')
    {{-- <p>{{ $message }}</p> --}}

    @include('search')

    <table class='table table-striped table-hover'>
        @foreach ($books as $book)
            <tr>
                <td>
                    <a href='{{ route("book.show", ["id" =>  $book->id]) }}'>
                        {{ $book->title }}
                    </a>
                </td>
                <td>{{ $book->writer }}</td>
                <td>{{ $book->user_id }}</td>
            </tr>
        @endforeach
    </table>

    <div>
        <a href={{ route('book.new') }} class='btn btn-primary'>新規の本の追加</a>
        <a href={{ route('book.list') }} class='btn btn-primary'>検索条件クリア</a>
    </div>
@endsection