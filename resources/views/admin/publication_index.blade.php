@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class="mb-4">Publications</h1>

    {{-- Success Message --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Add New Publication --}}
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">Add Publication</div>
        <div class="card-body">
            <form action="{{ route('Apublications.store') }}" method="POST">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label class="form-label">Category</label>
                        <select name="category" class="form-control" required>
                            <option value="">-- Select --</option>
                            <option value="Journal Publication">Journal Publication</option>
                            <option value="Abstracts & Symposium Proceedings">Abstracts & Symposium Proceedings</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Authors</label>
                        <input type="text" name="authors" class="form-control" required placeholder="e.g. Sudasinghe, H., Ranasinghe, T.">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Year</label>
                        <input type="text" name="year" class="form-control" required placeholder="2024">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <textarea name="title" class="form-control" rows="2" required></textarea>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <label class="form-label">Journal</label>
                        <input type="text" name="journal" class="form-control" placeholder="Journal of Fish Biology">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Volume/Issue</label>
                        <input type="text" name="volume_issue" class="form-control" placeholder="105, 140-157">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">DOI / Link</label>
                        <input type="text" name="doi_link" class="form-control" placeholder="https://doi.org/...">
                    </div>
                </div>

                <button type="submit" class="btn btn-success">Add Publication</button>
            </form>
        </div>
    </div>

    {{-- Publication List --}}
    <div class="card">
        <div class="card-header bg-dark text-white">Publication List</div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead class="table-light">
                    <tr>
                        <th>Category</th>
                        <th>Authors</th>
                        <th>Year</th>
                        <th>Title</th>
                        <th>Journal</th>
                        <th>Volume/Issue</th>
                        <th>DOI / Link</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($publications as $publication)
                        <tr>
                            <td>{{ $publication->category }}</td>
                            <td>{{ $publication->authors }}</td>
                            <td>{{ $publication->year }}</td>
                            <td>{{ $publication->title }}</td>
                            <td>{{ $publication->journal }}</td>
                            <td>{{ $publication->volume_issue }}</td>
                            <td>
                                @if($publication->doi_link)
                                    <a href="{{ $publication->doi_link }}" target="_blank">Link</a>
                                @endif
                            </td>
                            <td>
                                <form action="{{ route('Apublications.destroy', $publication->id) }}" method="POST" style="display:inline;">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure you want to delete this publication?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="8" class="text-center">No publications found.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
