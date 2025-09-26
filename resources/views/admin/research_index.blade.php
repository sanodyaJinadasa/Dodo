@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    <h4 class="mb-0">➕ Add New Research Grant</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('Aresearches.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="year" class="form-label">Year</label>
                            <input type="text" name="year" class="form-control" value="{{ old('year') }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="organization" class="form-label">Organization</label>
                            <input type="text" name="organization" class="form-control" value="{{ old('organization') }}" required>
                        </div>
                        <button type="submit" class="btn btn-success">Save</button>
                        <a href="{{ route('Aresearches.index') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


{{--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-warning text-dark">
                    <h4 class="mb-0">✏️ Edit Research Grant</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('Aresearches.update', $research->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="year" class="form-label">Year</label>
                            <input type="text" name="year" class="form-control" value="{{ old('year', $research->year) }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" value="{{ old('title', $research->title) }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="organization" class="form-label">Organization</label>
                            <input type="text" name="organization" class="form-control" value="{{ old('organization', $research->organization) }}" required>
                        </div>
                        <button type="submit" class="btn btn-warning">Update</button>
                        <a href="{{ route('Aresearches.index') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 --}}



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-info text-white">
                    <h4 class="mb-0">📖 Research Grant Details</h4>
                </div>
                @foreach ($research as $item)
                    <div class="card-body">
                        <p><strong>Year:</strong> {{ $item->year }}</p>
                        <p><strong>Title:</strong> {{ $item->title }}</p>
                    <p><strong>Organization:</strong> {{ $item->organization }}</p>
                </div>
                <div class="card-footer">
                    <form action="{{ route('Aresearches.destroy', $item->id) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
