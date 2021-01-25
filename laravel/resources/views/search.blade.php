{{--
{{ Form::open(['method' => 'get']) }}
    {{ csrf_field() }}
    <div class='form-group'>
        {{ Form::label('title', 'タイトル検索:') }}
        {{ Form::text('title', null, ['class' => 'form-control']) }}
    </div>
    {{ csrf_field() }}
    <div class='form-group'>
        {{ Form::label('writer', '執筆者検索:') }}
        {{ Form::text('writer', null, ['class' => 'form-control']) }}
    </div>
    <div class='form-group'>
        {{ Form::submit('検索', ['class' => 'btn btn-outline-primary'])}}
        <a href={{ route('book.list') }}>クリア</a>
    </div>

{{ Form::close() }}
--}}

{!! Form::open(['method' => 'get']) !!}
    {{ csrf_field() }}  
    <div class='form-group'>
        {{ Form::label('s_title', 'タイトル検索:') }}
        {{ Form::text('s_title', null, ['class' => 'form-control']) }}
        {{ Form::label('s_writer', '執筆者検索:') }}
        {{ Form::text('s_writer', null, ['class' => 'form-control']) }}
        {{ Form::label('s_owner', 'オーナー検索:') }}
        {{ Form::text('s_owner', null, ['class' => 'form-control']) }}
        {!! Form::submit('検索', ['class' => 'btn btn-outline-primary']) !!}
    </div>

{!! Form::close() !!}