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
                title : {{ $book->title }}
            </td>
        </tr>
        <tr>
            <td>
                author : {{ $book->author }}
            </td>
        </tr>
        <tr>
            <td>
                publisher : {{ $book->publisher }}
            </td>
        </tr>
        <tr>
            <td>
                isbn : {{ $book->isbn }}
            </td>
        </tr>
        <tr>
            <td>
                owner : {{ $book->user_id }}
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