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
        <h4 class="card-title">Edit Employee Information</h4>

        <form method="POST" action="{{ route('employee.update',$employees->id) }}">
            @csrf

          <div class="form-row">
            <div class="col col-4">
              <label class="label-control">First Name</label>
              <input type="text" class="form-control" placeholder="First name" name="fname" value="{{ $employees->FirstName }}" required>
            </div>
            <div class="col col-4">
              <label class="label-control">Middle Name</label>
              <input type="text" class="form-control" placeholder="Middle name" name="mname" value="{{ $employees->MiddleName }}" required>
            </div>
            <div class="col col-4">
              <label class="label-control">Last Name</label>
              <input type="text" class="form-control" placeholder="Last name" name="lname" value="{{ $employees->LastName }}" required>
            </div>

          </div>
          <br>
          <div class="form-group">
            <label for="inputAddress">Home Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Hometown Address" name="haddress" value="{{ $employees->HomeAddress }}" required>
          </div>
          <div class="form-group">
            <label for="inputAddress2">Current Address </label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Where he/she lives now?" name="caddress" value="{{ $employees->CurrentAddress }}" required>
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="inputCity">Contact Number</label>
              <input type="text" class="form-control" id="inputCity" name="number" value="{{ $employees->ContactNumber }}" required>
            </div>

            <div class="form-group col-md-4">
              <label for="inputState">Gender</label>
              <select id="inputState" class="form-control" name="gender" value="{{ $employees->Gender }}" required>
                <option selected>Male</option>
                <option>Female</option>
              </select>
            </div>
           
            <!-- input with datetimepicker -->
            <div class="form-group col-md-4">
              <div class="form-group">
                <label class="label-control">Birth Date</label>
                <input type="date" id="datetimepicker" class="form-control datetimepicker" name="bdate" value="{{ $employees->BirthDate }}" required>
              </div>
            </div>

            <div class="form-group col-md-4">
              <div class="form-group">
                <label class="label-control">Date Employed</label>
                <input type="date" id="datetimepicker" class="form-control datetimepicker" name="DateEmployed" value="{{ $employees->DateEmployed }}" required>
              </div>
            </div>
            
            <div class="form-group col-md-4">
              <label for="inputState">Job Position</label>
             
              <select class="form-control select2-hidden-accessible" name="jobposition" required>
                @foreach($jobdescription as $id => $jobdesc)
                    <option value="{{ $id }}" @if($id === $employees['JobRates_id']) selected @endif >{{ $jobdesc }}</option>
                @endforeach
            </select>
              
            </div>
          </div>
          {{ method_field('PUT') }}
          <button type="submit" class="btn btn-primary">Save</button>
        </form>

  </div>
</div>
    </div>
  </div>
@endsection

@section('scripts')
 
@endsection