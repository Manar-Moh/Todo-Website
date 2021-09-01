<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todosM;

class todosController extends Controller
{
    //All Tasks
    public function index(){

        $todo_arr = todosM::all();

        return view('todos.index')->with('todo_arr',$todo_arr);
    }

    //Show Task
    public function show($todorequest){

        return view('todos.show')->with('task_info',todosM::find($todorequest));
    }

    //Create Task
    public function create(){

        return view('todos.create');
    }

     //Store New Task In DB
     public function store(Request $request){

        $request->validate([
            'TaskTitle' => 'required',
            'TaskDescription' => 'required',
        ]);

         $task = new todosM();

         $task->title = $request->TaskTitle;
         $task->description = $request->TaskDescription;

         $task->save();

         $request->session()->flash('success','Task Created Successfully');

         return redirect('/Todos');
    }

    //Show Task To Edit
    public function edit($todorequest){

        $task_info = todosM::find($todorequest);
        return view('todos.edit')->with('task_info',$task_info);
    }

    //Update Task In DB
    public function update(Request $request,$task_id){
        $request->validate([
            'TaskTitle' => 'required',
            'TaskDescription' => 'required',
        ]);

        $task_info = todosM::find($task_id);
        $task_info->title = $request->TaskTitle;
        $task_info->description = $request->TaskDescription;

        $task_info->save();
        $request->session()->flash('success','Task Updated Successfully');
        return redirect('/Todos');

    }

    //Update Task In DB
    public function delete($task_id){

        $task_info = todosM::find($task_id);

        $task_info->delete();
        session()->flash('success','Task Deleted Successfully');
        return redirect('/Todos');

    }

    //Complete Task
    public function complete($task_id){

        $task_info = todosM::find($task_id);
        $task_info->completed = true;
        $task_info->save();
        session()->flash('success','Task Completed Successfully');
        return redirect('/Todos');

    }
}
