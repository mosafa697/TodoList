@extends('layouts.app')

@section('content')

    <a class="btn btn-default" href = "/todo/{{$todo->id}}">Go Back</a><br>
    {!! Form::open(['action' => ['TodoListController@update', $todo->id],'method'=>'POST','enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('text','Text')}}
        {{Form::text('text',$todo->text,['class'=>'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('body','Body')}}
        {{Form::textarea('body',$todo->body,['class'=>'form-control'])}}
    </div>
    <div class="form-group">
            {{Form::label('due','Due')}}
            {{Form::text('due',$todo->due,['class'=>'form-control'])}}
        </div>
    
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('submit',['class'=>'btn btn-info'])}}
    </div>
       
        
{!! Form::close() !!}
@endsection