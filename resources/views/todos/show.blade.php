@extends('layouts.app')
@section('title','Todo - '.$task_info->id)
@section('content')
    <div class="container">
        <h1 class="mt-5 text-center">
            {{$task_info->title}}
        </h1>
        <div class="row pt-5 justify-content-center">
            <div class="col-10">
                <div class="card">
                    <div class="card-header">
                        <span>Task Details</span>
                        <span class="badge bg-warning float-end text-dark">
                            {{boolval($task_info->completed)?'Completed':'Non Completed'}}
                        </span>
                    </div>
                    <div class="card-body">
                        {{$task_info->description}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


