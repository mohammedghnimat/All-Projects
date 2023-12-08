{{--  <!-- resources/views/statistics/index.blade.php -->

@extends('layouts.app')

@section('content')
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <!-- ... your navigation content ... -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('statistics.index') }}">Statistics</a>
                </li>
                <!-- ... your other navigation items ... -->
            </ul>
        </div>
    </nav>
    <h1>Statistics</h1>

    <ul>
        <li>Number of Employees: {{ $employeeCount }}</li>
        <li>Number of Departments: {{ $departmentCount }}</li>
        <li>Minimum Salary: {{ $minsalary }}</li>
        <li>Maximum Salary: {{ $maxsalary }}</li>
        <li>Sumation Salary: {{ $sumsalary }}</li>
    </ul>
@endsection  --}}
