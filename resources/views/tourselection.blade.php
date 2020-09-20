@extends('layouts.app')

@section('content')
<div class='container'>
@if (session('successMsg'))
<div class='alert alert-success' roles='alert'>
 {{ session('successMsg') }}
</div>
@endif

<h2> Select your tour</h2>
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
      <th scope="row">{{ $tour->id }}</th>
   <td> <a href="{{ route('tourdetails', $tour->id) }}"> {{ $tour->tour_title }} </a></td>
      <td>*</td>
     
     
      <td> 
      <form action="{{ route('tourstore', $tour->id) }}" method="POST" >
      {{ csrf_field() }}
      {{ method_field('post') }}
 <button type="submit" class="btn btn-primary">Apply</button>
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
         <?php $value = Cache::get('reverse'); ?>
          @if($value == 'false')
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="3" checked>

          @elseif($value == 'null')
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

</div>
@endsection