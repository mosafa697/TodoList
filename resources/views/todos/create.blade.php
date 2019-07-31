@extends('layouts.app')

@section('content')
    {!! Form::open(['action' => 'TodoListController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('text','Text')}}
        {{Form::text('text','',['class'=>'form-control','placeholder'=>'name of todo'])}}
    </div>
    <div class="form-group">
        {{Form::label('body','Body')}}
        {{Form::textarea('body','',['class'=>'form-control','placeholder'=>'todo container'])}}
    </div>
    <div class="form-group">
            {{Form::label('due','Due')}}
            {{Form::text('due','',['class'=>'form-control','placeholder'=>'Ex: mon 4 may'])}}
        </div>
    {{Form::submit('submit',['class'=>'btn btn-info'])}}
    </div>
       
        
{!! Form::close() !!}
@endsection