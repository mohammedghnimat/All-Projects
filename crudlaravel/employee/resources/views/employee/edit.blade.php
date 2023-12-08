<!-- resources/views/employee/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Edit Employee</h1>

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

    <form action="{{ route('employee.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $employee->name }}" required>
        </div>
        <div class="form-group">
            <label for="salary">Salary</label>
            <input type="text" name="salary" class="form-control" value="{{ $employee->salary }}" required>
        </div>
        <div class="form-group">
            <label for="dep_id">Department ID</label>
            <input type="text" name="dep_id" class="form-control" value="{{ $employee->dep_id }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    <a href="{{ route('employee.show', $employee->id) }}" class="btn btn-secondary">Cancel</a>
@endsection
