@extends('layouts.master')

@section('title')
    Edit Job Position and Salary
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
        <h4 class="card-title">Edit Job Information</h4>

        <form method="POST" action="{{ route('jobposition.update', $jobrates->id) }}">
            @csrf
           
            <div class="form-row">
              <div class="col col-4">
                <label class="label-control">Job Description</label>
                <input type="text" class="form-control" placeholder="Driver, Helper, Secretary" name="jobdesc" value="{{ $jobrates->JobDescription }}" required>
              </div>
  
              <div class="col col-4">
                  <label class="label-control">Rate</label>
                  <input type="text" class="form-control" placeholder="250, 200, 500" name="rate" value="{{ $jobrates->Rate }}" required>
                </div>
  
                <div class="col col-4">
                  <label class="label-control">Frequency</label>
                  <input type="text" class="form-control" placeholder="Monthly, Weekly, Daily" name="freq" value="{{ $jobrates->Frequency }}" required>
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