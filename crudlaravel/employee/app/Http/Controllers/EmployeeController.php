<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Department;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function show(Request $request){
          $searchemployee = $request->search;

           $employees = Employee::where(function ($query) use ($searchemployee) {
            $query->where('name', 'like', '%' . $searchemployee . '%');
        })->paginate(5);
         $employeecount = Employee::count();
        $departmentcount = Department::count();
        $minsalary = Employee::min('salary');
        $maxsalary = Employee::max('salary');
        $sumsalary = Employee::sum('salary');
        return view('employee.index', compact('employees','employeecount','departmentcount','minsalary','maxsalary','sumsalary'));
    }
    public function index()
    {
        $employees = Employee::paginate(5);
        $employeecount = Employee::count();
        $departmentcount = Department::count();
        $minsalary = Employee::min('salary');
        $maxsalary = Employee::max('salary');
        $sumsalary = Employee::sum('salary');
        return view('employee.index',compact('employees','employeecount','departmentcount','minsalary','maxsalary','sumsalary'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'=>'required',
            'salary'=>'required',
            'dep_id'=>'required',
        ]);
        Employee::create($data);
        return redirect()->route('employee.index');

    }

    /**
     * Display the specified resource.
     */
    // public function show(Employee $employee)
    // {
    //     return view('employee.show',compact('employee'));
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        return view('employee.edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
         $data = $request->validate([
            'name'=>'required',
           ]);
           $employee-> update($data);
           return redirect()->route('employee.index')->with('success','Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
         $employee->delete();
        return redirect()->route('employee.index')->with('success','Deleted Successfully');
    }

}
