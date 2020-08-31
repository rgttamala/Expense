<?php

namespace App\Http\Controllers;

use App\Cargo;
use App\CargoRates;
use App\Employee;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class CargoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $cargos = DB::table('cargos')
        ->join('cargo_rates', 'cargos.cargorate_id', '=', 'cargo_rates.id')
        ->get();     

        $helpers = DB::table('cargos')
        ->join('cargo_rates', 'cargos.cargorate_id', '=', 'cargo_rates.id')
        ->join('employees', 'cargos.employeeHelper_id', '=', 'employees.id')
        ->select('employees.*')
        ->get();
       
          

        $drivers = DB::table('cargos')
        ->join('employees', 'cargos.employeeDriver_id', '=', 'employees.id')
        ->select('employees.*')
        ->get(); 
       
     
        return view('cargos.index')
        ->with('cargos', $cargos)
        ->with('drivers', $drivers)
        ->with('helpers', $helpers);
    }

    public function editCargo(Request $request, $id)
    {
        $cargos = Cargo::findOrFail($id);
        $helpers = Employee::all()->pluck('full_name', 'id');
        $drivers = Employee::all()->pluck('full_name', 'id');
        $cargorates = CargoRates::all()->pluck('full_name','id');

        return view('cargos.status')
        ->with('cargos', $cargos)
        ->with('cargorates', $cargorates)
        ->with('drivers', $drivers)
        ->with('helpers', $drivers);

    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function addtransaction(){

        $cargorates = DB::table('cargo_rates')
        ->groupBy('origin')
        ->get();

      
        $drivers = DB::table('employees')
        ->join('employeerates', 'employees.JobRates_id', '=', 'employeerates.id')
        ->select('employees.*','employeerates.JobDescription')
        ->where('JobDescription', '=', 'Driver')
        ->get();    

        $helpers = DB::table('employees')
        ->join('employeerates', 'employees.JobRates_id', '=', 'employeerates.id')
        ->select('employees.*','employeerates.JobDescription')
        ->where('JobDescription', '=', 'Helper')
        ->get();    
        
       
        
        return view('cargos.create')
        ->with('cargorates', $cargorates)
        ->with('drivers', $drivers)
        ->with('helpers', $helpers);
    


    }

    /**function fetch(Request $request)
    {
     $select = $request->get('select');
     $value = $request->get('value');
     $dependent = $request->get('dependent');
     $data = DB::table('cargo_rates')
       ->where($select, $value)
       ->groupBy($dependent)
       ->get();
     $output = '<option value="">Select '.ucfirst($dependent).'</option>';
     foreach($data as $row)
     {
      $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
     }
     echo $output;
    }
   

   
    
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $cargo = new Cargo();
        $cargo->cargorate_id = $request->input('cargorate');
        $cargo->employeeHelper_id = $request->input('helper');
        $cargo->employeeDriver_id = $request->input('driver');
        $cargo->platenumber = $request->input('pnumber');
        $cargo->traveldate = $request->input('traveldate');
        $cargo->allowance = $request->input('allowance');
        $cargo->status = $request->input('status');
        $cargo->save();
        $Cargpoid = $cargo->id;
        return redirect('/cargo')->with('success', 'Cargo Transaction Modified Sucessfully!');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function show(Cargo $cargo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function edit(Cargo $cargo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        return 'hi';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cargo $cargo)
    {
        //
    }

   
    
}