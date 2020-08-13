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
     
            
          <div class="progress-container">
            <span class="progress-badge">Status</span>
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 35%;">
                <span class="progress-value" style="background-color: #72722e;">To Ship</span>
              </div>
            </div>
          </div>
         
          <div class="progress-container progress-warning">
            <span class="progress-badge">Staus</span>
            <div class="progress">
              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                <span class="progress-value" style="background-color: #5e65bd;">To Receive</span>
              </div>
            </div>
          </div>

          <div class="progress-container progress-success">
            <span class="progress-badge">Status</span>
            <div class="progress">
              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                <span class="progress-value" style="background-color: #076b39;">To Pay</span>
              </div>
            </div>
          </div>

          


        </div>
      </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </form>
   
</div>
@endsection

@section('scripts')

@endsection

