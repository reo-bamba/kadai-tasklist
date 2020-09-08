 @if (count($tasks) > 0)
    <table class = "table table-striped table-dark">
        <thead>
            <tr>
                <th>#</th>
                <th>STATUS</th>
                <th>タスク</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
            <tr>
                <td>{!! link_to_route('tasks.show', $task->id, ['task' => $task->id]) !!}</td></td>
                <td>{{ $task->status }}</td>
                <td>{{ $task->content }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endif
    
  