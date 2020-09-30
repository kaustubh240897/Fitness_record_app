@extends('layouts.app')

@section('content')
<div class='container'>

@if(! empty($current_tour) && $current_tour->status == 'Done')
<h4> Your tour has been completed Please select another tour. </h4>
@elseif(! empty($current_tour) && $current_tour->status == 'Inprogress')
<h4> Your selected tour is {{ $current_tour->m_tours->tour_title }} </h4>
@else
<h4> You have not selected any tour.</h4>
@endif
 
 Tour title <h2>{{ $tours->tour_title }}  distance-: {{ $total }} Km</h2>
 Tour comment -: {{ $tours->tour_comment }}

 <h3>Checkpoints  </h3>
 @if($checkpoints->count() > 0)
 @if($value == 'false' || $value == 'null')
 Start

 @foreach ($checkpoints as $checkpoint)
   
     <h4>{{$loop->iteration}}. {{ $checkpoint->checkpoint_title }} {{ $checkpoint->checkpoint_category }}  {{ $checkpoint->distance }}Km</h4>
     @if($checkpoint->distance <  $user_stride/100000 * $steps )
     <h2 style='color:green'>Checked</h2>
     @endif
 @endforeach
 
 End
@elseif($value == 'true')
Start
@foreach ($checkpointsr as $checkpoint) 
   
     <h4>{{$loop->iteration}}. {{ $checkpoint->checkpoint_title }} {{ $checkpoint->checkpoint_category }}  {{ $total-$checkpoint->distance }}Km</h4>
      @if($total - $checkpoint->distance <  $user_stride/100000 * $steps )
     <h2 style='color:green'>Checked</h2>
     @endif
 @endforeach
 End
 
@endif
@else
<h4> Sorry there are no checkpoints.</h4>
@endif

 <h3> You covered {{ $user_stride/100000 * $steps }} (Km) </h3>




<fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Select path</legend>
      <div class="col-sm-10">
        <div class="form-check">
        @if($value=='false')
        
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="1" checked>
        
        @else
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="1" >

        @endif
          <label class="form-check-label" for="gridRadios1">
            Normal breakthrough
            
          </label>
        </div>
        <div class="form-check">
        @if($value == 'true')
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2" checked>
        
        @else
             <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">

        @endif
          <label class="form-check-label" for="gridRadios2">
            Reverse
           
          </label>
        </div>
        
      </div>
    </div>
  </fieldset>


</div>

@endsection