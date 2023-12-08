<!-- resources/views/department/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Department Details</h1>

    <table class="table">
        <tr>
            <th>Name</th>
            <td>{{ $department->name }}</td>
        </tr>
    </table>

    <a href="{{ route('department.edit', $department->id) }}" class="btn btn-primary">Edit</a>
    <form action="{{ route('department.destroy', $department->id) }}" method="POST" style="display:inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="{{ route('department.index') }}" class="btn btn-secondary">Back</a>
@endsection
