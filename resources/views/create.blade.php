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



 <style media="screen">
      .btn.btn-lg {
        background-color: #ccece8 !important;
       /* padding: 12px 32px !important; */
     }
     .btn.blue {
    background-color: #ccece8 !important;
    /* padding: 12px 32px !important; */
  }
     .btn.blue.cal {
       background-color: #ccece8 !important;
       margin: 0 auto !important;
       padding: 0 !important;
       display: table-cell !important;
       vertical-align: middle !important;
      /* padding: 12px 32px !important; */
    }
    .p {
      font-size: 70% !important;
    }
  </style>

<div class="container-fluid mt-1">
      <div class="row">
        <div class="col-xs-4 pr-3 pl-2">
         <a href="{{ url('/mypage') }}"> <button type="button" class="btn blue">My Page</button> </a>
        </div>
        <div class="col-xs-4 pr-3 pl-2">
        @if(! empty($m_user))
        <a href="{{ route('edit', $m_user->id) }}">  <button type="button" class="btn blue">Edit</button></a>
        @endif
        </div>
        <div class="col-xs-6 pl-2 pt-2">
      @if(! empty($m_user))
      <p class="text-break mb-0">Level:- {{ $m_user->tour_level }} </p>
      @else
      <p class="text-break mb-0">Level:- None </p>
      @endif
          <p class="text-break">Your level will keep increasing as you complete the tours.</p>
        </div>
      </div>
    </div>
<form action="{{ route('store') }}" method="POST" >
{{ csrf_field() }}
<div class="container-fluid">
<!-- temporary -->
      <div class="row">
        <div class="col">
          <p>1. Serial number:-</p>
        </div>
         <div class="container">
            <div class="d-flex flex-row-reverse p-0 d-inline-block justify-content-end">
              <input type="text" placeholder="serialnumber" required='true' name='serialnumber' class="form-control mx-0 my-0 d-inline-block" style="width: 60%; height:10%; font-size:70%" id="serialnumberinput">
            </div>
          </div>
      </div>

