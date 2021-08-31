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
}
