{!! Form::open(['method' => 'get']) !!}
    {{ csrf_field() }}  
    <div class='form-group'>
        {{ Form::label('s_title', 'タイトル検索:') }}
        {{ Form::text('s_title', null, ['class' => 'form-control']) }}
        {{ Form::label('s_author', '執筆者検索:') }}
        {{ Form::text('s_author', null, ['class' => 'form-control']) }}
        {{ Form::label('s_user_id', 'オーナー検索:') }}
        {{ Form::text('s_user_id', null, ['class' => 'form-control']) }}
        {!! Form::submit('検索', ['class' => 'btn btn-outline-primary']) !!}
    </div>

{!! Form::close() !!}