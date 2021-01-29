@extends('layout')

@section('content')
    <h3>{{ $book->title }}</h3>
    <table class='table table-striped table-hover'>
        <tr>
            <th>著者</th><th>出版社</th><th>ISBN</th><th>所有者</th><th>貸出期間</th>
        </tr>
        <tr>
            <td>{{ $book->author }}</td>
            <td>{{ $book->publisher }}</td>
            <td>{{ $book->isbn }}</td>
            <td>{{ $book->user->name }}</td>
            <td>{{ $book->day }}日</td>
        </tr>
        {{--
        <tr>
            <td>
                {{ $message }}
            </td>
        </tr>
        --}}
    </table>
    <br>
    <br>
    <h3 class="section-title">貸出の際のお願い</h3>
    <p class="texts">{{ $book->comment }}</p>

    @auth
        <p>
            <a href={{ route('book.list')}} class='btn btn-outline-primary'>一覧に戻る</a>
            @if($book->user_id == $login_user_id)
                <a href={{ route('book.edit', ["id" =>  $book->id]) }} class='btn btn-outline-primary'>編集</a>
                </p>
                {{ Form::open(['method' => 'delete', 'route' => ['book.delete', $book->id]]) }}
                    {{ Form::submit('削除', ['class' => 'btn btn-primary']) }}
                {{ Form::close() }}
            @else
                </p>
            @endif
        </p>
    @endauth
@endsection