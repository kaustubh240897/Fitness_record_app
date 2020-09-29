@extends('layouts.app')

@section('content')
<div class='container'>
@if (session('successMsg'))
<div class='alert alert-success' roles='alert'>
 {{ session('successMsg') }}
</div>
@endif

<h2> Select your tour</h2>
@if(! empty($current_tour))
<h4> your current tour is {{ $current_tour->m_tours->tour_title }} </h4>

@else
<h4> You have not selected any tour please select a tour. </h4>
@endif

@if(! empty($current_tour) && $current_tour->status == 'Done')
<h4> Your tour has been completed Please select another tour. </h4>
@endif
<table class="table">
  <thead class="black white-text">
    <tr>
      <th scope="col">#</th>
      <th scope="col">List Table</th>
      <th scope="col">status</th>
      <th scope="col">select</th>
      
      
    </tr>
  </thead>
  <tbody>
  @foreach($tours as $tour)

    <tr>
      <th scope="row">{{  $loop->iteration }}</th>
   <td> <a href="{{ route('tourdetails', $tour->id) }}"> {{ $tour->tour_title }} </a></td>
      <td>@foreach($all_t_Tours as $all_t_Tour) @if($tour->id == $all_t_Tour->m__tours_id)  @if($all_t_Tour->status == 'Done') * @break @else @continue  @endif @endif @endforeach </td>
     
     
      <td> 
      <form action="{{ route('tourstore', $tour->id) }}" method="POST" >
      {{ csrf_field() }}
      {{ method_field('post') }}
 <button type="submit" class="btn btn-primary">Select</button>
</form>
</a>
  </td>
    </tr>

  @endforeach
   
  </tbody>
</table>

<form action="{{ route('index') }}" method="POST" >
{{ csrf_field() }}
<div class='row col-12'>
 <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Select path</legend>
      <div class="col-sm-10">
        <div class="form-check">
         <?php $value = Session::get('reverse','false'); ?> 
            
          @if($value == 'false')
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="3" checked>
        
          @else
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="3">

          @endif

          <label class="form-check-label" for="gridRadios1">
            Normal breakthrough
            
          </label>
        </div>
        <div class="form-check">
        @if($value == 'true')
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="4" checked>
        
        @else
             <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="4">

        @endif
          <label class="form-check-label" for="gridRadios2">
            Reverse
           
          </label>
        </div>
        
      </div>
    </div>
  </fieldset>
  
    
      <button type="submit" class="btn btn-primary">Apply</button>
    
</div>
</form>
<div> <a href="{{ url('/mycollection') }}" >   <button type="button" class="btn btn-success"> My collections </button> </a> </div>
</div>
@endsection