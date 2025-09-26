@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Teaching Courses</h1>
    <a href="{{ route('teachings.create') }}" class="btn btn-success mb-3">Add Course</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif



    <h1>Add Course</h1>
    <form action="{{ route('teachings.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Level</label>
            <input type="text" name="level" class="form-control" placeholder="e.g. 2000 Level">
        </div>
        <div class="mb-3">
            <label>Course Name</label>
            <input type="text" name="course_name" class="form-control" placeholder="e.g. Fish Biology">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('teachings.index') }}" class="btn btn-secondary">Cancel</a>
    </form>



    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Level</th>
                <th>Course Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teachings as $item)
                <tr>
                    <td>{{ $item->level }}</td>
                    <td>{{ $item->course_name }}</td>
                    <td>
                        <form action="{{ route('teachings.destroy',$item->id) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
