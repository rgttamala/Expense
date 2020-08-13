@extends('layouts.master')

@section('title')
    Cargo
@endsection

@section('content')
<div class="row center">
 
  <div class="col-md-12 center">
   <hr>
   <div class="card">
    <div class="card-body">
      <h4 class="card-title">Cargo Transaction</h4>

      <form method="POST" action="{{ route('cargo.store') }}" style="position: ">
        @csrf
     
        <div class="form-group col-md-7">
          
          <label for="inputState">Cargo</label>
          <select id="inputState" class="form-control center" name="cargorate" required style="font-weight: bold">
            @foreach($cargorates as $crates)
            <option value="{{ $crates->id }}">{{ $crates->origin }} →  {{ $crates->destination }} |
               {{ $crates->route }} | {{ $crates->trucktype }} | 
              {{ $crates->cargoname }} || PHP {{ $crates->rate }}</option>
            @endforeach
          </select>
      
         
            <label for="inputState">Driver</label>
            <select id="inputState" class="form-control" name="driver" required>
              @foreach($drivers as $driver)
              <option value="{{ $driver->id }}">{{ $driver->FirstName }} {{ $driver->MiddleName }} {{ $driver->LastName }} </option>
              @endforeach
            </select>
      
            <label for="inputState">Helper</label>
            <select name="helper" class="form-control">
              @foreach($helpers as $helper)
              <option name="helper" value="{{ $helper->id }}">{{ $helper->FirstName }} {{ $helper->MiddleName }} {{ $helper->LastName }} </option>
              @endforeach
            </select>
            
            <div class="form-group">
              <label for="inputAddress">Plate Number</label>
              <input type="text" class="form-control" id="inputAddress"  name="pnumber" required>
            </div>
      
            <div class="form-group">
              <label for="inputAddress">Travel Date</label>
              <input type="date" class="form-control" id="inputAddress"  name="traveldate" required>
            </div>
      
            <div class="form-group">
              <label for="inputAddress">Allowance</label>
              <input type="number" class="form-control" id="inputAddress"  name="allowance" required>
            </div>
      
            <label for="inputState">Status</label>
                    <select id="inputState" class="form-control" name="status" required>
                      <option selected>To Ship</option>
                    </select>
          
       
        <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
  

</div>


</div>

@endsection

@section('scripts')
<script>
$(document).ready(function(){

$('.dynamic').change(function(){
 if($(this).val() != '')
 {
  var select = $(this).attr("id");
  var value = $(this).val();
  var dependent = $(this).data('dependent');
  var _token = $('input[name="_token"]').val();
  $.ajax({
   url:"{{ route('dynamicdependent.fetch') }}",
   method:"POST",
   data:{select:select, value:value, _token:_token, dependent:dependent},
   success:function(result)
   {
    $('#'+dependent).html(result);
   }

  })
 }
});

$('#origin').change(function(){
 $('#destination').val('');
 $('#route').val('');
 $('#trucktype').val('');
 $('#cargoname').val('');
 $('#rate').val('');
});

$('#destination').change(function(){
 $('#route').val('');
 $('#trucktype').val('');
 $('#cargoname').val('');
 $('#rate').val('');
});

$('#route').change(function(){
 $('#trucktype').val('');
 $('#cargoname').val('');
 $('#rate').val('');
});

$('#trucktype').change(function(){
 $('#cargoname').val('');
 $('#rate').val('');
});

$('#cargoname').change(function(){
  $('#rate').val('');
 });

});
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

@endsection