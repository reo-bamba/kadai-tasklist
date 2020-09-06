@extends('layouts.app')

@section('content')
    @if(Auth::check())
        {{ Auth::user()->name }}
    @else
    <div class = "center-jumbotron">
        <div class = "text-center">
            <h1> welcome to TASK LIST!!</h1>
            {!! link_to_route('signup.get', 'Sign Up Now!!', [], ['class' => 'btn btn-lg btn-primary']) !!}
            
        </div>
    </div>
    @endif
@endsection