<!-- /temporary -->

      <div class="row">
        <div class="col">
          <p>2. Stride:-</p>
        </div>
      </div>
      <div class="row">
        <div class="col-3 pl-3">
          <div class="form-check form-check-inline pb-1">
            <input class="form-check-input" type="radio" required='true' name="gridRadios" id="inlineRadio1" value="3">
            <label class="form-check-label p-1" for="inlineRadio1">Calculate</label>
          </div>
          <br>
          <div class="form-check form-check-inline pt-2">
            <input class="form-check-input" type="radio" required='true' name="gridRadios" id="inlineRadio2" value="4">
            <label class="form-check-label" for="inlineRadio2">Manual</label>
          </div>
        </div>
        <div class="col">
          <div class="container-fluid">
            <div class="form-group row p-0 m-0">
              <div class="col-3 p-0">
                <!-- <input type="text" class="form-control d-inline-block" style="width: 100%; height:50%; font-size:70%" id="inlineFormInputName2" placeholder="Gender"> -->
                <div class="input-group p-0 m-0 d-inline-block" style="width: 100%; height:100%; font-size:80%">
                  <select class="custom-select p-0" style="width: 100%; height:50%; font-size:70%" id="genderinput">
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                  </select>
                </div>
              </div>
              <div class="col-3 p-0 pl-1">
                <input type="number" class="form-control d-inline-block" name='inputheight' style="width: 100%; height:50%; font-size:50%" id="heightinput" min='112' max='212' placeholder="Height in cm">
              </div>
              <div class="col-3 p-0 pl-1">
                <button type="button" class="btn blue cal" style="width: 100%; height:50%; font-size:70%" onclick="calculateStride()">Calculate</button>
              </div>
              <div class="col-3 p-0 pl-1">
                <div class="d-flex flex-row justify-content-sm-end">
                  <p class="d-inline-block border float-right" id="p_strideLength">Length</p>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="d-flex flex-row-reverse p-0 d-inline-block justify-content-end">
              <input type="number" placeholder="Stride length(in cm)" name='stridelength' class="form-control mx-0 my-0 d-inline-block" style="width: 60%; height:10%; font-size:70%" min="45" max="85" id="strideinput">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container pt-2">
      <div class="d-flex flex-row justify-content-center">
        <p style="font-size: 70%">*Stride length should be between 45cm - 85cm</p>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <p>3. Daily Goal:-</p>
        </div>
      </div>
 <div class="row">
        <div class="col-3 pl-3">
          <div class="form-check form-check-inline pb-1">
            <input class="form-check-input" type="radio" required='true' name="radio_daily" id="inlineRadio3" value="5">
            <label class="form-check-label p-1" for="inlineRadio3">Steps</label>
          </div>
          <br>
          <div class="form-check form-check-inline pt-2">
            <input class="form-check-input" type="radio" required='true' name="radio_daily" id="inlineRadio4" value="6">
            <label class="form-check-label" for="inlineRadio4">Distance</label>
          </div>
        </div>
        <div class="col">
          <div class="container">
            <div class="form-group row p-0 m-0 justify-content-end">
              <div class="col-6 p-0">
                <!-- <input type="text" class="form-control d-inline-block" style="width: 100%; height:50%; font-size:70%" id="inlineFormInputName2" placeholder="Gender"> -->
                <div class="d-flex flex-row-reverse p-0 d-inline-block justify-content-center">
                  <input type="number" name='dailygoal'  placeholder="Steps" class="form-control mx-0 my-0 d-inline-block" style="width: 100%; height:10%; font-size:70%" min="1000" max="181000" id="daily_stepsInput" onchange="estimateDailyDist()">
                </div>
              </div>
              <div class="col-6 p-0 pl-1 text-align-right">
                <div class="d-flex flex-row justify-content-end">
                  <p class="d-inline-block border float-right text-align-right pt-1" id="daily_estDist">Est. Distance</p>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="form-group row p-0 m-0 justify-content-end">
              <div class="col-6 p-0">
                <!-- <input type="text" class="form-control d-inline-block" style="width: 100%; height:50%; font-size:70%" id="inlineFormInputName2" placeholder="Gender"> -->
                <div class="d-flex flex-row-reverse p-0 d-inline-block justify-content-center">
                  <input type="number" placeholder="Distance (in km)" name='dailydistance' class="form-control mx-0 my-0 d-inline-block" style="width: 100%; height:10%; font-size:70%" min="1" max="100" id="daily_distInput" onchange="estimateDailySteps()">
                </div>
              </div>
              <div class="col-6 p-0 pl-1 text-align-right">
                <div class="d-flex flex-row justify-content-end">
                  <p class="d-inline-block border float-right text-align-right pt-1" id="daily_estSteps">Est. Steps</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="d-flex flex-row justify-content-center">
        <p style="font-size: 70%">Daily distance should be less than 100km</p>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <p>4. Monthly Goal:-</p>
        </div>
      </div>
      <div class="row">
        <div class="col-3 pl-3">
          <div class="form-check form-check-inline pb-1">
            <input class="form-check-input" type="radio" required='true' name="radio_monthly" id="inlineRadio5" value="7">
            <label class="form-check-label p-1" for="inlineRadio5">Steps</label>
          </div>
          <br>
          <div class="form-check form-check-inline pt-2">
            <input class="form-check-input" type="radio" required='true' name="radio_monthly" id="inlineRadio6" value="8">
            <label class="form-check-label" for="inlineRadio6">Distance</label>
          </div>
        </div>
        <div class="col">
          <div class="container">
            <div class="form-group row p-0 m-0 justify-content-end">
              <div class="col-6 p-0">
                <!-- <input type="text" class="form-control d-inline-block" style="width: 100%; height:50%; font-size:70%" id="inlineFormInputName2" placeholder="Gender"> -->
                <div class="d-flex flex-row-reverse p-0 d-inline-block justify-content-center">
                  <input type="number" placeholder="Steps" name='monthlygoal' class="form-control mx-0 my-0 d-inline-block" style="width: 100%; height:10%; font-size:70%" min="18000" max="1818000" id="monthly_stepsInput" onchange="estimateMonthlyDist()">
                </div>
              </div>
              <div class="col-6 p-0 pl-1 text-align-right">
                <div class="d-flex flex-row justify-content-end">
                  <p class="d-inline-block border float-right text-align-right pt-1" id="monthly_estDist">Est. Distance</p>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="form-group row p-0 m-0 justify-content-end">
              <div class="col-6 p-0">
                <!-- <input type="text" class="form-control d-inline-block" style="width: 100%; height:50%; font-size:70%" id="inlineFormInputName2" placeholder="Gender"> -->
                <div class="d-flex flex-row-reverse p-0 d-inline-block justify-content-center">
                  <input type="number" placeholder="Distance (in km)" name='monthlydistance' class="form-control mx-0 my-0 d-inline-block" style="width: 100%; height:10%; font-size:70%" min="10" max="1000" id="monthly_distInput" onchange="estimateMonthlySteps()">
                </div>
              </div>
              <div class="col-6 p-0 pl-1 text-align-right">
                <div class="d-flex flex-row justify-content-end">
                  <p class="d-inline-block border float-right text-align-right pt-1" id="monthly_estSteps">Est. Steps</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="d-flex flex-row justify-content-center">
        <p style="font-size: 70%">Monthly distance should be less than 1000km.</p>
      </div>
    </div>
    <div class="container-fluid">
      <p>Motion:-</p>
      <div class="d-flex flex-row justify-content-around justify-content-sm-start">
        <div class="form-check form-check-inline pl-3">
          <input class="form-check-input" type="checkbox" name='motionapp' id="inlineCheckbox1" value="1">
          <label class="form-check-label" for="inlineCheckbox1" style="font-size:70%">Animation in mobile application</label>
        </div>
        <div class="form-check form-check-inline pl-3">
          <input class="form-check-input" type="checkbox" name='motionweb' id="inlineCheckbox2" value="1">
          <label class="form-check-label" for="inlineCheckbox2" style="font-size:70%">Animation in web application</label>
        </div>
      </div>
    </div>
    <div class="container pt-2">
      <div class="d-flex flex-row justify-content-center">
        <p style="font-size: 70%">*Some text for stride length</p>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-6 col-sm-3">
          <p style="font-size: 70%">Currently Selected Tour:-</p>
        </div>
        <div class="col-6">
        @if(! empty($t_tour))
          <p class="text-break" style="font-size: 70%">Tourname :- {{ $t_tour->m_tours->tour_title }} {{ $t_tour->status }}</p>
        @elseif( empty($t_tour))
          <p style="color: red; font-size: 70%">*No tour selected</p>
        @endif
        @if( !empty($t_tour)  && $t_tour->status == 'Done' )
          <p style="color: red; font-size: 70%">*Selected tour already completed</p>
        @endif
        </div>
      </div>
    </div>
    <div class="container-fluid p-1">
      <div class="d-flex flex-row-reverse">
        <button type="submit" class="btn blue">Tour Selection</button>
      </div>
    </div>
  </form>
  <script type="text/javascript">
    function calculateStride() {
      var x = document.getElementById("heightinput").value;
      var no = document.getElementById("genderinput");
      var option = no.options[no.selectedIndex].text;
      var p = document.getElementById("p_strideLength");
      var strideLength;
      if (option==="Male") {
        strideLength = (x/2.5).toFixed(0);
      } else {
        strideLength = (x/2.5).toFixed(0);
      }
      p.innerHTML = strideLength;
      console.log(x);
      console.log(option);
    }

    function estimateDailyDist() {
      var daily_steps = document.getElementById("daily_stepsInput").value;



      var p_dailyEstDist = document.getElementById("daily_estDist");



      if (daily_steps>=1) {
        p_dailyEstDist.innerHTML = (daily_steps * 70/100000).toFixed(0);
      }

    }
    function estimateDailySteps() {
      var daily_dist = document.getElementById("daily_distInput").value;
      var p_dailyEstSteps = document.getElementById("daily_estSteps");

      if (daily_dist>=1) {
        p_dailyEstSteps.innerHTML = (daily_dist*100000/70).toFixed(0);
      }
    }
    function estimateMonthlyDist() {
      var monthly_steps = document.getElementById("monthly_stepsInput").value;
      var p_monthlyEstDist = document.getElementById("monthly_estDist");
      if (monthly_steps>=1) {
        p_monthlyEstDist.innerHTML = (monthly_steps*70/100000).toFixed(0);
      }
    }
    function estimateMonthlySteps() {
      var monthly_dist = document.getElementById("monthly_distInput").value;
      var p_monthlyEstSteps = document.getElementById("monthly_estSteps");
      if (monthly_dist>=1) {
        p_monthlyEstSteps.innerHTML = (monthly_dist*100000/70).toFixed(0);
      }
    }
  </script>

@endsection
