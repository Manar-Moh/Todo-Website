@extends('layouts.app')
@section('title','Edit Todo - '.$task_info->id)
@section('content')
    <div class="container">
        <div class="row justify-content-center pt-5">
            <div class="col-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Edit Task</h3>
                    </div>
                    <div class="card-body text-center">
                        <form action="/Todos/{{$task_info->id}}" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control @error('TaskTitle') is-invalid @enderror"
                                 placeholder="Task Name" name="TaskTitle" value="{{$task_info->title}}">
                                @error('TaskTitle')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" placeholder="Task Description" rows="10"
                                name="TaskDescription" class="@error('TaskDescription') is-invalid @enderror"
                                >{{$task_info->description}}</textarea>
                                @error('TaskDescription')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-success text-center"
                                 style="width: 60%">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


