@extends('template.master')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h3 class="font-weight-bold">Detail Task</h3>
                            <h6 class="font-weight-normal mb-0">Detail task data
                            </h6>
                        </div>
                        <div class="form-group">
                            <h5>ID:</h5>
                            <p>{{ $tasks->id }}</p>
                        </div>
                        <div class="form-group">
                            <h5>Name:</h5>
                            <p>{{ $tasks->name }}</p>
                        </div>
                        <div class="form-group">
                            <h5>Assigned to:</h5>
                            <p>{{ $tasks->assigned_to }}</p>
                        </div>
                        <div class="form-group">
                            <h5>Due Date:</h5>
                            <p>{{ $tasks->due_date }}</p>
                        </div>
                        <div class="form-group">
                            <h5>Description:</h5>
                            <p>{{ $tasks->description }}</p>
                        </div>
                        <a class="btn btn-primery" href="{{route('task.index')}}">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
