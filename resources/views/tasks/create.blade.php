@extends('layouts.app')

@section('content')

    <div class = "row">
        <div class = "col-6">
            {!! Form::model($task, ['route' => 'tasks.store']) !!}
            <div class = "form-group">
                {!! Form::label('content', 'タスク') !!}
                {!! Form::text('content', null, ['class' => 'form-control']) !!}
            </div>
                {!! Form::submit('登録', ['clss' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>


@endsection