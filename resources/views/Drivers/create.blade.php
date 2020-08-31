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
        <h4 class="card-title">Driver Information</h4>

        <form method="POST" action="{{ route('driver.store') }}">
          @csrf
          <div class="form-row">
            <div class="col col-4">
              <label class="label-control">Full Name</label>
              <input type="text" class="form-control" placeholder="First name" name="name" required>
            </div>

            <div class="col col-4">
                <label class="label-control">SSS</label>
                <input type="text" class="form-control" placeholder="" name="sss" required>
              </div>

              <div class="col col-4">
                <label class="label-control">Philhealth</label>
                <input type="text" class="form-control" placeholder="" name="phealth" required>
              </div>
           
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