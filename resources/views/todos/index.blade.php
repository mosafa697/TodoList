@extends('layouts.app')

@section('content')
    <h1>TodoList</h1>
    @if( count($todos) > 0 )
        @foreach($todos as $todo)
            <div class = "card card-body bg-light">
                <h3><a href = "todo/{{$todo->id}}" >{{$todo->text}}</a> <kbd>{{$todo->due}}</kbd></h3>
                
            </div>
            <br>
        @endforeach
    @endif
@endsection