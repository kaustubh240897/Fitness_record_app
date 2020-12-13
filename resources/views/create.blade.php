@extends('layouts.app')

@section('content')
<div class='container'>
@if (session('successMsg'))
  <div class="alert alert-success" role="alert">
    {{ session('successMsg') }}
  </div>
@endif

@if (session('Status'))
  <div class="alert alert-success" role="alert">
    {{ session('Status') }}
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
    /* .btn.btn-lg {
        background-color: #ccece8 !important;
     }
    .btn.blue {
    background-color: #ccece8 !important;
    }
    .btn.blue.cal {
       background-color: #ccece8 !important;
       margin: 0 auto !important;
       padding: 0 !important;
       display: table-cell !important;
       vertical-align: middle !important;
    }
    .p {
      font-size: 70% !important;
    } */

    .overlay-line1 {
      align-self: flex-start;
      transform: translateY(-30px);
    }
    .speech-bubble {
    	position: relative;
    	background: #fffae3;
    	border-radius: .4em;
      padding-left: 10px;
    }

    .speech-bubble:after {
    	content: '';
    	position: absolute;
    	bottom: 80%;
    	right: 20%;
    	width: 0;
    	height: 0;
    	border: 1px solid #ffd100;
      border-bottom:20px solid #fff;
    	margin-left: 0px;
      margin-right: 10px;
      margin-top: 0px;
    	margin-bottom: 10px;
    }
    .box2 {
  border: 1px solid #ffd100;
  border-radius: 5px;
  background-color: #fffae3;
  padding: 2px;
  text-align: left;
  font-weight: 100;
  color: #00bfb6;
  font-family: arial;
  position: relative;
}
.sb10:before {
  content: "";
  width: 0px;
  height: 0px;
  position: absolute;
  border-left: 9px solid transparent;
  border-right: 9px solid transparent;
  border-top: 9px solid transparent;
  border-bottom: 9px solid #fff;
  left: 40.2%;
  top: -18px;
  z-index: 2;
}

.sb10:after {
  content: "";
  width: 0px;
  height: 0px;
  position: absolute;
  border-left: 10px solid transparent;
  border-right: 10px solid transparent;
  border-top: 10px solid transparent;
  border-bottom: 10px solid #ffd100;
  left: 40%;
  top: -20.5px;
}
.sb11:before {
  content: "";
  width: 0px;
  height: 0px;
  position: absolute;
  border-left: 9px solid transparent;
  border-right: 9px solid transparent;
  border-top: 9px solid transparent;
  border-bottom: 9px solid #fff;
  left: 7.2%;
  top: -18px;
  z-index: 2;
}

.sb11:after {
  content: "";
  width: 0px;
  height: 0px;
  position: absolute;
  border-left: 10px solid transparent;
  border-right: 10px solid transparent;
  border-top: 10px solid transparent;
  border-bottom: 10px solid #ffd100;
  left: 7%;
  top: -20.5px;
}

.sb12:before {
  content: "";
  width: 0px;
  height: 0px;
  position: absolute;
  border-left: 9px solid transparent;
  border-right: 9px solid transparent;
  border-top: 9px solid transparent;
  border-bottom: 9px solid #fff;
  right: 7.2%;
  top: -18px;
  z-index: 2;
}

.sb12:after {
  content: "";
  width: 0px;
  height: 0px;
  position: absolute;
  border-left: 10px solid transparent;
  border-right: 10px solid transparent;
  border-top: 10px solid transparent;
  border-bottom: 10px solid #ffd100;
  right: 7%;
  top: -20.5px;
}
.gender {
   background-color: #f5f5f5;
}
.gender_sel {
  background-color: #2b63c6;
}


  </style>

<!-- <div class="container-fluid mt-1">
      <div class="row">
        <div class="col-xs-4 pr-3 pl-2">
          <a href="{{ url('/mypage') }}"> <button type="button" class="btn blue">マイページへ戻る</button> </a>
        </div>
        <div class="col-xs-4 pr-3 pl-2">
          @if(! empty($m_user))
          <a href="{{ route('edit', $m_user->id) }}">  <button type="button" class="btn blue">Edit</button></a>
          @endif
        </div>
        <div class="col-xs-6 pl-2 pt-2">
          @if(! empty($m_user))
            <p class="text-break mb-0">あなたのレベルはLv.{{ $m_user->tour_level }}です。</p>
          @else
            <p class="text-break mb-0">あなたのレベルはLv.0です。</p>
          @endif
            <p class="text-break">ツアーの踏破に応じてレベルアップします。レベルアップすると・・・？</p>
        </div>
      </div>
    </div> -->
