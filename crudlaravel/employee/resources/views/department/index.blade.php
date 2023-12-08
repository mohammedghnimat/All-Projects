<!-- resources/views/department/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Department List</h1>

    <!-- Display success message if any -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($departments as $department)
                <tr>
                    <td>{{ $department->name }}</td>
                    <td>
                        <a href="{{ route('department.show', $department->id) }}" class="btn btn-info">Show</a>
                        <a href="{{ route('department.edit', $department->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('department.destroy', $department->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('department.create') }}" class="btn btn-success">Add Department</a>
@endsection
