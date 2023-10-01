@extends('template.master')

@section('content')

        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin strecth-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                Update Task
                            </div>
                            <form action="{{ route('task.update', [$task->id]) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="task_name">Name</label>
                                    <input type="text" class="form-control" name="task_name" id="task_name" value="{{ $task->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="assigned_to">Assigned to</label>
                                    <input type="text" class="form-control" name="assigned_to" id="assigned_to" value="{{ $task->assigned_to}}">
                                </div>
                                <div class="form-group">
                                    <label for="due_date">Due Date</label>
                                    <input type="date" class="form-control" name="due_date" id="due_date" value="{{ $task->due_date}}">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" name="description" id="description" cols="30" rows="10" value="{{ $task->description}}"></textarea>
                                </div>
                                <button class="btn btn-primary mr-2">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
