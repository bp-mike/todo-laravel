<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;


class TodosController extends Controller
{
    public function index(){ 
        
        // $todos = Todo::all();
        // $todos = Todo::get();
        // $todos = Todo::orderBy('created_at', 'desc')->get();
        $todos = Todo::latest()->paginate(5);
        return view('todo.index', ['todos'=>$todos]);
        // return view('todo.index')->with('todos'=>$todos);
    }

    public function create(){
        return view('todo.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'text' => 'required',
            'body' => 'required'
        ]);

        // $todo = new Todo;
        // $todo->text = $request->input('text');
        // $todo->body = $request->input('body');
        // $todo->due = $request->input('due');

        // $todo->save();
        Todo::Create([
            'text' => $request->text,
            'body' => $request->body,
            'due' => $request->due,
        ]);

        return back()->with('success', 'New todo successfully added');
    }

    public function show(Todo $todo){
        return view('todo.show', ['todo'=> $todo]);
    }

    public function edit(Todo $todo){
        return view('todo.edit',['todo'=>$todo]);
    }

    public function update(Request $request, $id){

        $this->validate($request, [
            'text' => 'required',
            'body' => 'required'
        ]);
    
        $todo = Todo::find($id);
        $todo->text = $request->input('text');
        $todo->body = $request->input('body');
        $todo->due = $request->input('due');
        $todo->save();

        return back()->with('success', 'todo successfully updated');
    }

    public function destroy(Todo $todo){
        $todo->delete();

        return redirect('/')->with('success', 'todo successfully deleted');
    }


}
