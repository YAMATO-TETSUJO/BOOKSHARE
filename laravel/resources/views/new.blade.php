@extends('layout')

@section('content')
    <p>{{ $message }}</p>
    {{ Form::open(['route' => 'book.store']) }}
        <div class='form-group'>
            {{ Form::label('title', 'タイトル:') }}
            {{ Form::text('title', null) }}
        </div>
        <div class='form-group'>
            {{ Form::label('user_id', 'オーナーID（所有者ID）:') }}
            {{ Form::text('user_id', null) }}
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
            {{ Form::label('day', '貸出期間:') }}
            {{ Form::text('day', 14) }}
        </div>
        <div class="form-group">
            {{ Form::submit('作成する', ['class' => 'btn btn-primary']) }}
            <a href={{ route('book.list') }}>一覧に戻る</a>
        </div>
    {{ Form::close() }}
@endsection