@extends('admin.incloud.master')

@section('title', 'Create Article')

@section('header') Articles @endsection
@section('header_link') <a href="{{ route('admin.articles.index') }}">Articles</a> @endsection
@section('content-header') Add @endsection

@section('style')
    <style>
        .dropify-wrapper {
            position: static;
        }
    </style>
@endsection

@section('content')
    <div class="col-md-12">
        <div class="card">
            <form action="{{ route('admin.articles.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="card-body">
                    <div class="row">

                        <!-- Name -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input name="name" class="form-control" type="text" placeholder="Article Name"
                                    value="{{ old('name') }}">
                            </div>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Date -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Date</label>
                                <input name="date" class="form-control" type="date" value="{{ old('date') }}">
                            </div>
                            @error('date')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Image -->
                        <div class="col-md-4">
                            <input type="file" class="dropify" name="image" data-height="200">
                       @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-lg-8">

                            <div class="form-group has-success mg-b-0">
                                <label for="">Description</label>
                                <textarea class="form-control " name="description" placeholder="description" required="" rows="3" style="height: 88px;"
                                    value="{{ old('description') }}"></textarea>
                            </div>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- Contents + Headers + Texts -->
                        <div class="col-md-12 mt-3">
                            <div id="contentsContainer">
                                <div class="content-group mb-3 border p-3">
                                    <label>Header</label>
                                    <input type="text" name="header[]" class="form-control mb-2" placeholder="Header">

                                    <label>Content</label>
                                    <textarea name="content[]" class="form-control mb-2" rows="3" placeholder="Content"></textarea>

                                    <div class="textsContainer"></div>


                                    <button type="button" class="btn btn-danger"
                                        onclick="this.parentElement.remove()">Delete Content</button>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary mt-3" onclick="addContent()">Add Content</button>
                        </div>

                    </div>

                    <div class="col-12 text-center mt-4">
                        <button type="submit" class="btn btn-success">Add Article</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('adminassets/assets/plugins/fileuploads/js/fileupload.js') }}"></script>
    <script src="{{ asset('adminassets/assets/plugins/fileuploads/js/file-upload.js') }}"></script>

    <script>
        function addContent() {
            var container = document.getElementById('contentsContainer');
            var div = document.createElement('div');
            div.classList.add('content-group', 'mb-3', 'border', 'p-3');
            div.innerHTML = `
            <label>Header</label>
            <input type="text" name="header[]" class="form-control mb-2" placeholder="Header">

            <label>Content</label>
            <textarea name="content[]" class="form-control mb-2" placeholder="Content" rows="3"></textarea>

            <div class="textsContainer"></div>
            <button type="button" class="btn btn-danger" onclick="this.parentElement.remove()">Delete Content</button>
        `;
            container.appendChild(div);
        }
    </script>
@endsection
