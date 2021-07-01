@extends('layouts.app')
@section('title') contact @endsection

@section('content')
@include('inc.messages')
    <h1> Create </h1>

    <form action =  {{route("create")}} method ='post' >
        {!! Form::open() !!}      
            {{ Form::bsText('text') }}
            {{ Form::bsTextArea('body') }}
            {{ Form::bsText('due') }}
            {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary']) }}
        {!! Form::close() !!}
    </form>
@endsection