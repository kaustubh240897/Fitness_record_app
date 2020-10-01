@extends('layouts.app')

@section('content')
<div class='container'>

Today's steps:
{{ $today_data }} <br/>
Estimated distance: {{ $today_data*$get_m_user_stride/100000 }} (km)<br/>
Goal -: {{ $get_m_user_daily_goal }} per day

<h4> {{ $get_t_tour->m_tours->tour_title }} (total distance -: {{ $total }} Km ) </h4>

@if($checkpoints->count() > 0)
@if($get_t_tour->status == 'Done')
<h4> Your tour has been completed please chose another tour. </h4>
@endif
   
    @if($session_value == 'false' || $session_value == 'null')
        Start

        @foreach ($checkpoints as $checkpoint)
        
            <h4>{{$loop->iteration}}. {{ $checkpoint->checkpoint_title }} {{ $checkpoint->checkpoint_category }}  {{ $checkpoint->distance }}Km</h4>
            @if($checkpoint->distance <  $get_m_user_stride/100000 * $steps )
            <h2 style='color:green'>Checked</h2>
            @endif
        @endforeach
        
        End
        @elseif($session_value == 'true')
        Start
        @foreach ($checkpointsr as $checkpoint) 
        
            <h4>{{$loop->iteration}}. {{ $checkpoint->checkpoint_title }} {{ $checkpoint->checkpoint_category }}  {{ $total-$checkpoint->distance }}Km</h4>
            @if($total - $checkpoint->distance <  $get_m_user_stride/100000 * $steps )
            <h2 style='color:green'>Checked</h2>
            @endif
        @endforeach
        End
        
    @endif
 
@else
<h4> Sorry there are no checkpoints.</h4>
@endif


<div>  <h1> your current Week's data </h1> </div>
@foreach($current_week_datas as $current_week_data => $steps)
@php($total = 0)
        @foreach($steps as $step)
            
             @php($total += $step->steps)
        @endforeach
      @if($total > 0)
      {{ date("Y-m-d ", strtotime($step->step_actual_datetime))  }}   {{ $total }}  {{ $total*$get_m_user_stride/100000 }}(km)  @if($total > $get_m_user_daily_goal ) * (goal {{ $get_m_user_daily_goal }} steps)  @endif
      @else
       {{ date("Y-m-d ", strtotime($step->step_actual_datetime))  }}   0
      @endif
      <br/>

@endforeach





</div>

@endsection