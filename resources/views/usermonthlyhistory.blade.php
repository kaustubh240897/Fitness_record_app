@extends('layouts.app')

@section('content')
<div class='container'>

<div>  <h1> your  Monthly data </h1> </div>
<div> <a href="{{ url('/userdailyhistory') }}" >   <button type="button" class="btn btn-success"> daily History </button> </a> </div>
@foreach($current_month_datas as $current_month_data => $steps)
@php($total = 0)
        @foreach($steps as $step)
            
             @php($total += $step->steps)
        @endforeach
      {{ date("Y-m-d ", strtotime($step->step_actual_datetime)) }}   {{ $total }}  {{ $total*$get_m_user_stride/100000 }}(km)  @if($total > $get_m_user_monthly_goal ) * (goal {{ $get_m_user_monthly_goal }} steps)  @endif
      <br/>

@endforeach



</div>

@endsection