<?php

namespace App\Http\Controllers;
use App\EmployeeRates;
use Illuminate\Http\Request;

class EmployeeratesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employeerates = EmployeeRates::all();
        return view('employees.jobposition')->with('emprates', $employeerates);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jobrates = new EmployeeRates();
        $jobrates->JobDescription = $request->input('jobdesc');
        $jobrates->Rate = $request->input('rate');
        $jobrates->Frequency = $request->input('freq');
        $jobrates->sss = $request->input('sss');
        $jobrates->pagibig = $request->input('pagibig');
        $jobrates->save();
        $jobratesId = $jobrates->id;
        return redirect('/jobposition/create')->with('success', 'Job Description and Salary Modified!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
     public function editJobdescription(Request $request, $id){

        $jobrates = EmployeeRates::findOrFail($id);
        return view('employees.editjob')->with('jobrates',   $jobrates);

     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      
        $jobdesc = EmployeeRates::findOrFail($id);
        $jobdesc->JobDescription = $request->input('jobdesc');
        $jobdesc->Rate = $request->input('rate');
        $jobdesc->Frequency = $request->input('freq');
        $jobdesc->update();
        $jobdescId = $jobdesc->id;
        return redirect('/jobposition/create')->with('success', 'Job Description Updated Sucessfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmployeeRates $employeerates)
    {
        $employeerates->delete();
        return redirect('/jobposition/create')->with('error', 'Job Description Deleted');
    }
}
