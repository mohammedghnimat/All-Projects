<!-- resources/views/department/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Edit Department</h1>

    <!-- Display validation errors if any -->
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('department.update', $department->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $department->name }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    <a href="{{ route('department.show', $department->id) }}" class="btn btn-secondary">Cancel</a>
@endsection
