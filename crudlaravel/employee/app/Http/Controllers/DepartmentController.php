<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Department::all();
        return view('department.index',compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('department.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'=>'required',
        ]);
        Department::create($data);
        return redirect()->route('department.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Department $department)
    {
        return view('department.show',compact('departmant'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Department $department)
    {
         return view('department.edit',compact('department'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Department $department)
    {
           $data = $request->validate([
            'name'=>'required',
           ]);
           $department -> update($data);
           return redirect()->route('department.index')->with('success','Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department)
    {
        $department->delete();
        return redirect()->route('department.index')->with('success','Deleted Successfully');
    }

}
