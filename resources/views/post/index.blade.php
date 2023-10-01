@extends('template.master')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Post List</h3>
                        <h6 class="font-weight-normal mb-0">All post data are here!
                        </h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 grid-margin strecth-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                            <div class="d-flex justify-content-between align-items-center">
                                Posts
                                <a href="{{ route('post.create') }}" class="btn btn-primary">Create +</a>
                            </div>
                        </h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>Thumbnail</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $key => $post)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td><a href="{{ route('post.edit', [$post->id]) }}">{{ $post->title }}</a></td>
                                            <td>{{ $post->user->name ?? 'None'}}</td>
                                            <td>
                                                @if ($post->banner_image)
                                                    <img src="{{ asset('uploads/' . $post->banner_image) }}"
                                                        class="img-fluid" style="100px" alt="">
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('post.edit', [$post->id]) }}">Edit</a>
                                                <a href="{{ route('post.delete', [$post->id]) }}">Delete</a>
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
