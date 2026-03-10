@extends('Admin.incloud.master')

@section('title', 'Edit Articles')

@section('header') Articles @endsection
@section('header_link') <a href="{{ route('admin.articles.index') }}">Articles</a> @endsection
@section('content-header') Edit @endsection

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
        <form action="{{ route('admin.articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
            @csrf


            <div class="card-body">
                <div class="row">

                    <!-- Name -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Name</label>
                            <input name="name" class="form-control" type="text" value="{{ old('name', $article->name) }}">
                        </div>
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Date -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Date</label>
                            <input name="date" class="form-control" type="date" value="{{ old('date', $article->date) }}">
                        </div>
                        @error('date') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Image -->
                    <div class="col-md-4">
                        <input type="file" class="dropify" name="image"
                               data-default-file="{{ $article->image ? asset('uploads/image/articles/' . $article->image) : '' }}"
                               data-height="200">
                    @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>

                    <!-- Contents + Headers + Texts -->
                    <div class="col-md-12 mt-3">
                        <div id="contentsContainer">
                            @php
                                $contents = json_decode($article->content, true) ?? [];
                                $headers = json_decode($article->headers ?? '[]', true);
                            @endphp

                            @foreach($contents as $cIndex => $singleContent)
                                <div class="content-group mb-3 border p-3">
                                    <label>Header</label>
                                    <input type="text" name="header[]" class="form-control mb-2" placeholder="Header" value="{{ $headers[$cIndex] ?? '' }}">

                                    <label>Content</label>
                                    <textarea name="content[]" class="form-control mb-2" rows="3">{{ $singleContent }}</textarea>



                                    <button type="button" class="btn btn-danger" onclick="this.parentElement.remove()">Delete Content</button>
                                </div>
                            @endforeach
                        </div>
                        <button type="button" class="btn btn-primary mt-3" onclick="addContent()">Add Content</button>
                    </div>

                </div>

                <div class="col-12 text-center mt-4">
                    <button type="submit" class="btn btn-success">Update Article</button>
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
