<!-- resources/views/employee/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Employee Details</h1>

    <table class="table">
        <tr>
            <th>Name</th>
            <td>{{ $employee->name }}</td>
        </tr>
        <tr>
            <th>Salary</th>
            <td>{{ $employee->salary }}</td>
        </tr>
        <tr>
            <th>Department ID</th>
            <td>{{ $employee->dep_id }}</td>
        </tr>
    </table>

    <a href="{{ route('employee.edit', $employee->id) }}" class="btn btn-primary">Edit</a>
    <form action="{{ route('employee.destroy', $employee->id) }}" method="POST" style="display:inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="{{ route('employee.index') }}" class="btn btn-secondary">Back</a>
@endsection
