@extends('layouts.app')
@section('title','All Todos')
@section('content')
    <div class="container">
        <div class="row pt-3 justify-content-center">
            <div class="card" style="width: 50%">
                <div class="card-header text-center">
                    <h3>All Tasks</h3>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach ($todo_arr as $todo)
                            <li class="list-group-item text-muted">
                                <div class="col">
                                    {{$todo->title}}
                                </div>
                                <div class="col">
                                    <!--Delete Task-->
                                    <span class="float-end">
                                        <a href="#" style="color: #eb0808;"><i class="fas fa-trash-alt"></i></a>
                                    </span>
                                        <!--Edit Task-->
                                        <span class="float-end me-2">
                                        <a href="#" style="color: #198754;"><i class="fas fa-edit"></i></a>
                                    </span>
                                    <!--Show Task-->
                                    <span class="float-end me-2">
                                        <a href="/Todos/{{$todo->id}}" style="color: #006eec;"><i class="fas fa-eye"></i></a>
                                    </span>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
