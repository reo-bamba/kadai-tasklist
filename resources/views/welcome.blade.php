@extends('layouts.app')

@section('content')
    @if(Auth::check())
        <div class = "row">
            <aside class = "col-sm-4">
                <div class = "card">
                    <div class = card-header>
                        <h2 class = "card-title">{{ Auth::user()->name }}</h2>
                </div>
                </div>
            </aside>
            <div class ="col-sm-8">
                @include('tasks.tasks')
            </div>
             {!! link_to_route('tasks.create', '新規タスク設定', [], ['class' => 'btn btn-primary']) !!}
        </div>
    @else
    <div class = "center-jumbotron">
        <div class = "text-center">
            <h1> welcome to TASK LIST!!</h1>
            {!! link_to_route('signup.get', 'Sign Up Now!!', [], ['class' => 'btn btn-lg btn-primary']) !!}
            
        </div>
    </div>
    @endif
@endsection