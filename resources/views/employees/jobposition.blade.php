@extends('layouts.master')

@section('title')
    Job Position and Salary
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
        <h4 class="card-title">Add Job Information</h4>

        <form method="POST" action="{{ route('jobposition.store') }}">
          @csrf
         
          <div class="form-row">
            <div class="col col-4">
              <label class="label-control">Job Description</label>
              <input type="text" class="form-control" placeholder="Driver, Helper, Secretary" name="jobdesc" required>
            </div>

            <div class="col col-4">
                <label class="label-control">Rate</label>
                <input type="text" class="form-control" placeholder="250, 200, 500" name="rate" required>
              </div>

              <div class="col col-4">
                <label class="label-control">Frequency</label>
                <select id="inputState" class="form-control" name="freq" required>      
                    <option> Every 15 Days</option>
                    <option>Weekly</option>
                    <option>Monthly</option>
                  </select>
              </div>
              <br><br>
              <br>
              <div class="col col-4">
                <label class="label-control">SSS</label>
                <input type="text" class="form-control" name="sss" required>
              </div>

              <div class="col col-4">
                <label class="label-control">Pag-ibig</label>
                <input type="text" class="form-control" name="pagibig" required>
              </div>
          </div>

          <button type="submit" class="btn btn-primary">Save</button>
        </form>

  </div>
</div>
    </div>
  </div>

  <hr>
  <h4 class="card-title">Job Information List</h4>
  <hr>

  <table class="table">
    <thead>
        <tr>
           
           
            <th>Job Description</th>
            <th>Rate</th>
            <th>Frequency</th>
            <th>SSS</th>
            <th>Pagibig</th>
            <th class="text-right">Action</th>
        </tr>
    </thead>
    <tbody> 
        @foreach ($emprates as $item)
            
       
        <tr>
           
        <td>{{ $item->JobDescription }}</td>
        <td>₱ {{ $item->Rate }}</td>
        <td>{{ $item->Frequency }}</td>
        <td>₱ {{ $item->sss }}</td>
        <td>₱ {{ $item->pagibig }}</td>
       
          
            <td class="td-actions text-right">
                <a href="/jobdescription-edit/{{ $item->id }}" >
                  <button type="button" rel="tooltip" class="btn btn-success">
                    <i class="now-ui-icons ui-2_settings-90"> Edit</i>
                </button>
              </a>

              </button>
              
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection

@section('scripts')
 
@endsection