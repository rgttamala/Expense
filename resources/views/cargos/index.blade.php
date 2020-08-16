@extends('layouts.master')

@section('title')
    Cargos
@endsection

@section('content')

<div class="col-md-12">
  <a href="/cargo-transaction" style="text-decoration: none !important">
    <button type="button" class="btn btn-block btn-primary col-2">Add Cargo Transaction</button>
</a> 

  <div class="card">
    <div class="card-header">
      <h4 class="card-title"> Cargo Transaction</h4>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table">
          <thead class=" text-primary">
            <th>
              Origin
            </th>
            <th>
              Destination
            </th>
            <th>
              Route
            </th>
            <th>
              Truck Type
            </th>
            <th>
              Cargo
            </th>
            <th>
              Rate
            </th>
            <th>
              Plate No.
            </th>
            <th>
              Allowance
            </th>
            <th>
              Helper
            </th>
           
            <th>
              Driver
            </th>
            
            
            <th class="text-right"></th>
          </thead>
          <tbody>
            @foreach ($cargos as $cargo)
            <tr>  
            <td>{{$cargo->origin}}</td>
            <td>{{$cargo->destination}}</td>
            <td>{{$cargo->route}}</td>
            <td>{{$cargo->trucktype}}</td>
            <td>{{$cargo->cargoname}}</td>
            <td>₱ {{$cargo->rate}}</td>
            <td>{{$cargo->platenumber}}</td>
            <td>{{$cargo->allowance}}</td>

            @foreach ($helpers->slice(0, 1) as $helper)
            <td>{{$helper->FirstName}} {{$helper->LastName}}</td>
            @endforeach

            @foreach ($drivers->slice(0, 1) as $driver)
            <td>{{$driver->FirstName}} {{$driver->LastName}}</td>
            @endforeach
            <td></td>
        
            
            <td></td>
              
              
                <td class="td-actions text-right">
                  
                  <a href="/cargo-status/{{ $cargo->id }}" >
                    <button type="button" rel="tooltip" class="btn btn-warning">
                      <i class="now-ui-icons ui-2_settings-90"> <strong>{{$cargo->status}}</strong></i>
                  </button>
                </a>
                </td>
            </tr>
          
            @endforeach
        
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script src="../assets/js/main.js"></script>
@endsection