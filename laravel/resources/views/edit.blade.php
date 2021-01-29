@extends('layout')

@section('content')
    <p>{{ $message }}</p>
    {{ Form::model($book, ['route' => ['book.update', $book->id]]) }}
        <div class='form-group'>
            {{ Form::label('title', 'タイトル:') }}
            {{ Form::text('title', null) }}
        </div>
        <div class='form-group'>
            {{ Form::label('author', '執筆者:') }}
            {{ Form::text('author', null) }}
        </div>
        <div class='form-group'>
            {{ Form::label('publisher', '出版社:') }}
            {{ Form::text('publisher', null) }}
        </div>
        <div class='form-group'>
            {{ Form::label('isbn', 'ISBN:') }}
            {{ Form::text('isbn', null) }}
        </div>
        <div class='form-group'>
            {{ Form::label('day', '貸出期間:') }}
            {{ Form::text('day', 14) }}
        </div>
        <div class="form-group">
            {{ Form::submit('保存する', ['class' => 'btn btn-primary']) }}
            <a href={{ route('book.show', ['id' =>  $book->id]) }} class='btn btn-outline-primary'>戻る</a>
        </div>
    {{ Form::close() }}
@endsection