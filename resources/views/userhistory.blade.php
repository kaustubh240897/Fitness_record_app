@extends('layouts.app')

@section('content')
<div class='container'>
<div> <a href="{{ url('/usermonthlyhistory') }}" >   <button type="button" class="btn btn-success"> Monthly History </button> </a> </div>
<br/>
<script>
function myFunction() {
  document.getElementById("myNumber");
}
</script>
<div class='col-md-6'>
<form action='/search' method="get">
      <div class='input-group'>
        year: <input type='search' name='year' class='form-control'>
        day:<input type='search' name='day' class='form-control'>
        month:<input type='number' name='month' max='12' min='1' id='myNumber' class='form-control'>

              <span class='input-group-prepend'>
                   <button type='submit' class='btn btn-primary'> Search
                   </button>
                </span>
        </div>
    </form>
</div>       


<div>  <h1> your current Week's data </h1> </div>
@foreach($current_week_datas as $current_week_data => $steps)
@php($total = 0)
        @foreach($steps as $step)
            
             @php($total += $step->steps)
        @endforeach
      {{ date("Y-m-d ", strtotime($step->step_actual_datetime))  }}   {{ $total }}  {{ $total*$get_m_user_stride/100000 }}(km)  @if($total > $get_m_user_daily_goal ) * (goal {{ $get_m_user_daily_goal }} steps)  @endif
      <br/>

@endforeach



    

</div>
@endsection