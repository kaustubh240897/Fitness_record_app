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
@if(! empty($m_users) && $m_users->users_id == Auth::id())

<div class="container-fluid mt-1">
      <div class="row">
        <div class="col-xs-4 pr-3 pl-2">
         <a href="{{ url('/mypage') }}"> <button type="button" class="btn blue">マイページ</button> </a>
        </div>
        <div class="col-xs-6 pl-2 pt-2">
      @if(! empty($m_users))
      <p class="text-break mb-0">レベル：- {{ $m_users->tour_level }} </p>
      @else
      <p class="text-break mb-0">レベル：- 無し </p>
      @endif
          <p class="text-break">ツアーを完了すると、レベルは上がり続けます。</p>
        </div>
      </div>
    </div>
<form action="{{ route('update',$m_users->id) }}" method="POST" >
{{ csrf_field() }}
<div class="container-fluid">


      <div class="row">
        <div class="col">
          <p>1. ストライド：-</p>
        </div>
      </div>
      <div class="row">
        <div class="col-3 pl-3">
          <div class="form-check form-check-inline pb-1">
            <input class="form-check-input" type="radio" required='true' name="gridRadios" id="inlineRadio1" value="3">
            <label class="form-check-label p-1" for="inlineRadio1">計算する</label>
          </div>
          <br>
          <div class="form-check form-check-inline pt-2">
            <input class="form-check-input" type="radio" required='true' name="gridRadios" id="inlineRadio2" value="4">
            <label class="form-check-label" for="inlineRadio2">マニュアル</label>
          </div>
        </div>
        <div class="col">
          <div class="container-fluid">
            <div class="form-group row p-0 m-0">
              <div class="col-3 p-0">
                <!-- <input type="text" class="form-control d-inline-block" style="width: 100%; height:50%; font-size:70%" id="inlineFormInputName2" placeholder="Gender"> -->
                <div class="input-group p-0 m-0 d-inline-block" style="width: 100%; height:100%; font-size:80%">
                  <select class="custom-select p-0" style="width: 100%; height:50%; font-size:70%" id="genderinput">
                    <option value="1">男性</option>
                    <option value="2">女性</option>
                  </select>
                </div>
              </div>
              <div class="col-3 p-0 pl-1">
                <input type="number" class="form-control d-inline-block" name='inputheight' value="{{ round($m_users->stride * 2.5) }}" style="width: 100%; height:50%; font-size:50%" id="heightinput" min='112' max='213' placeholder="Height in cm">
              </div>
              <div class="col-3 p-0 pl-1">
                <button type="button" class="btn blue cal" style="width: 100%; height:50%; font-size:70%" onclick="calculateStride()">計算する</button>
              </div>
              <div class="col-3 p-0 pl-1">
                <div class="d-flex flex-row justify-content-sm-end">
                  <p class="d-inline-block border float-right" id="p_strideLength">長さ</p>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="d-flex flex-row-reverse p-0 d-inline-block justify-content-end">
              <p><input type="number" placeholder="Stride length(in cm)" value="{{ round($m_users->stride) }}" name='stridelength' class="form-control mx-0 my-0 d-inline-block" style="width: 60%; height:10%; font-size:70%" min="45" max="85" id="strideinput"></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container pt-2">
      <div class="d-flex flex-row justify-content-center">
        <p style="font-size: 70%">*ストライドの長さは45cmから85cmの間でなければなりません</p>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <p>2. 毎日の目標：-</p>
        </div>
      </div>
    <div class="row">
        <div class="col-3 pl-3">
          <div class="form-check form-check-inline pb-1">
            <input class="form-check-input" type="radio" required='true' name="radio_daily" id="inlineRadio3" value="5">
            <label class="form-check-label p-1" for="inlineRadio3">ステップ</label>
          </div>
          <br>
          <div class="form-check form-check-inline pt-2">
            <input class="form-check-input" type="radio" required='true' name="radio_daily" id="inlineRadio4" value="6">
            <label class="form-check-label" for="inlineRadio4">距離</label>
          </div>
        </div>
        <div class="col">
          <div class="container">
            <div class="form-group row p-0 m-0 justify-content-end">
              <div class="col-6 p-0">
                <!-- <input type="text" class="form-control d-inline-block" style="width: 100%; height:50%; font-size:70%" id="inlineFormInputName2" placeholder="Gender"> -->
                <div class="d-flex flex-row-reverse p-0 d-inline-block justify-content-center">
                  <input type="number" name='dailygoal' value="{{ round($m_users->step_goal_per_day) }}"  placeholder="Steps" class="form-control mx-0 my-0 d-inline-block" style="width: 100%; height:10%; font-size:70%" min="0" max="181000" id="daily_stepsInput" onchange="estimateDailyDist()">
                </div>
              </div>
              <div class="col-6 p-0 pl-1 text-align-right">
                <div class="d-flex flex-row justify-content-end">
                  <p class="d-inline-block border float-right text-align-right pt-1" id="daily_estDist">です。距離</p>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="form-group row p-0 m-0 justify-content-end">
              <div class="col-6 p-0">
                <!-- <input type="text" class="form-control d-inline-block" style="width: 100%; height:50%; font-size:70%" id="inlineFormInputName2" placeholder="Gender"> -->
                <div class="d-flex flex-row-reverse p-0 d-inline-block justify-content-center">

                  <input type="number" placeholder="Distance (in km)" value="{{ round($m_users->step_goal_per_day*$m_users->user_stride/100000) }}" name='dailydistance' class="form-control mx-0 my-0 d-inline-block" style="width: 100%; height:10%; font-size:70%" min="0" max="100" id="daily_distInput" onchange="estimateDailySteps()">

                </div>
              </div>
              <div class="col-6 p-0 pl-1 text-align-right">
                <div class="d-flex flex-row justify-content-end">
                  <p class="d-inline-block border float-right text-align-right pt-1" id="daily_estSteps">です。手順</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="d-flex flex-row justify-content-center">
        <p style="font-size: 70%">毎日の距離は100km未満である必要があります</p>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <p>3. 毎月の目標：-</p>
        </div>
      </div>
      <div class="row">
        <div class="col-3 pl-3">
          <div class="form-check form-check-inline pb-1">
            <input class="form-check-input" type="radio" required='true' name="radio_monthly" id="inlineRadio5" value="7">
            <label class="form-check-label p-1" for="inlineRadio5">ステップ</label>
          </div>
          <br>
          <div class="form-check form-check-inline pt-2">
            <input class="form-check-input" type="radio" required='true' name="radio_monthly" id="inlineRadio6" value="8">
            <label class="form-check-label" for="inlineRadio6">距離</label>
          </div>
        </div>
        <div class="col">
          <div class="container">
            <div class="form-group row p-0 m-0 justify-content-end">
              <div class="col-6 p-0">
                <!-- <input type="text" class="form-control d-inline-block" style="width: 100%; height:50%; font-size:70%" id="inlineFormInputName2" placeholder="Gender"> -->
                <div class="d-flex flex-row-reverse p-0 d-inline-block justify-content-center">
                  <input type="number" placeholder="Steps" name='monthlygoal' value="{{ round($m_users->step_goals_per_month) }}" class="form-control mx-0 my-0 d-inline-block" style="width: 100%; height:10%; font-size:70%" min="0" max="1818000" id="monthly_stepsInput" onchange="estimateMonthlyDist()">
                </div>
              </div>
              <div class="col-6 p-0 pl-1 text-align-right">
                <div class="d-flex flex-row justify-content-end">
                  <p class="d-inline-block border float-right text-align-right pt-1" id="monthly_estDist">です。距離</p>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="form-group row p-0 m-0 justify-content-end">
              <div class="col-6 p-0">
                <!-- <input type="text" class="form-control d-inline-block" style="width: 100%; height:50%; font-size:70%" id="inlineFormInputName2" placeholder="Gender"> -->
                <div class="d-flex flex-row-reverse p-0 d-inline-block justify-content-center">

                  <input type="number" placeholder="Distance (in km)" name='monthlydistance' value="{{ round(($m_users->step_goals_per_month)*($m_users->user_stride)/100000) }}" class="form-control mx-0 my-0 d-inline-block" style="width: 100%; height:10%; font-size:70%" min="0" max="1000" id="monthly_distInput" onchange="estimateMonthlySteps()">

                </div>
              </div>
              <div class="col-6 p-0 pl-1 text-align-right">
                <div class="d-flex flex-row justify-content-end">
                  <p class="d-inline-block border float-right text-align-right pt-1" id="monthly_estSteps">です。手順</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="d-flex flex-row justify-content-center">
        <p style="font-size: 70%">月間距離は1000km未満である必要があります。</p>
      </div>
    </div>
    <div class="container-fluid">
      <p>モーション：-</p>
      <div class="d-flex flex-row justify-content-around justify-content-sm-start">
        <div class="form-check form-check-inline pl-3">

        @if($m_users->motion_app == 0)
          <input class="form-check-input" type="checkbox" name='motionapp' id="inlineCheckbox1" >
        @else
         <input class="form-check-input" type="checkbox" name='motionapp' id="inlineCheckbox1"  checked>
        @endif
          <label class="form-check-label" for="inlineCheckbox1" style="font-size:70%">モバイルアプリケーションでのアニメーション</label>
        </div>
        <div class="form-check form-check-inline pl-3">
        @if($m_users->motion_web == 0)
          <input class="form-check-input" type="checkbox" name='motionweb' id="inlineCheckbox2" >
        @else
         <input class="form-check-input" type="checkbox" name='motionweb' id="inlineCheckbox2" checked>
        @endif
          <label class="form-check-label" for="inlineCheckbox2" style="font-size:70%">Webアプリケーションのアニメーション</label>
        </div>
      </div>
    </div>
    <div class="container pt-2">
      <div class="d-flex flex-row justify-content-center">
        <p style="font-size: 70%">*歩幅のテキスト</p>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-6 col-sm-3">
          <p style="font-size: 70%">現在選択されているツアー：-</p>
        </div>
        <div class="col-6">
        @if(! empty($t_tour))
          <p class="text-break" style="font-size: 70%">トーナメント：- {{ $t_tour->m_tours->tour_title }} {{ $t_tour->status }}</p>
        @elseif( empty($t_tour))
          <p style="color: red; font-size: 70%">*ツアーが選択されていません</p>
        @endif
        @if( !empty($t_tour)  && $t_tour->status == 'Done' )
          <p style="color: red; font-size: 70%">*選択したツアーはすでに完了しています</p>
        @endif
        </div>
      </div>
    </div>
    <div class="container-fluid p-1">
      <div class="d-flex flex-row-reverse">
        <button type="submit" class="btn blue">ツアーセレクション</button>
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
        p_dailyEstDist.innerHTML = (daily_steps * ({{ $m_users->stride }})/100000).toFixed(0);
      }

    }
    function estimateDailySteps() {
      var daily_dist = document.getElementById("daily_distInput").value;
      var p_dailyEstSteps = document.getElementById("daily_estSteps");

      if (daily_dist>=1) {
        p_dailyEstSteps.innerHTML = (daily_dist*100000/({{ $m_users->stride }})).toFixed(0);
      }
    }
    function estimateMonthlyDist() {
      var monthly_steps = document.getElementById("monthly_stepsInput").value;
      var p_monthlyEstDist = document.getElementById("monthly_estDist");
      if (monthly_steps>=1) {
        p_monthlyEstDist.innerHTML = (monthly_steps*({{ $m_users->stride }})/100000).toFixed(0);
      }
    }
    function estimateMonthlySteps() {
      var monthly_dist = document.getElementById("monthly_distInput").value;
      var p_monthlyEstSteps = document.getElementById("monthly_estSteps");
      if (monthly_dist>=1) {
        p_monthlyEstSteps.innerHTML = (monthly_dist*100000/({{ $m_users->stride }})).toFixed(0);
      }
    }
  </script>
  <script type="text/javascript">
    var r2 = document.getElementById("inlineRadio2");
    var r3 = document.getElementById("inlineRadio3");
    var r5 = document.getElementById("inlineRadio5");
    r2.checked = "true";
    r3.checked = "true";
    r5.checked = "true";
    estimateDailyDist();
    estimateMonthlyDist();
  </script>
@else
  <h3> Sorry! You are not authorized to see this page. </h3>
@endif
@endsection
