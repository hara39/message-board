@extends('layouts.app')

@section('content')

    <h1>メッセージ一覧</h1>
    
    @if (count($messages) > 0)
        <table class="table tabel-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>タイトル</th>
                    <th>メッセージ</th>
                </tr>
            </thead>
            <tbody>
       
            @foreach ($messages as $message)
                <tr>
                    <td>{!! link_to_route('messages.show',$message->id, ['id' => $message->id]) !!} : {{ $message->title }} > {{ $message->content }}</td>
                    <td>{{ $message->title }}</td>
                    <td>{{ $message->cpntent }}</td>
                    
                </tr>    
            @endforeach
            </tbody>
        </table>
    @endif
    
    {!! link_to_route('messages.create','新規のメッセージの投稿', null, ['class' => 'btn btn-primary']) !!}
    
@endsection