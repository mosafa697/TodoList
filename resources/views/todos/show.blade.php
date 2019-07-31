@extends('layouts.app')

@section('content')
    <a class="btn btn-default" href = "/">Go Back</a>
    <h1>{{$todo->text}}</h1>
    <div class = "card card-body bg-light">
        <p> " {{$todo->body}} " </p>
    </div>
    <br><br>
    <a href="/todo/{{$todo->id}}/edit" class="btn btn-info">Edit</a>
    {!! Form::open(['action' => ['TodoListController@destroy', $todo->id],'method'=>'POST' ,'enctype'=>'multipart/form-data' ,'class' => 'pull-right']) !!}
    {{Form::hidden('_method','delete')}}
    {{Form::submit('Delete',['class'=>'btn btn-danger'])}} 
    {!! Form::close() !!}
@endsection