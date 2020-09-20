@extends('layouts.app')

@section('content')
<div class='container'>
@if (session('successMsg'))
<div class="alert alert-success" role="alert">
   {{ session('successMsg') }}
</div>
@endif

@if (session('dangerMsg'))
<div class="alert alert-danger" role="alert">
   {{ session('dangerMsg') }}
</div>
@endif

@if ($errors->any())
@foreach ($errors->all() as $error)
<div class='alert alert-danger' role='alert'>
{{ $error }}
</div>
@endforeach
@endif


<h2> Fill your details</h2>
 <div class="form-group row">

    <a href="{{ url('/') }}" >  <button type="button" class="btn btn-primary mr-2">abcd </button> </a>

 
   
      <button type="button" class="btn btn-primary mr-2">calender</button>
   
 
   
      <button type="button" class="btn btn-primary mr-2">Mypage</button>
   
  </div>
<form action="{{ route('store') }}" method="POST" >
{{ csrf_field() }}
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Serial number</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="serialnumber" id="inputEmail3" placeholder="Serial number">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Stride Length</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="stridelength" id="inputEmail3" placeholder="Stride length">
    </div>
  </div>

   <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Daily goal</legend>
      <div class="col-sm-10">
        <div class="form-check">

          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="1" >
          <label class="form-check-label" for="gridRadios1">
            Automatic
             <div class="col-sm-10">
            
                <input type="text" class="form-control" name="dailygoal1" id="inputPassword3" placeholder="daily goal">
              
              </div>
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
          <label class="form-check-label" for="gridRadios2">
            Manual
             <div class="col-sm-10">
          
              <input type="text" class="form-control" name="dailygoal2" id="inputPassword3" placeholder="daily goal">
          
            </div>
          </label>
        </div>
        
      </div>
    </div>
  </fieldset>

  <!-- <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Daily Goal(steps)</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="dailygoal" id="inputPassword3" placeholder="daily goal">
    </div>
  </div> -->
   <div class="form-group row">
    <label for="inputmonthlygoals" class="col-sm-2 col-form-label">Monthly Goal(steps)</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="monthlygoal" id="inputmonthlygoals" placeholder="monthly goal">
    </div>
  </div>
 
  <div class="form-group row">
    <div class="col-sm-2">Checkbox</div>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" name="motionweb" value='1' type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
          Motion web
        </label>
       
      </div>
       <div class="form-check">
        <input class="form-check-input" name="motionapp" value='1' type="checkbox" id="gridCheck2">
        <label class="form-check-label" for="gridCheck2">
          Motion app
        </label>
       
      </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Apply</button>
    </div>
  </div>
</form>

</div>

@endsection