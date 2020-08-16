@extends('layouts.master')

@section('title')
    Cargo - Status
@endsection
@section('content')



<form method="POST" action="#">
  @csrf

    <div class="card-footer text-left">

      <div class="card">
        <div class="card-header">
          <h5 class="title">Cargo Status</h5>
        </div>
        <div class="card-body">
     
            
        @if($cargos->status == 'To Ship')
          <div class="progress-container">
            <span class="progress-badge">Status</span>
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 35%;">
                <span class="progress-value" style="background-color: #72722e;">To Ship</span>
              </div>
            </div>
          </div>

          @elseif($cargos->status == 'To Receive')
          <div class="progress-container progress-warning">
            <span class="progress-badge">Staus</span>
            <div class="progress">
              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                <span class="progress-value" style="background-color: #5e65bd;">To Receive</span>
              </div>
            </div>
          </div>

          @elseif($cargos->status == 'To Pay')
          <div class="progress-container progress-success">
            <span class="progress-badge">Status</span>
            <div class="progress">
              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                <span class="progress-value" style="background-color: #076b39;">To Pay</span>
              </div>
            </div>
          </div>
    @endif
            <hr>
            <br>
            <form method="POST" action="{{ route('cargo.update',$cargos->id) }}">
              @csrf

              <label> Cargo Rate</label>
              <select class="form-control select2-hidden-accessible" name="cargorates" required>
                @foreach($cargorates as $id => $cargorate)
                    <option value="{{ $id }}" @if($id === $cargos['cargorate_id']) selected @endif >{{ $cargorate }}</option>
                @endforeach
            </select>

            <label> Driver</label>
            <select class="form-control select2-hidden-accessible" name="cargorates" required>
              @foreach($drivers as $id => $drivers)
                  <option value="{{ $id }}" @if($id === $cargos['employeeDriver_id']) selected @endif >{{ $drivers }}</option>
              @endforeach
          </select>

          <label> Helper</label>
            <select class="form-control select2-hidden-accessible" name="cargorates" required>
              @foreach($helpers as $id => $helpers)
                  <option value="{{ $id }}" @if($id === $cargos['employeeHelper_id']) selected @endif >{{ $helpers }}</option>
              @endforeach
          </select>

          <label> Plate Number</label>
           <input type="text" class="form-control" name="platenumber" value="{{ $cargos->platenumber }}" required>

           <label> Allowance</label>
           <input type="text" class="form-control" name="allowance" value="{{ $cargos->allowance }}" required>

      <label> Status</label>
      <select id="inputState" class="form-control" name="status" value="{{ $cargos->status }}" required>
        @if($cargos->status == 'To Ship')
        <option>To Pay</option>
        <option selected>To Ship</option>
        <option>To Receive</option>
        @elseif($cargos->status == 'To Pay')
        <option selected>To Pay</option>
        <option>To Ship</option>
        <option>To Receive</option>
        @elseif($cargos->status == 'To Receive')
        <option>To Ship</option>
        <option>To Receive</option>
        <option selected>To Receive</option>
        @endif
      </select>
   
                <!-- input with datetimepicker -->
              {{ method_field('PUT') }}
              <button type="submit" class="btn btn-primary">Save</button>
            </form>



     
    </div>
  </form>
   
</div>
@endsection

@section('scripts')

@endsection

