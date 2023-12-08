<!-- resources/views/employee/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Create Employee</h1>

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

    <form action="{{ route('employee.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="salary">Salary</label>
            <input type="text" name="salary" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="dep_id">Department ID</label>
            <input type="text" name="dep_id" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
