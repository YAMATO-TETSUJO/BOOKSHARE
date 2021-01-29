@extends('layout')

@section('content')
    <h3>{{ $book->title }}</h3>
    <table class='table table-striped table-hover'>
        <tr>
            <td>
                {{ $message }}
            </td>
        </tr>
        <tr>
            <td>
                タイトル : {{ $book->title }}
            </td>
        </tr>
        <tr>
            <td>
                筆者 : {{ $book->author }}
            </td>
        </tr>
        <tr>
            <td>
                出版社 : {{ $book->publisher }}
            </td>
        </tr>
        <tr>
            <td>
                ISBN : {{ $book->isbn }}
            </td>
        </tr>
        <tr>
            <td>
                所有者 : {{ $book->user->name }}
            </td>
        </tr>
    </table>

    <p>
        <a href={{ route('book.list')}} class='btn btn-outline-primary'>一覧に戻る</a>
        <a href={{ route('book.edit', ["id" =>  $book->id]) }} class='btn btn-outline-primary'>編集</a>
    </p>
    <div>
        {{ Form::open(['method' => 'delete', 'route' => ['book.delete', $book->id]]) }}
            {{ Form::submit('削除', ['class' => 'btn btn-primary']) }}
        {{ Form::close() }}
    </div>
@endsection