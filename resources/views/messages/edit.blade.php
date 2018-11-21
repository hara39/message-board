@extends('layouts.app')

@section('content')

    <h1>id: {{ $message->id }} のメッセージ編集</h1>
    
    {!! Form::model($message, ['route' => ['messages.update',$message->id],'method' => 'put']) !!}
        <div class="col-xs-6">
            <div class="form-group">
                {!! Form::label('title', 'タイトル') !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
            </div>
        
            <div class="form-group">
                {!! Form::label('content','メッセージ:') !!}
                {!! Form::text('content', null, ['class' => 'form-control']) !!}
            </div>
            {!! Form::submit('更新') !!}
        </div>
    {!! Form::close() !!}
    
@endsection