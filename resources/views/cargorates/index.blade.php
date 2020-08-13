@extends('layouts.master')

@section('title')
    Cargo-Rates
@endsection

@section('content')

  
<div class="col-md-12">
    <a href="{{route('cargorates.create')}}" style="text-decoration: none !important">
        <button type="button" class="btn btn-block btn-primary col-2">Add Cargo Rates</button>
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
              <th class="text-right"></th>
            </thead>
            <tbody>
                @foreach ($cargorates as $cargorate)
            
       
                <tr>
                
                <td>{{$cargorate->origin}}</td>
                <td>{{$cargorate->destination}}</td>   
                <td>{{$cargorate->route}}</td>
                <td>{{$cargorate->trucktype}}</td>
                <td>{{$cargorate->cargoname}}</td>
                <td>PHP {{$cargorate->rate}}</td>
                
                    <td class="td-actions text-right">
        
                          <a href="/cargorates-edit/{{ $cargorate->id }}" >
                            <button type="button" rel="tooltip" class="btn btn-success">
                                <i class="now-ui-icons ui-2_settings-90"> Edit</i>
                            </button>
                            </a>
                    
                            <td>
                              <form action="{{ route('cargorates.destroy',$cargorate->id) }}"
                                  method="post">
                                  @csrf
                                  @method('DELETE')
                                  <input type="submit" value="Delete" class="btn btn-danger">
                              </form>
                          </td>
                        
                    </i>
                       
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