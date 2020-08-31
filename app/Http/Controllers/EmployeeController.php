<?php

namespace App\Http\Controllers;

use App\Employee;
use App\EmployeeRates;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $insurance = 0.02;

        $employees = DB::table('employees')
        ->join('employeerates', 'employees.JobRates_id', '=', 'employeerates.id')
        ->select('employees.*','employeerates.*')->get();     
        return view('employees.index')
        ->with('employees', $employees)
        ->with('insurance', $insurance);
    }

    /**
     * Show the form for creating a neew resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jobdescription = EmployeeRates::all();
        return view('employees.create')->with('jobdescription', $jobdescription);

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $employee = new Employee();
        $employee->JobRates_id = $request->input('jobposition');
        $employee->FirstName = $request->input('fname');
        $employee->MiddleName = $request->input('mname');
        $employee->LastName = $request->input('lname');
        $employee->HomeAddress = $request->input('haddress');
        $employee->CurrentAddress = $request->input('caddress');
        $employee->Gender = $request->input('gender');
        $employee->ContactNumber = $request->input('number');
        $employee->BirthDate = $request->input('bdate');
        $employeeage = $request->input('bdate');
        $CurrentAge = Carbon::parse($employeeage)->age;
        $employee->Age = $CurrentAge;
        $employee->DateEmployed = $request->input('DateEmployed');
        $employee->save();
        $Employeeid = $employee->id;
        return redirect('/employee')->with('success', 'Employee Added Sucessfully!');
      
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function editEmployee(Request $request, $id){

        $employees = Employee::findOrFail($id);
        $jobdescription = EmployeeRates::all()->pluck('JobDescription', 'id');
        return view('employees.edit')->with('employees', $employees)->with('jobdescription', $jobdescription);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->JobRates_id = $request->input('jobposition');
        $employee->FirstName = $request->input('fname');
        $employee->MiddleName = $request->input('mname');
        $employee->LastName = $request->input('lname');
        $employee->HomeAddress = $request->input('haddress');
        $employee->CurrentAddress = $request->input('caddress');
        $employee->Gender = $request->input('gender');
        $employee->ContactNumber = $request->input('number');
        $employee->BirthDate = $request->input('bdate');
        $employeeage = $request->input('bdate');
        $CurrentAge = Carbon::parse($employeeage)->age;
        $employee->Age = $CurrentAge;
        $employee->DateEmployed = $request->input('DateEmployed');
        $employee->update();
        $Employeeid = $employee->id;
        return redirect('/employee')->with('success', 'Employee Updated Sucessfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    


}
