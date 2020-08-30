@extends('layouts.app')

@section('content')

    <h1># = {{ $task->id }} の詳細ページ</h1>
    
    <table class = "table table-bordered">
        <tr>
            <th>#</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>STATUS</th>
            <td>{{ $task->status }}</td>
        </tr>
        <tr>
            <th>タスク</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>
    {!! link_to_route('tasks.edit', 'このタスクを編集', ['task' =>$task->id], ['class' => 'btn btn-dark']) !!}
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id],  'method' => 'delete']) !!}
    {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    
    {!! Form::close() !!}

@endsection