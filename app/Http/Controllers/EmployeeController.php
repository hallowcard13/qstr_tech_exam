<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Models\Employee;
use App\Models\Factory;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('employees', ['employees' => Employee::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("emplyeeAdd", ["factories" => Factory::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployeeRequest $request)
    {
        $employee = new Employee;
        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->factory_id = $request->factory_id;
        $employee->phone = $request->phone;
        $employee->email = $request->email;
        $employee->save();
        return redirect()->route('employees.create')->with('status', 'Employee has been added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        return view('employeeEdit', ['employee' => $employee, 'factories' => Factory::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->factory_id = $request->factory_id;
        $employee->phone = $request->phone;
        $employee->email = $request->email;
        $employee->save();
        return redirect()->route('employees.edit', ['employee' => $employee->id])->with('status', 'Employee has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
