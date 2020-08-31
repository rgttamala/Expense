@extends('layouts.master')

@section('title')
    Employee
@endsection

@section('content')

<div class="col-md-12">
  <a href="{{route('helper.create')}}" style="text-decoration: none !important">
    <button type="button" class="btn btn-block btn-primary col-2">Add Helper</button>
</a> 



  <div class="card">
    <div class="card-header">
      <h4 class="card-title"> Helpers </h4>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table">
          <thead class=" text-primary">
            <th>
              Full Name
            </th>
            <th>
              SSS
            </th>
            <th>
              Philhealth
            </th>
            
            <th class="text-right"></th>
          </thead>
          <tbody>
            @foreach ($helpers as $helper)
                      
                 
            <tr>
            <td>{{$helper->name}}</td>
            <td>{{$helper->SSS}}</td>   
            <td>{{$helper->Philhealth}}</td>   
                <td class="td-actions text-right">
                    

                    


                      <a href="/employee-edit/{{ $helper->id }}" >
                        <button type="button" rel="tooltip" class="btn btn-success">
                            <i class="now-ui-icons ui-2_settings-90"> Edit</i>
                        </button>
                        </a>
                
                        <td>
                          <form action="{{ route('employee.destroy',$helper->id) }}"
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