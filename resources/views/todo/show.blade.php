@extends('layouts.app')

@section('content')
@include('inc.messages')
  <a class="btn btn-primary" href="/">Go Back</a>
  <h1><a href="">{{$todo->text}}</a></h1>
  <div class="badge badge-danger">{{$todo->due}}</div>
  
  <hr>
  <p>{{$todo->body}}</p>
  <br><br>
  <a href="{{ route('singletodo.edit', $todo) }}" class="btn btn-primary">Edit</a>
  <form action=" {{route('create.destroy', $todo) }}" method="POST">
    @csrf
    @method('DELETE')
  {!! Form::open([ 'method' => 'POST', 'class' => 'pull-right']) !!}
    {{ Form::hidden('_method', 'DELETE') }}
    {{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger']) }}
  {!! Form::close() !!}
  </form>


@endsection