@extends('layout')

@section('content')
    <h3>{{ $book->title }}</h3>
    <p>{{ $message }}</p>
    <p>title : {{ $book->title }}</p>
    <p>author : {{ $book->author }}</p>
    <p>publisher : {{ $book->publisher }}</p>
    <p>isbn : {{ $book->isbn }}</p>
    <p>owner : {{ $book->user_id }}</p>

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