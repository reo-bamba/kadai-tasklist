@extends('layouts.app')

@section('content')

@if (count($errors) > 0)
        <ul class="alert alert-danger" role="alert">
            @foreach ($errors->all() as $error)
                <li class="ml-4">{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <h1>TASK新規作成</h1>
    <div class = "row">
        <div class = "col-6">
            {!! Form::model($task, ['route' => 'tasks.store']) !!}
            
            <div class = "form-group">
                {!! Form::label('status', 'STATUS') !!}
                <input type = "text" class = "form-control" name = "status">
            </div>
            
            <div class = "form-group">
                {!! Form::label('content', 'タスク') !!}
                {!! Form::text('content', null, ['class' => 'form-control']) !!}
            </div>
                {!! Form::submit('登録', ['clss' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>


@endsection