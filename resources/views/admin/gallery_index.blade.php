@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Gallery</h1>
    <a href="{{ route('gallery.create') }}" class="btn btn-success mb-3">Upload Images</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row">
        @foreach($images as $image)
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="{{ asset('storage/' . $image->image_path) }}" class="card-img-top" style="height:200px; object-fit:cover;">
                    <div class="card-footer text-center">
                        <form action="{{ route('gallery.destroy',$image->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

      <h1>Upload Images</h1>
    <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="images" class="form-label">Select Images</label>
            <input type="file" name="images[]" id="images" class="form-control" multiple required>
        </div>
        <button type="submit" class="btn btn-primary">Upload</button>
        <a href="{{ route('gallery.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
