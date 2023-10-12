@extends('admin.index')

@push('customCss')
    <link rel="stylesheet" href="{{ asset('assets/libs/bootstrap-select/dist/css/bootstrap-select.min.css') }}" />
@endpush

@section('content')
    <section class="container-fluid p-4">
        <div class="row">
            <!-- Page header -->
            <div class="col-lg-12 col-md-12 col-12">
                <div class="border-bottom pb-3 mb-3 d-md-flex align-items-center justify-content-between">
                    <div class="mb-3 mb-md-0">
                        <h1 class="mb-1 h2 fw-bold">Edit Post</h1>
                        <!-- Breadcrumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="admin-dashboard.html">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('admin.cms.overview') }}">CMS</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Add New Post
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div>
                        <a href="{{ route('admin.cms.posts') }}" class="btn btn-outline-secondary">Back to All Post</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-9 col-lg-8 col-md-12 col-12">
                <!-- Card -->
                <div class="card border-0 mb-4">
                    <!-- Card header -->
                    <div class="card-header">
                        <h4 class="mb-0">Edit Post</h4>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">

                        <div class="">
                            <form action="{{ route('admin.cms.posts.store') }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <!-- Form -->
                                <div class="row">
                                    <div class="mb-3 col-md-12">
                                        <!-- Title -->
                                        <label for="postTitle" class="form-label">Title</label>
                                        <input type="text" id="postTitle" name="title" class="form-control text-dark"
                                            placeholder="Post Title" value="{{ $data['post']->title }}">
                                        <small>Keep your post titles under 60 characters. Write
                                            heading that describe the topic content.
                                            Contextualize for Your Audience.</small>
                                    </div>
                                    <!-- Excerpt -->
                                    <div class="mb-3 col-md-12">
                                        <label for="Excerpt" class="form-label">Excerpt</label>
                                        <textarea rows="3" id="Excerpt" class="form-control text-dark" placeholder="Excerpt" name="excerpt">{{ $data['post']->excerpt }}</textarea>
                                        <small>A short extract from writing.</small>
                                    </div>
                                    <!-- Category -->
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Category</label>
                                        <select class="selectpicker" data-width="100%" name="category_id">

                                            <option value="">--Select Category--</option>
                                            @foreach ($data['categories'] as $category)
                                                <option value="{{ $category->id }}"
                                                    {{ $data['post']->category->id == $category->id ? 'selected' : '' }}>
                                                    {{ $category->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <!-- Editor -->
                                <div class="mt-2 mb-4">
                                    <textarea id="editor" name="content">
                                        {!! $data['post']->content !!}
                                    </textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Publish</button>
                                <!-- button -->
                                <a href="#" class="btn btn-outline-secondary">
                                    Save to Draft
                                </a>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-12 col-12">
                <!-- Card -->
                <div class="card mt-4 mt-lg-0 mb-4">
                    <!-- Card Header -->
                    <div class="card-header d-lg-flex">
                        <h4 class="mb-0">Post Info</h4>
                    </div>
                    <!-- List Group -->
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <span class="text-body">Post ID</span>
                            <h5>8693637308</h5>
                        </li>
                        <li class="list-group-item">
                            <span class="text-body">Status</span>
                            <h5>
                                <span class="badge-dot bg-success d-inline-block me-1"></span>Published (unsaved changes)
                            </h5>
                        </li>
                        <li class="list-group-item">
                            <span class="text-body">Created by</span>
                            <div class="d-flex mt-2">
                                <img src="../../assets/images/avatar/avatar-1.jpg" alt=""
                                    class="avatar-sm rounded-circle">
                                <div class="ms-2">
                                    <h5 class="mb-n1">Geeks Courses</h5>
                                    <small>Admin</small>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <span class="text-body">Created at</span>
                            <h5>Jul 30, 2:21 PM</h5>
                        </li>
                        <li class="list-group-item">
                            <span class="text-body">First published at</span>
                            <h5>Jul 30, 2:21 PM</h5>
                        </li>
                        <li class="list-group-item">
                            <span class="text-body">Last update</span>
                            <h5>Aug 31, 12:21 PM</h5>
                        </li>
                        <li class="list-group-item">
                            <span class="text-body">Last Published</span>
                            <h5>Aug 31, 12:21 PM</h5>
                        </li>
                    </ul>
                    <!-- Card -->
                </div>
                <div class="card mb-4">
                    <!-- Card Header -->
                    <div class="card-header d-lg-flex">
                        <h4 class="mb-0">Actions</h4>
                    </div>
                    <!-- List group -->
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span class="text-body">Unpublish</span>
                            <a href="#" class="text-inherit"><i class="fe fe-x-circle fs-4"></i></a>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span class="text-body">Duplicate</span>
                            <a href="#" class="text-inherit"><i class="fe fe-copy fs-4"></i></a>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span class="text-body">Delete</span>
                            <a href="#"><i class="fe fe-trash text-danger fs-4"></i></a>
                        </li>
                    </ul>
                </div>
                <!-- Card  -->
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header d-lg-flex">
                        <h4 class="mb-0">Revision History</h4>
                    </div>
                    <!-- List group -->
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="mb-0">Aug 31, 12:21 PM</h5>
                                <span class="text-body">Geeks Coures</span>
                            </div>
                            <div>
                                <span class="badge bg-success badge-pill">Published</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('customJsQuery')
    <script src="{{ asset('assets/libs/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/libs/quill/dist/quill.min.js') }}"></script>
    <!--CKEDITOR -->
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

    <!-- FilePond Js -->
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>


    <script>
        FilePond.registerPlugin(FilePondPluginImagePreview);
        // Get a reference to the file input element
        const inputElement = document.querySelector('input[type="file"]');

        // Create a FilePond instance
        const pond = FilePond.create(inputElement);
        FilePond.setOptions({
            server: {
                process: "{{ route('admin.cms.post.upload.attachment') }}",
                revert: "{{ route('admin.cms.post.delete.attachment') }}",
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                }
            },
        });
        $(document).ready(function() {

            CKEDITOR.replace('editor');
        })
    </script>
@endpush