<form action="{{ route('store') }}" method="POST" >
  {{ csrf_field() }}
<!-- <div class="container-fluid">


      <div class="row">
        <div class="col">
          <p>1歩あたりの距離指定</p>
        </div>
      </div>
      <div class="row">
        <div class="col-3 pl-3">
          <div class="form-check form-check-inline pb-1">
            <input class="form-check-input" type="radio" required='true' name="gridRadios" id="inlineRadio1" value="3">
            <label class="form-check-label p-1" for="inlineRadio1">性別と身長から算出</label>
          </div>
          <br>
          <div class="form-check form-check-inline pt-2">
            <input class="form-check-input" type="radio" required='true' name="gridRadios" id="inlineRadio2" value="4">
            <label class="form-check-label" for="inlineRadio2">自由設定</label>
          </div>
        </div>
        <div class="col">
          <div class="container-fluid">
            <div class="form-group row p-0 m-0">
              <div class="col-3 p-0">
                <div class="input-group p-0 m-0 d-inline-block" style="width: 100%; height:100%; font-size:80%">
                  <select class="custom-select p-0" style="width: 100%; height:50%; font-size:70%" id="genderinput">
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                  </select>
                </div>
              </div>
              <div class="col-3 p-0 pl-1">
                <input type="number" class="form-control d-inline-block" name='inputheight' style="width: 100%; height:50%; font-size:50%" id="heightinput" min='112' max='213' placeholder="Height in cm">
              </div>
              <div class="col-3 p-0 pl-1">
                <button type="button" class="btn blue cal" style="width: 100%; height:50%; font-size:70%" onclick="calculateStride()">計算</button>
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
        <p style="font-size: 70%">※1歩あたりの距離指定は45Cm~85Cmの範囲である必要があります。</p>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <p>1日あたりの目標指定</p>
        </div>
      </div>
 <div class="row">
    <div class="col-3 pl-3">
      <div class="form-check form-check-inline pb-1">
            <input class="form-check-input" type="radio" required='true' name="radio_daily" id="inlineRadio3" value="5">
            <label class="form-check-label p-1" for="inlineRadio3">歩数で指定</label>
      </div>
          <br>
      <div class="form-check form-check-inline pt-2">
            <input class="form-check-input" type="radio" required='true' name="radio_daily" id="inlineRadio4" value="6">
            <label class="form-check-label" for="inlineRadio4">距離で指定</label>
      </div>
    </div>
        <div class="col">
          <div class="container">
            <div class="form-group row p-0 m-0 justify-content-end">
              <div class="col-6 p-0">
                <div class="d-flex flex-row-reverse p-0 d-inline-block justify-content-center">
                  <input type="number" name='dailygoal'  placeholder="Steps" class="form-control mx-0 my-0 d-inline-block" style="width: 100%; height:10%; font-size:70%" min="1001" max="181000" id="daily_stepsInput" onchange="estimateDailyDist()">
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
        <p style="font-size: 70%">※1日あたりの目標指定は100,000歩を超えない範囲である必要があります。</p>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <p>1ヵ月あたりの目標指定</p>
        </div>
      </div>
      <div class="row">
        <div class="col-3 pl-3">
          <div class="form-check form-check-inline pb-1">
            <input class="form-check-input" type="radio" required='true' name="radio_monthly" id="inlineRadio5" value="7">
            <label class="form-check-label p-1" for="inlineRadio5">日数で指定</label>
          </div>
          <br>
          <div class="form-check form-check-inline pt-2">
            <input class="form-check-input" type="radio" required='true' name="radio_monthly" id="inlineRadio6" value="8">
            <label class="form-check-label" for="inlineRadio6">距離で指定</label>
          </div>
        </div>
        <div class="col">
          <div class="container">
            <div class="form-group row p-0 m-0 justify-content-end">
              <div class="col-6 p-0">
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
        <p style="font-size: 70%">※1ヵ月あたりの目標指定は1000Kmを超えない範囲である必要があります。</p>
      </div>
    </div>
    <div class="container-fluid">
      <p>モーション表示の設定</p>
      <div class="d-flex flex-row justify-content-around justify-content-sm-start">
        <div class="form-check form-check-inline pl-3">
          <input class="form-check-input" type="checkbox" name='motionapp' id="inlineCheckbox1" value="1">
          <label class="form-check-label" for="inlineCheckbox1" style="font-size:70%">アプリでの表示はモーション表示あり</label>
        </div>
        <div class="form-check form-check-inline pl-3">
          <input class="form-check-input" type="checkbox" name='motionweb' id="inlineCheckbox2" value="1">
          <label class="form-check-label" for="inlineCheckbox2" style="font-size:70%">Webでの表示はモーション表示あり</label>
        </div>
      </div>
    </div>
    <div class="container pt-2">
      <div class="d-flex flex-row justify-content-center">
        <p style="font-size: 70%">※モーション表示の説明・・・・・・・・・・・・・</p>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-6 col-sm-3">
          <p style="font-size: 70%">現在選択中のツアー</p>
        </div>
        <div class="col-6">
          @if(! empty($t_tour))
            <p class="text-break" style="font-size: 70%">Tourname :- {{ $t_tour->m_tours->tour_title }} {{ $t_tour->status }}</p>
          @elseif( empty($t_tour))
            <p style="color: red; font-size: 70%">※選択中のツアーは既に踏破済です。</p>
          @endif
          @if( !empty($t_tour)  && $t_tour->status == 'Done' )
            <p style="color: red; font-size: 70%">※選択中のツアーは既に踏破済です。</p>
          @endif
        </div>
      </div>
    </div> -->
    <div class="contain-fluid sticky-top pb-0 mb-0" style="box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.5); background-color: #2b63c6;">
      <p class="p-2" style="color: #fff; font-size: 80%; font-weight: bold"> <span class="pl-2">設定</span> <span class="pl-2">></span>  <span class="pl-2">個人設定の変更</span> </p>
    </div>
    <div class="container-fluid pt-0 mt-0">
      <p class="w-100 text-center" style="font-weight: bold; color: #2b63c6;">最近の歩数</p>
      <p class="w-100 text-center overlay-line1"><img src="{{ asset('storage/settings/lineUp.png') }}" alt=""></p>
    </div>
    <div class="container-fluid">
      <div class="d-flex flex-row" style="border-bottom: 3px solid #2b63c6;">
        <img class="mt-1" src="{{ asset('storage/settings/ico-1@3x.png') }}" alt="" style="height: 20px">
        <p class="p-0 pb-1 m-0 pl-2" style="font-size: 110%; font-weight: bold; color: #2b63c6;">1歩あたりの距離</p>
      </div>
    </div>
    <div class="container-fluid pt-3">
      <p class="pl-2" style="font-size: 80%;">身長と性別を入力すると、目安を自動計算できます。</p>
    </div>
    <div class="container-fluid pt-3">
      <p class="pl-2" style="font-weight: bold; color: #2b63c6;">身長</p>
      <div class="d-flex flex-row pb-2" style="border-bottom: 3px solid rgb(248,252,253);">
        <input id="heightinput" type="number" name='inputheight' value="" class="d-none">
        <p class="pl-2" style="font-size: 110%;"> <span id="h_show" class="px-3 py-1" style="background-color: #f2f4f6; border: 1px solid #f2f4f6; border-radius: 5px;">175.5 cm</span> </p>
        <!-- <p class="text-center" style="width: 22px; height: 22px;border-radius: 20px; border: 1px solid #2b63c6;"> <span class="pb-3">+</span> </p> -->
        <p class="pl-2"><img id="h_add" src="{{ asset('storage/settings/btn_add@3x.png') }}" style="height: 22px; width: 22px;" class="" alt="" onclick="setHeight(this.id)"></p>
        <p class="pl-2"><img id="h_sub" src="{{ asset('storage/settings/btn_sub@3x.png') }}" style="height: 22px; width: 22px;" class="" alt="" onclick="setHeight(this.id)"></p>
      </div>
    </div>
    <div class="container-fluid pt-3">
      <p class="pl-2" style="font-weight: bold; color: #2b63c6;">性別</p>
      <div class="d-flex flex-row pb-3 justify-content-between" style="border-bottom: 3px solid rgb(248,252,253);">
        <div class="col pl-2">
          <button id="btn_male" type="button" name="button" class="text-center w-100 gender" style="height: 34px; border-color: transparent; border-radius: 5px;"
          onclick="setGender(this.id)">男性</button>
        </div>
        <div class="col pr-0">
          <button id="btn_female" type="button" name="button" class="text-center w-100 gender" style="height: 34px; border-color: transparent; border-radius: 5px;"
          onclick="setGender(this.id)">女性</button>
        </div>
      </div>
    </div>
    <div class="container-fluid pt-3 pb-3">
      <div class="d-flex flex-row justify-content-between">
        <p class="pl-2" style="font-weight: bold; color: #2b63c6;">1歩あたりの距離</p>
        <p class="w-50 text-center" style="color: #2b63c6; font-size: 80%; border-radius: 12px;border: solid 1px #2b63c6;">身長と性別から自動計算</p>
      </div>
      <div class="d-flex flex-row pb-2">
        <input id="strideinput" type="number"  name='stridelength' value="" class="d-none">
        <p  class="pl-2" style="font-size: 110%;"> <span id="stride_show" class="px-3 py-1" style="background-color: #f2f4f6; border: 1px solid #f2f4f6; border-radius: 5px;">62.0 cm</span> </p>
        <!-- <p class="text-center" style="width: 22px; height: 22px;border-radius: 20px; border: 1px solid #2b63c6;"> <span class="pb-3">+</span> </p> -->
        <p class="pl-2"><img id="stride_add" src="{{ asset('storage/settings/btn_add@3x.png') }}" style="height: 22px; width: 22px;" class="" alt="" onclick="setStride(this.id)"></p>
        <p class="pl-2"><img id="stride_sub" src="{{ asset('storage/settings/btn_sub@3x.png') }}" style="height: 22px; width: 22px;" class="" alt="" onclick="setStride(this.id)"></p>
      </div>
      <div class="box2 sb10 pl-2 d-flex flex-row justify-content-center">
        <div class="col-1">
          <img src="{{ asset('storage/settings/ico_ caution_b@3x.png') }}" alt="">
        </div>
        <div class="col-11">
          <p class="" style="color: #707070;">1歩あたりの距離指定は45cm~85cmの範囲である必要があります。</p>
        </div>
      </div>
    </div>
    <div class="container-fluid pt-3">
      <div class="d-flex flex-row" style="border-bottom: 3px solid #2b63c6;">
        <img class="mt-1" src="{{ asset('storage/settings/ico-1@3x.png') }}" alt="" style="height: 20px">
        <p class="p-0 pb-1 m-0 pl-2" style="font-size: 110%; font-weight: bold; color: #2b63c6;">1日あたりの目標</p>
      </div>
    </div>
    <div class="container-fluid pt-3 pb-3">
      <div class="d-flex flex-row pb-2 justify-content-between">
        <div class="col ml-0 pl-2" style="">
          <div class="d-flex flex-row">
            <input id="daily_stepsInput" type="number"  name='dailygoal' value="" class="d-none">
            <p class="" style="font-size: 110%;"> <span id="dailySteps_show" class="px-3 py-1" style="background-color: #f2f4f6; border: 1px solid #f2f4f6; border-radius: 5px;">6000 歩</span> </p>
            <!-- <p class="text-center" style="width: 22px; height: 22px;border-radius: 20px; border: 1px solid #2b63c6;"> <span class="pb-3">+</span> </p> -->
            <p class="pl-2"><img id="daily_steps_add" onclick="setDailySteps(this.id);" src="{{ asset('storage/settings/btn_add@3x.png') }}" style="height: 22px; width: 22px;" class="" alt=""></p>
            <p class="pl-2"><img id="daily_steps_sub" onclick="setDailySteps(this.id);" src="{{ asset('storage/settings/btn_sub@3x.png') }}" style="height: 22px; width: 22px;" class="" alt=""></p>
          </div>
        </div>
        <div class="col-3 px-0 mx-0">
          <p class="text-center" style="font-weight: bold; color: #2b63c6;">10.5 km</p>
        </div>
      </div>
      <div class="box2 sb11 pl-2 d-flex flex-row justify-content-center">
        <div class="col-1">
          <img src="{{ asset('storage/settings/ico_ caution_b@3x.png') }}" alt="">
        </div>
        <div class="col-11">
          <p class="" style="color: #707070;">1日あたりの目標指定は100,000歩を超えない範囲である必要があります。</p>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="d-flex flex-row" style="border-bottom: 3px solid #2b63c6;">
        <img class="mt-1" src="{{ asset('storage/settings/ico-1@3x.png') }}" alt="" style="height: 20px">
        <p class="p-0 pb-1 m-0 pl-2" style="font-size: 110%; font-weight: bold; color: #2b63c6;">1ヶ月あたりの目標</p>
      </div>
    </div>
    <div class="container-fluid pt-3">
      <p class="pl-2" style="font-size: 80%;">曜日ごとの目標距離を指定することで、1ヶ月の目標距離を自動で設定します。</p>
    </div>
    <div class="container-fluid" >
      <div class="d-flex flex-row justify-content-between">
        <p class="pl-2" style="font-size: 80%; font-weight: bold; color: #2b63c6;">曜日ごとの目標距離</p>
        <p class="w-50 text-center" style="color: #2b63c6; font-size: 80%; border-radius: 12px;border: solid 1px #2b63c6;">1日あたりの目標を反映</p>
      </div>
      <div class="d-flex flex-row pb-2">
        <input id="daily_stepsInput_1" type="number"  name='dailygoal_1' value="" class="d-none">
        <p class="pl-2 pt-1" style="color: #2b63c6; font-weight: bold; font-size: 80%;">月</p>
        <p class="pl-2" style="font-size: 110%;"> <span id="dailygoal_1_show" class="px-3 py-1" style="background-color: #f2f4f6; border: 1px solid #f2f4f6; border-radius: 5px;">3.6 km</span> </p>
        <p class="pl-2"><img id="dailygoal_1_add" onclick="getDailygoal1(this.id)" src="{{ asset('storage/settings/btn_add@3x.png') }}" style="height: 22px; width: 22px;" class="" alt=""></p>
        <p class="pl-2"><img id="dailygoal_1_sub" onclick="getDailygoal1(this.id)" src="{{ asset('storage/settings/btn_sub@3x.png') }}" style="height: 22px; width: 22px;" class="" alt=""></p>
      </div>
      <div class="d-flex flex-row pb-2">
        <input id="daily_stepsInput_2" type="number"  name='dailygoal_2' value="" class="d-none">
        <p class="pl-2 pt-1" style="color: #2b63c6; font-weight: bold; font-size: 80%;">火</p>
        <p class="pl-2" style="font-size: 110%;"> <span id="dailygoal_2_show" class="px-3 py-1" style="background-color: #f2f4f6; border: 1px solid #f2f4f6; border-radius: 5px;">3.6 km</span> </p>
        <p class="pl-2"><img id="dailygoal_2_add" onclick="getDailygoal2(this.id)" src="{{ asset('storage/settings/btn_add@3x.png') }}" style="height: 22px; width: 22px;" class="" alt=""></p>
        <p class="pl-2"><img id="dailygoal_2_sub" onclick="getDailygoal2(this.id)" src="{{ asset('storage/settings/btn_sub@3x.png') }}" style="height: 22px; width: 22px;" class="" alt=""></p>
      </div>
      <div class="d-flex flex-row pb-2">
        <input id="daily_stepsInput_3" type="number"  name='dailygoal_3' value="" class="d-none">
        <p class="pl-2 pt-1" style="color: #2b63c6; font-weight: bold; font-size: 80%;">水</p>
        <p class="pl-2" style="font-size: 110%;"> <span id="dailygoal_3_show" class="px-3 py-1" style="background-color: #f2f4f6; border: 1px solid #f2f4f6; border-radius: 5px;">3.6 km</span> </p>
        <p class="pl-2"><img id="dailygoal_3_add" onclick="getDailygoal3(this.id)" src="{{ asset('storage/settings/btn_add@3x.png') }}" style="height: 22px; width: 22px;" class="" alt=""></p>
        <p class="pl-2"><img id="dailygoal_3_sub" onclick="getDailygoal3(this.id)" src="{{ asset('storage/settings/btn_sub@3x.png') }}" style="height: 22px; width: 22px;" class="" alt=""></p>
      </div>
      <div class="d-flex flex-row pb-2">
        <input id="daily_stepsInput_4" type="number"  name='dailygoal_4' value="" class="d-none">
        <p class="pl-2 pt-1" style="color: #2b63c6; font-weight: bold; font-size: 80%;">木</p>
        <p class="pl-2" style="font-size: 110%;"> <span id="dailygoal_4_show" class="px-3 py-1" style="background-color: #f2f4f6; border: 1px solid #f2f4f6; border-radius: 5px;">3.6 km</span> </p>
        <p class="pl-2"><img id="dailygoal_4_add" onclick="getDailygoal4(this.id)" src="{{ asset('storage/settings/btn_add@3x.png') }}" style="height: 22px; width: 22px;" class="" alt=""></p>
        <p class="pl-2"><img id="dailygoal_4_sub" onclick="getDailygoal4(this.id)" src="{{ asset('storage/settings/btn_sub@3x.png') }}" style="height: 22px; width: 22px;" class="" alt=""></p>
      </div>
      <div class="d-flex flex-row pb-2">
        <input id="daily_stepsInput_5" type="number"  name='dailygoal_5' value="" class="d-none">
        <p class="pl-2 pt-1" style="color: #2b63c6; font-weight: bold; font-size: 80%;">金</p>
        <p class="pl-2" style="font-size: 110%;"> <span id="dailygoal_5_show" class="px-3 py-1" style="background-color: #f2f4f6; border: 1px solid #f2f4f6; border-radius: 5px;">3.6 km</span> </p>
        <p class="pl-2"><img id="dailygoal_5_add" onclick="getDailygoal5(this.id)" src="{{ asset('storage/settings/btn_add@3x.png') }}" style="height: 22px; width: 22px;" class="" alt=""></p>
        <p class="pl-2"><img id="dailygoal_5_sub" onclick="getDailygoal5(this.id)" src="{{ asset('storage/settings/btn_sub@3x.png') }}" style="height: 22px; width: 22px;" class="" alt=""></p>
      </div>
      <div class="d-flex flex-row pb-2">
        <input id="daily_stepsInput_6" type="number"  name='dailygoal_6' value="" class="d-none">
        <p class="pl-2 pt-1" style="color: #2b63c6; font-weight: bold; font-size: 80%;">土</p>
        <p class="pl-2" style="font-size: 110%;"> <span id="dailygoal_6_show" class="px-3 py-1" style="background-color: #f2f4f6; border: 1px solid #f2f4f6; border-radius: 5px;">3.6 km</span> </p>
        <p class="pl-2"><img id="dailygoal_6_add" onclick="getDailygoal6(this.id)" src="{{ asset('storage/settings/btn_add@3x.png') }}" style="height: 22px; width: 22px;" class="" alt=""></p>
        <p class="pl-2"><img id="dailygoal_6_sub" onclick="getDailygoal6(this.id)" src="{{ asset('storage/settings/btn_sub@3x.png') }}" style="height: 22px; width: 22px;" class="" alt=""></p>
      </div>
      <div class="d-flex flex-row pb-2" style="border-bottom: 3px solid rgb(248,252,253);">
        <input id="daily_stepsInput_7" type="number"  name='dailygoal_7' value="" class="d-none">
        <p class="pl-2 pt-1" style="color: #e28c8c; font-weight: bold; font-size: 80%;">日</p>
        <p class="pl-2" style="font-size: 110%;"> <span id="dailygoal_7_show" class="px-3 py-1" style="background-color: #f2f4f6; border: 1px solid #f2f4f6; border-radius: 5px;">3.6 km</span> </p>
        <p class="pl-2"><img id="dailygoal_7_add" onclick="getDailygoal7(this.id)" src="{{ asset('storage/settings/btn_add@3x.png') }}" style="height: 22px; width: 22px;" class="" alt=""></p>
        <p class="pl-2"><img id="dailygoal_7_sub" onclick="getDailygoal7(this.id)" src="{{ asset('storage/settings/btn_sub@3x.png') }}" style="height: 22px; width: 22px;" class="" alt=""></p>
      </div>
    </div>
    <div class="container-fluid pb-3">
      <div class="d-flex flex-row justify-content-between pt-3">
        <p class="pl-2 pt-1" style="font-size: 80%; font-weight: bold; color: #2b63c6;">曜日ごとの目標距離</p>
        <p class="pr-2 text-center" style="font-weight: bold; color: #2b63c6;">122.4 km</p>
      </div>
      <div class="box2 sb12 pl-2 d-flex flex-row justify-content-center">
        <div class="col-1">
          <img src="{{ asset('storage/settings/ico_ caution_b@3x.png') }}" alt="">
        </div>
        <div class="col-11">
          <p class="" style="color: #707070;">1日あたりの目標指定は100,000歩を超えない範囲である必要があります。</p>
        </div>
      </div>
    </div>
    <div class="container-fluid pt-3">
      <div class="d-flex flex-row" style="border-bottom: 3px solid #2b63c6;">
        <img class="mt-1" src="{{ asset('storage/settings/ico-1@3x.png') }}" alt="" style="height: 20px">
        <p class="p-0 pb-1 m-0 pl-2" style="font-size: 110%; font-weight: bold; color: #2b63c6;">モーション表示</p>
      </div>
    </div>
    <div class="container-fluid pt-3">
      <p class="px-2" style="font-size: 80%;">モーション表示の説明文が入ります。モーション表示の説明文が入ります。</p>
    </div>
    <div class="container-fluid pt-3">
      <div class="d-flex flex-row justify-content-between px-2" style="border-bottom: 3px solid rgb(248,252,253);">
        <p style="font-size: 80%; font-weight: bold; color: #2b63c6;">アプリでのモーション表示</p>
        <div class="custom-control custom-switch">
          <input name="motionapp" type="checkbox" class="custom-control-input" id="customSwitch1">
          <label class="custom-control-label" for="customSwitch1"> <span style="color: #2b63c6;">あり</span> </label>
        </div>
      </div>
      <div class="d-flex flex-row justify-content-between px-2 pt-3">
        <p style="font-size: 80%; font-weight: bold; color: #2b63c6;">Webでのモーション表示</p>
        <div class="custom-control custom-switch">
          <input name="motionweb" type="checkbox" class="custom-control-input" id="customSwitch2">
          <label class="custom-control-label" for="customSwitch2"> <span style="color: #2b63c6;">なし</span> </label>
        </div>
      </div>
    </div>
    <div class="container-fluid text-center pt-3">
      <button class="w-100 py-1" type="submit" name="button" style="border: solid 1px #2b63c6; background-color: #2b63c6; border-radius: 25px;
      font-size: 120%; font-weight: bold; color: #fff">変更内容を登録   &nbsp; <span style="font-size: 100%; font-weight: normal;">  ></span> </button>
      <button class="w-100 py-1 mt-3" type="button" name="button" style="border: solid 1px #2b63c6; background-color: rgba(255, 255, 255, 0); border-radius: 25px;
      font-size: 100%; font-weight: normal; color: #2b63c6;">キャンセル </button>
    </div>
    <div class="container-fluid text-center">
      <img src="{{ asset('storage/settings/bg@3x.png') }}" alt="" style="max-width: 100%;">
    </div>

    <script type="text/javascript">
        var gender = "";
        function setGender(id) {
          if (id == "btn_male") {
            document.getElementById(id).className = "text-center w-100 gender_sel";
            document.getElementById("btn_female").className = "text-center w-100 gender";
            gender = "male";
          } else {
            document.getElementById(id).className = "text-center w-100 gender_sel";
            document.getElementById("btn_male").className = "text-center w-100 gender";
            gender = "female";
          }
          console.log(gender);
        }
    </script>
    <script type="text/javascript">
        var height_p = document.getElementById("h_show");
        var height = "";
        function setHeight(id) {
          height = height_p.innerHTML;
          console.log(id);
          if (id == "h_add") {
            height = parseInt(height) + 1 + " cm";
            console.log(height);
          } else {
            height = parseInt(height) - 1 + " cm";
          }
          height_p.innerHTML = height;
          document.getElementById("heightinput").value = parseInt(height);
          console.log(document.getElementById("heightinput").value);
        }
    </script>
    <script type="text/javascript">
        var stride_p = document.getElementById("stride_show");
        var stride = "";
        function setStride(id) {
          stride = stride_p.innerHTML;
          if (id == "stride_add") {
            stride = parseInt(stride) + 1 + " cm";
          } else {
            stride = parseInt(stride) - 1 + " cm";
          }
          stride_p.innerHTML = stride;
          console.log(stride);
          document.getElementById("strideinput").value = parseInt(stride);
          console.log(document.getElementById("strideinput").value);
        }
    </script>
    <script type="text/javascript">
        var dailySteps_p = document.getElementById("dailySteps_show");
        var steps = "";
        function setDailySteps(id) {
          steps = dailySteps_p.innerHTML;
          if (id == "daily_steps_add") {
            steps = parseInt(steps) + 1 + " 歩";
          } else {
            steps = parseInt(steps) - 1 + " 歩";
          }
          dailySteps_p.innerHTML = steps;
          console.log(steps);
          document.getElementById("daily_stepsInput").value = parseInt(steps);
          console.log(document.getElementById("daily_stepsInput").value);
        }
    </script>
    <script type="text/javascript">
    var dailygoal_1_show = document.getElementById("dailygoal_1_show");
    var dailygoal_1 = "";
      function getDailygoal1(id) {
        dailygoal_1 = dailygoal_1_show.innerHTML;
        if (id == "dailygoal_1_add") {
          dailygoal_1 = parseInt(dailygoal_1) + 1 + " km";
        } else {
          dailygoal_1 = parseInt(dailygoal_1) - 1 + " km";
        }
        dailygoal_1_show.innerHTML = dailygoal_1;
        console.log(dailygoal_1);
        document.getElementById("daily_stepsInput_1").value = parseInt(dailygoal_1);
        console.log(document.getElementById("daily_stepsInput_1").value);
      }
    </script>
    <script type="text/javascript">
    var dailygoal_2_show = document.getElementById("dailygoal_2_show");
    var dailygoal_2 = "";
      function getDailygoal2(id) {
        dailygoal_2 = dailygoal_2_show.innerHTML;
        if (id == "dailygoal_2_add") {
          dailygoal_2 = parseInt(dailygoal_2) + 1 + " km";
        } else {
          dailygoal_2 = parseInt(dailygoal_2) - 1 + " km";
        }
        dailygoal_2_show.innerHTML = dailygoal_2;
        console.log(dailygoal_2);
        document.getElementById("daily_stepsInput_2").value = parseInt(dailygoal_2);
        console.log(document.getElementById("daily_stepsInput_2").value);
      }
    </script>
    <script type="text/javascript">
    var dailygoal_3_show = document.getElementById("dailygoal_3_show");
    var dailygoal_3 = "";
      function getDailygoal3(id) {
        dailygoal_3 = dailygoal_3_show.innerHTML;
        if (id == "dailygoal_3_add") {
          dailygoal_3 = parseInt(dailygoal_3) + 1 + " km";
        } else {
          dailygoal_3 = parseInt(dailygoal_3) - 1 + " km";
        }
        dailygoal_3_show.innerHTML = dailygoal_3;
        console.log(dailygoal_3);
        document.getElementById("daily_stepsInput_3").value = parseInt(dailygoal_3);
        console.log(document.getElementById("daily_stepsInput_3").value);
      }
    </script>
    <script type="text/javascript">
    var dailygoal_4_show = document.getElementById("dailygoal_4_show");
    var dailygoal_4 = "";
      function getDailygoal4(id) {
        dailygoal_4 = dailygoal_4_show.innerHTML;
        if (id == "dailygoal_4_add") {
          dailygoal_4 = parseInt(dailygoal_4) + 1 + " km";
        } else {
          dailygoal_4 = parseInt(dailygoal_4) - 1 + " km";
        }
        dailygoal_4_show.innerHTML = dailygoal_4;
        console.log(dailygoal_4);
        document.getElementById("daily_stepsInput_4").value = parseInt(dailygoal_4);
        console.log(document.getElementById("daily_stepsInput_4").value);
      }
    </script>
    <script type="text/javascript">
    var dailygoal_5_show = document.getElementById("dailygoal_5_show");
    var dailygoal_5 = "";
      function getDailygoal5(id) {
        dailygoal_5 = dailygoal_5_show.innerHTML;
        if (id == "dailygoal_5_add") {
          dailygoal_5 = parseInt(dailygoal_5) + 1 + " km";
        } else {
          dailygoal_5 = parseInt(dailygoal_5) - 1 + " km";
        }
        dailygoal_5_show.innerHTML = dailygoal_5;
        console.log(dailygoal_5);
        document.getElementById("daily_stepsInput_5").value = parseInt(dailygoal_5);
        console.log(document.getElementById("daily_stepsInput_5").value);
      }
    </script>
    <script type="text/javascript">
    var dailygoal_6_show = document.getElementById("dailygoal_6_show");
    var dailygoal_6 = "";
      function getDailygoal6(id) {
        dailygoal_6 = dailygoal_6_show.innerHTML;
        if (id == "dailygoal_6_add") {
          dailygoal_6 = parseInt(dailygoal_6) + 1 + " km";
        } else {
          dailygoal_6 = parseInt(dailygoal_6) - 1 + " km";
        }
        dailygoal_6_show.innerHTML = dailygoal_6;
        console.log(dailygoal_6);
        document.getElementById("daily_stepsInput_6").value = parseInt(dailygoal_6);
        console.log(document.getElementById("daily_stepsInput_6").value);
      }
    </script>
    <script type="text/javascript">
    var dailygoal_7_show = document.getElementById("dailygoal_7_show");
    var dailygoal_7 = "";
      function getDailygoal7(id) {
        dailygoal_7 = dailygoal_7_show.innerHTML;
        if (id == "dailygoal_7_add") {
          dailygoal_7 = parseInt(dailygoal_7) + 1 + " km";
        } else {
          dailygoal_7 = parseInt(dailygoal_7) - 1 + " km";
        }
        dailygoal_7_show.innerHTML = dailygoal_7;
        console.log(dailygoal_7);
        document.getElementById("daily_stepsInput_7").value = parseInt(dailygoal_7);
        console.log(document.getElementById("daily_stepsInput_7").value);
      }
    </script>
    <!-- <div class="container-fluid p-1">
      <div class="d-flex flex-row-reverse">
        <button type="submit" class="btn blue">ツアーを選択</button>
      </div>
    </div> -->
  </form>
  <!-- <script type="text/javascript">
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
  </script> -->

@endsection
