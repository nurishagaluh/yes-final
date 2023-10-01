@extends('template.master')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">Tasks</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <div class="d-flex justify-content-between align-items-center">
                            Task List
                            <a href ="{{ route('task.create') }}" class="btn btn-primary">Add Task</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Task Name</th>
                                    <th>Assigned To</th>
                                    <th>Due Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $key => $task)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>
                                            <a href="{{ route('task.show', [$task->id])}}">{{ $task->name }}</a>
                                        </td>
                                        <td>{{ $task->assigned_to }}</td>
                                        <td>{{ $task->due_date }}</td>
                                        <td>
                                            <a class="mr-2" href ="{{ route('task.edit', [$task->id]) }}">Edit</a>
                                            <a class="mr-2" href ="{{ route('task.delete', [$task->id]) }}">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
