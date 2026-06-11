<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return Employee::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'department' => 'required'
        ]);

        return Employee::create($request->all());
    }

    public function show($id)
    {
        return Employee::findOrFail($id);
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'department' => 'required'
        ]);
        $employee = Employee::findOrFail($id);
        $employee->update($request->all());

        return $employee;
    }

    public function destroy($id)
    {
        Employee::destroy($id);

        return response()->json([
            'message' => 'Deleted Successfully'
        ]);
    }
}