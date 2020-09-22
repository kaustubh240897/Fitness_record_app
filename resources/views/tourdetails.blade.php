@extends('layouts.app')

@section('content')
<div class='container'>


 Tour title <h2>{{ $tour->tour_title }}  (distance-: @foreach ($checkpoints as $checkpoint) @if($checkpoint->checkpoint_category == 'endpoint')  {{ $checkpoint->distance }}Km @endif @endforeach)   </h2>
 Tour comment -: {{ $tour->tour_comment }}

 <h3>Checkpoints  </h3>
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