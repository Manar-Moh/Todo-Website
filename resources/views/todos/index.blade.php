@extends('layouts.app')
@section('title','All Todos')
@section('content')
    <div class="container">
        <div class="row pt-3 justify-content-center">
            <div class="card" style="width: 80%">
                <div class="card-header text-center">
                    <h3>All Tasks</h3>
                </div>
                @if (session()->has('success'))
                    <div class="alert alert-success mt-2 flashmessage">
                        {{session()->get('success')}}
                    </div>
                @endif
                <div class="card-body">
                    <ul class="list-group">
                        @forelse($todo_arr as $todo)
                            <li class="list-group-item text-muted">
                                <div class="col">
                                    {{$todo->title}}
                                </div>
                                <div class="col">
                                    <!--Delete Task-->
                                    <span class="float-end">
                                        <a href="/Todos/{{$todo->id}}/delete" style="color: #eb0808;"><i class="fas fa-trash-alt"></i></a>
                                    </span>
                                        <!--Edit Task-->
                                        <span class="float-end me-2">
                                        <a href="/Todos/{{$todo->id}}/edit" style="color: #f07e22;"><i class="fas fa-edit"></i></a>
                                    </span>
                                    <!--Show Task-->
                                    <span class="float-end me-2">
                                        <a href="/Todos/{{$todo->id}}" style="color: #006eec;"><i class="fas fa-eye"></i></a>
                                    </span>
                                    <!--Complete Task-->
                                    @if (!$todo->completed)
                                        <span class="float-end me-2">
                                            <a href="/Todos/{{$todo->id}}/complete" style="color: #0eac43;"><i class="fas fa-check-square"></i></a>
                                        </span>
                                    @endif

                                </div>
                            </li>
                        @empty
                            <p class="text-center">No Tasks</p>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
