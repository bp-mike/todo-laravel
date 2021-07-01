@extends('layouts.app')
@section('title') contact @endsection

@section('content')
@include('inc.messages')
    <h1> Edit Todo </h1>
    <a href="{{route('singletodo', $todo)}}" class="btn btn-secondary">Go back</a>
    
    <form action =  {{route("singletodo.edit", $todo)}} method ='post' >
        {!! Form::open() !!}      
            {{ Form::bsText('text', $todo->text) }}
            {{ Form::bsTextArea('body', $todo->body) }}
            {{ Form::bsText('due', $todo->due) }}
            {{ Form::hidden('_method', 'put') }}
            {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary']) }}
        {!! Form::close() !!}
    </form>
@endsection