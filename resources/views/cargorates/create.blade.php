@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
      </div>
    </div>
    <div class="col-md-12">
     <hr>
     <div class="card">
      <div class="card-body">
        <h4 class="card-title">Cargo Information</h4>

        <form method="POST" action="{{ route('cargorates.store') }}">
          @csrf
          <div class="form-row">
            <div class="col col-6">
              <label class="label-control">Origin</label>
              <input type="text" class="form-control" name="origin" required>
            </div>
            <div class="col col-6">
              <label class="label-control">Destination</label>
              <input type="text" class="form-control" name="dest" required>
            </div>
            <div class="col col-6">
              <label class="label-control">Route</label>
              <input type="text" class="form-control" name="route" required>
            </div>

            <div class="col col-6">
                <label class="label-control">Truck Type</label>
                <input type="text" class="form-control" name="trucktype" required>
              </div>

            

          </div>
          <br>
          <div class="form-group col-4">
            <label for="inputAddress">Cargo Name</label>
            <input type="text" class="form-control" id="inputAddress" name="cargoname" required>
          </div>

          <br>
          <div class="form-group col-4">
            <label for="inputAddress">Rate</label>
            <input type="number" class="form-control" id="inputAddress" name="rate" required>
          </div>
         
          <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" value="">
                Please check if truck is owned by the company
                <span class="form-check-sign">
                    <span class="check"></span>
                </span>
            </label>
        </div>
        
          



  
          <button type="submit" class="btn btn-primary">Save</button>
        </form>

  </div>
</div>
    </div>
  </div>
@endsection

@section('scripts')
 
@endsection