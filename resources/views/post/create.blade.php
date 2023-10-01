@extends('template.master')

@section('css-content')
    <link rel="stylesheet" href="{{ asset('skydash')}}/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="{{ asset('skydash')}}/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Create Post</h3>
                        <h6 class="font-weight-normal mb-0">Create post data
                        </h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 grid-margin strecth-card">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Title</label>
                                <input type="text" id="title" class="form-control" name="title">
                            </div>
                            <div class="form-group">
                                <label for="category">Categories</label>
                                <select class="js-example-basic-multiple form-control" name="category_ids[]" multiple="multiple" id="category">
                                    @foreach ($categories as $item)
                                        <option value="{{ $item->id }}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="banner_image">Thumbnail</label>
                                <input type="file" id="banner_image" class="form-control" name="banner_image">
                            </div>
                            <div class="form-group">
                                <label for="body">Body</label>
                                <textarea class="form-control" name="body" id="body" cols="30" rows="10"></textarea>
                            </div>
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js-content')
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        });
    </script>
    <script src="{{ asset('skydash')}}/vendors/select2/select2.min.js"></script>
    <script>
        (function($) {
            'use strict';

            $(".js-example-basic-multiple").select2();

        })(jQuery);
    </script>
    {{-- <script>
        $(document).ready(function(){
            $('.js-example-basic-multiple').select2({
                placeholder: "Select",
                allowClear: true
            });
        });
    </script> --}}
@endsection
