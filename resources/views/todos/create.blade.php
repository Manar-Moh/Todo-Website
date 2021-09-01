@extends('layouts.app')
@section('title','Create Todo')
@section('content')
    <div class="container">
        <div class="row justify-content-center pt-5">
            <div class="col-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Create New Task</h3>
                    </div>
                    <div class="card-body text-center">
                        <form action="/create" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control @error('TaskTitle') is-invalid @enderror"
                                 placeholder="Task Name" name="TaskTitle" value="{{old('TaskTitle')}}">
                                @error('TaskTitle')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" placeholder="Task Description" rows="10"
                                name="TaskDescription" class="@error('TaskDescription') is-invalid @enderror"
                                >{{old('TaskDescription')}}</textarea>
                                @error('TaskDescription')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-success text-center"
                                 style="width: 60%">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


