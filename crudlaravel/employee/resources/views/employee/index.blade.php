<!-- resources/views/employee/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Employee List</h1>

    <form action="{{ route('employee.search') }}" method="GET">
        @csrf
        <label for="search">Search:</label>
        <input type="text" id="search" name="search" placeholder="Search employees...">
        <button type="submit">Search</button>
    </form>

    <!-- Display success message if any -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <a href="{{ route('employee.create') }}" class="btn btn-success">Add Employee</a>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="square">
                <h2>Number of Employees</h2>
                <p>{{ $employeecount}}</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="square">
                <h2>Number of Departments</h2>
                <p>{{ $departmentcount }}</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="square">
                <h2>Minimum Salary</h2>
                <p>{{ $minsalary }}</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="square">
                <h2>Maximum Salary</h2>
                <p>{{ $maxsalary }}</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="square">
                <h2>Sum of Salaries</h2>
                <p>{{ $sumsalary }}</p>
            </div>
        </div>
    </div>
</div>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Salary</th>
                <th>Department ID</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
                <tr>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->salary }}</td>
                    <td>{{ $employee->dep_id }}</td>
                    <td>
                        {{--  <a href="{{ route('employee.show', $employee->id) }}" class="btn btn-info">Show</a>  --}}
                        <a href="{{ route('employee.edit', $employee->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('employee.destroy', $employee->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>

            @endforeach
        </tbody>
    </table>
                         {{ $employees->links() }}

@endsection
