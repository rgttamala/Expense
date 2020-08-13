@extends('layouts.master')

@section('title')
    Employee
@endsection

@section('content')

<div class="col-md-12">
  <a href="{{route('employee.create')}}" style="text-decoration: none !important">
    <button type="button" class="btn btn-block btn-primary col-2">Add Employee</button>
</a> 



  <div class="card">
    <div class="card-header">
      <h4 class="card-title"> Cargo Transaction </h4>
      <a href="{{route('jobposition.create')}}" >
        <button type="button" rel="tooltip" class="btn btn-default">
            <i class="now-ui-icons ui-1_settings-gear-63"> Job Position and Salary</i>
        </button>
        </a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table">
          <thead class=" text-primary">
            <th>
              Full Name
            </th>
            <th>
              Position
            </th>
            <th>
              Date Employed
            </th>
            <th>
              Age
            </th>
            
            <th class="text-right"></th>
          </thead>
          <tbody>
            @foreach ($employees as $employee)
                      
                 
            <tr>
            <td>{{$employee->FirstName}} {{$employee->LastName}}</td>
            <td>{{$employee->JobDescription}}</td>   
            <td>{{ \Carbon\Carbon::parse($employee->DateEmployed)->format('M, j, Y')}}</td>
            <td>{{$employee->Age}} Years old</td>
                <td class="td-actions text-right">
                    <button type="button" rel="tooltip" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
                        <i class="now-ui-icons users_single-02">View</i>
                    </button>

                      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Employee Details</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body" style="text-align: left !important">
                              <table id="classTable" class="table table-bordered">
                              
                                <tbody class="col-md-2">
                                  <tr>
                                 
                                    <td>Full Name:</td>
                                    <td>{{ $employee->LastName }}, {{ $employee->FirstName }}, {{ $employee->MiddleName }}</td>
                                  </tr>

                                  <tr>
                                    <td>Job Position</td>
                                    <td>{{ $employee->JobDescription }}</td>
                                  </tr>

                                  <tr>
                                    <td>Job Position</td>
                                    <td>{{ $employee->ContactNumber }}</td>
                                  </tr>

                                  <tr>
                                    <td>Home Address</td>
                                    <td>{{ $employee->HomeAddress }}</td>
                                  </tr>

                                  <tr>
                                    <td>Current Address</td>
                                    <td>{{ $employee->CurrentAddress }}</td>
                                  </tr>

                                  <tr>
                                    <td>Gender</td>
                                    <td>{{ $employee->Gender }}</td>
                                  </tr>

                                  <tr>
                                    <td>BirthDate</td>
                                    <td>{{ \Carbon\Carbon::parse($employee->BirthDate)->format('M, j, Y')}}</td>
                                  </tr>

                                  <tr>
                                    <td>Age</td>
                                    <td>{{ $employee->Age }}</td>
                                  </tr>

                                  <tr>
                                    <td>Date Employed</td>
                                    <td>{{ \Carbon\Carbon::parse($employee->DateEmployed)->format('M, j, Y')}}</td>
                                  </tr>
                                  <br>

                                </tbody>

                                <tbody class="col-md-2">
                                  <tr style="background-color: lightgray">
                                    <td>SSS</td>
                                    <td><em>₱ {{ $employee->sss }}</em></td>
                                  </tr>

                                  <tr style="background-color: lightgray">
                                    <td>Philhealth</td>
                                    <td><em>₱ {{ $employee->pagibig }}</em></td>
                                  </tr>

                                  <tr style="background-color: lightgray">
                                    <td>Insurance</td>
                                    <td><em>{{$insurance * 100}}%</em></td>
                                  </tr>

                                  <tr style="background-color: lightgray">
                                    <td>Salary</td>
                                    <td><strong>₱ 100</strong></td>
                                  </tr>

                                </tbody>

                            
                              </table>
                      
                          </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>


                      <a href="/employee-edit/{{ $employee->id }}" >
                        <button type="button" rel="tooltip" class="btn btn-success">
                            <i class="now-ui-icons ui-2_settings-90"> Edit</i>
                        </button>
                        </a>
                
                        <td>
                          <form action="{{ route('employee.destroy',$employee->id) }}"
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