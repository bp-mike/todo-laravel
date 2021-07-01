@extends('layouts.app')
@section('title') home @endsection

@section('content')
@include('inc.messages')
    <h1>Home</h1>

    @if ($todos->count())
        @foreach ($todos as $todo)
            {{-- <div class="card">
                <h3><a href="todo/{{$todo->id}}">{{$todo->text}}</a> <span class="badge badge-danger">{{$todo->due}}</span></h3>
            </div> --}}
            <div class="card mb-3">
                {{-- <div class="card-header">Header</div> --}}
                <div class="card-body">
                  <h5 class="card-title"><a href="{{ route('singletodo', $todo) }}"> {{$todo->text}} </a></h5>
                  <p class="card-text"> <strong>Due: <span class="badge badge-danger">{{$todo->due}}</strong></p>

                </div>
                <div class="container">
                    <div class="row ">
                        <div class="col-9">
                            <span class="bg-light p-4">Created: {{ $todo->created_at->diffForHumans()}}</span>
                            <span class="bg-light p-4">Last Edited on: {{ $todo->updated_at->diffForHumans()}}</span>
                        </div>                        
                            <form action="" class="p-1 "> <a href="{{ route('singletodo.edit', $todo) }}" class="btn btn-primary">Edit</a> </form>                        
                            <form action="{{route('create.destroy', $todo) }}" method="POST" class="p-1 " > 
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button> 
                            </form>
                        
                        
                      </div>
                </div>
              </div>
        @endforeach
        {{ $todos->links() }}
    @else
        <p> Your Todo List is empty </p>
    @endif
@endsection
