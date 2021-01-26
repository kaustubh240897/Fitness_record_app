@extends('layouts.app')

@section('content')

<!-- @if (session('successMsg'))
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
@endif -->
<head>
  <link rel="stylesheet" href="/css/style_create.css">
</head>
@if ($errors->any())
  @foreach ($errors->all() as $error)
    <div class='alert alert-danger' role='alert'>
      {{ $error }}
    </div>
  @endforeach
@endif

<body class="d-none">

  <div class="fixed-top">
    <div class="container-fluid bg-white  py-0 my-0 px-3" style="height:28px !important;">
      <div class="d-flex flex-row justify-content-between">
        <div class="p-0">
          <img src="{{ asset('storage/mypage/ico_back.png') }}" alt="" onclick="goBack()" style="cursor: pointer;">
        </div>
        <div class="p-0">
          <p class="text-center" style="font-size: 120%">ウォーキング</p>
        </div>
        <div class="p-0">
          <a href="/padometerscreen"><img src="{{ asset('storage/mypage/close.png') }}" alt=""></a>
        </div>
      </div>
    </div>
    <script>
    function goBack() {
      window.history.back();
    }
    </script>
    <div class="container-fluid p-0 m-0 w-100" style="box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.5); background-color: #2b63c6;">
      <p class="p-2 w-100" style="color: #fff; font-size: 80%; font-weight: bold"> <span class="pl-2">設定</span> <span class="pl-2">></span>  <span class="pl-2">個人設定の変更</span> </p>
    </div>
  </div>
<form action="{{ route('store') }}" method="POST" >
  {{ csrf_field() }}

  <div class="container-fluid pt-0 mt-0" style="margin-top: 70px !important">
    <p class=" text-center" style="font-weight: bold; color: #2b63c6;">最近の歩数</p>
    <p class=" text-center overlay-line1"><img src="{{ asset('storage/settings/lineUp.png') }}" alt="" style="max-width: 100%"></p>
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
        <div class="col-4 pl-2">
          <div class="d-flex flex-row">
            <input id="heightinput" class="w-100" type="number" step="any" name='inputheight' value="170" onchange="heightChange()" required><span  class=" pl-1  " style="background-color: #f2f4f6; margin-left:-20px;;">cm</span>
          </div>
        </div>
        <!-- <p class="pl-2" style="font-size: 110%;"> <span id="h_show" class="px-3 py-1" style="background-color: #f2f4f6; border: 1px solid #f2f4f6; border-radius: 5px;">175.5 cm</span> </p> -->
        <!-- <p class="text-center" style="width: 22px; height: 22px;border-radius: 20px; border: 1px solid #2b63c6;"> <span class="pb-3">+</span> </p> -->
        <p class="pl-3"><img id="h_add" src="{{ asset('storage/settings/btn_add@3x.png') }}" style="height: 22px; width: 22px;" class="" alt="" onclick="setHeight(this.id)"></p>
        <p class="pl-3"><img id="h_sub" src="{{ asset('storage/settings/btn_sub@3x.png') }}" style="height: 22px; width: 22px;" class="" alt="" onclick="setHeight(this.id)"></p>
      </div>
    </div>
    <div class="container-fluid pt-3">
      <p class="pl-2" style="font-weight: bold; color: #2b63c6;">性別</p>
      <div class="d-flex flex-row pb-3 justify-content-between" style="border-bottom: 3px solid rgb(248,252,253);">
        <input id="input_gender" type="number" name="gender_input" class="d-none" value="0" required>
        <div class="col pl-2">
          <button id="btn_male" type="button" name="button" class="text-center w-100 gender_sel" style="height: 34px; border-color: transparent; border-radius: 5px;"
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
        <button type="button" onclick="calculateStride()" class="w-50 h-25 py-0 my-0 text-center" style="background: #fff; color: #2b63c6; font-size: 80%; border-radius: 12px;border: solid 1px #2b63c6;">身長と性別から自動計算</button>
      </div>
      <div class="d-flex flex-row pb-2">
        <!-- <input id="strideinput" type="number"  name='stridelength' value="" class="d-none"> -->
        <div class="col-4 pl-2">
          <div class="d-flex flex-row">
            <input id="strideinput" class="w-100" type="number" step="any" name='stridelength' value="76.5" min="45" max="85" onchange="strideChange()" required><span class=" pl-1  " style="background-color: #f2f4f6; margin-left:-20px;;">cm</span>
          </div>
        </div>
        <!-- <p class="text-center" style="width: 22px; height: 22px;border-radius: 20px; border: 1px solid #2b63c6;"> <span class="pb-3">+</span> </p> -->
        <p class="pl-3"><img id="stride_add" src="{{ asset('storage/settings/btn_add@3x.png') }}" style="height: 22px; width: 22px;" class="" alt="" onclick="setStride(this.id)"></p>
        <p class="pl-3"><img id="stride_sub" src="{{ asset('storage/settings/btn_sub@3x.png') }}" style="height: 22px; width: 22px;" class="" alt="" onclick="setStride(this.id)"></p>
      </div>
      <div id="stride_error" class="box2 sb10 pl-2  flex-row justify-content-center d-none">
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
        <div class="col w-100 ml-0 pl-2" style="">
          <div class="d-flex flex-row">
            <!-- <input id="daily_stepsInput" type="number"  name='dailygoal' value="" class="d-none"> -->
            <div class="col-4 pl-2">
              <div class="d-flex flex-row">
                <input id="daily_stepsInput" class="w-100" type="number"  name='dailygoal' value="" min="0" max="100000" onchange="dailyStepsChange()" required><span class=" pl-1  " style="background-color: #f2f4f6; margin-left:-20px;;">歩</span>
              </div>
            </div>
            <!-- <p class="text-center" style="width: 22px; height: 22px;border-radius: 20px; border: 1px solid #2b63c6;"> <span class="pb-3">+</span> </p> -->
            <p class="pl-3"><img id="daily_steps_add" onclick="setDailySteps(this.id);" src="{{ asset('storage/settings/btn_add@3x.png') }}" style="height: 22px; width: 22px;" class="" alt=""></p>
            <p class="pl-3"><img id="daily_steps_sub" onclick="setDailySteps(this.id);" src="{{ asset('storage/settings/btn_sub@3x.png') }}" style="height: 22px; width: 22px;" class="" alt=""></p>
          </div>
        </div>
        <div class="col-2 px-0 mx-0">
          <p id="est_daily_dist" class="text-center" style="font-weight: bold; color: #2b63c6;">4.5 km</p>
        </div>
      </div>
      <div id="dailySteps_error" class="box2 sb11 pl-2  flex-row justify-content-center d-none">
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
        <button type="button" onclick="copyGoal()" class="w-50 py-0 my-0 text-center mb-3" style="background: #fff; color: #2b63c6; font-size: 80%; border-radius: 12px;border: solid 1px #2b63c6;">1日あたりの目標を反映</button>
        <!-- <p class="w-50 text-center" style="color: #2b63c6; font-size: 80%; border-radius: 12px;border: solid 1px #2b63c6;">1日あたりの目標を反映</p> -->
      </div>
      <div class="d-flex flex-row pb-2">
        <!-- <input id="daily_stepsInput_1" type="number"  name='dailygoal_1' value="" class="d-none"> -->
        <p class="pl-2 pt-1" style="color: #2b63c6; font-weight: bold; font-size: 80%;">月</p>
        <div class="col-4">
          <div class="d-flex flex-row">
            <input id="daily_stepsInput_1" class="w-100" type="number" step="any" name='dailygoal_1' value="" max="85" min="0" onchange="daily_difStepsChange()" required><span class=" pl-1  " style="background-color: #f2f4f6; margin-left:-20px;;">km</span>
          </div>
        </div>
        <p class="pl-3"><img id="dailygoal_1_add" onclick="getDailygoal1(this.id)" src="{{ asset('storage/settings/btn_add@3x.png') }}" style="height: 22px; width: 22px;" class="" alt=""></p>
        <p class="pl-3"><img id="dailygoal_1_sub" onclick="getDailygoal1(this.id)" src="{{ asset('storage/settings/btn_sub@3x.png') }}" style="height: 22px; width: 22px;" class="" alt=""></p>
      </div>
      <div class="d-flex flex-row pb-2">
        <!-- <input id="daily_stepsInput_2" type="number"  name='dailygoal_2' value="" class="d-none"> -->
        <p class="pl-2 pt-1" style="color: #2b63c6; font-weight: bold; font-size: 80%;">火</p>
        <div class="col-4">
          <div class="d-flex flex-row">
            <input id="daily_stepsInput_2" class="w-100" type="number" step="any" name='dailygoal_2' value="" max="85" min="0" onchange="daily_difStepsChange()" required><span class=" pl-1  " style="background-color: #f2f4f6; margin-left:-20px;;">km</span>
          </div>
        </div>
        <p class="pl-3"><img id="dailygoal_2_add" onclick="getDailygoal2(this.id)" src="{{ asset('storage/settings/btn_add@3x.png') }}" style="height: 22px; width: 22px;" class="" alt=""></p>
        <p class="pl-3"><img id="dailygoal_2_sub" onclick="getDailygoal2(this.id)" src="{{ asset('storage/settings/btn_sub@3x.png') }}" style="height: 22px; width: 22px;" class="" alt=""></p>
      </div>
      <div class="d-flex flex-row pb-2">
        <!-- <input id="daily_stepsInput_3" type="number"  name='dailygoal_3' value="" class="d-none"> -->
        <p class="pl-2 pt-1" style="color: #2b63c6; font-weight: bold; font-size: 80%;">水</p>
        <div class="col-4">
          <div class="d-flex flex-row">
            <input id="daily_stepsInput_3" class="w-100" type="number" step="any" name='dailygoal_3' value="" max="85" min="0" onchange="daily_difStepsChange()" required><span class=" pl-1  " style="background-color: #f2f4f6; margin-left:-20px;;">km</span>
          </div>
        </div>
        <p class="pl-3"><img id="dailygoal_3_add" onclick="getDailygoal3(this.id)" src="{{ asset('storage/settings/btn_add@3x.png') }}" style="height: 22px; width: 22px;" class="" alt=""></p>
        <p class="pl-3"><img id="dailygoal_3_sub" onclick="getDailygoal3(this.id)" src="{{ asset('storage/settings/btn_sub@3x.png') }}" style="height: 22px; width: 22px;" class="" alt=""></p>
      </div>
      <div class="d-flex flex-row pb-2">
        <!-- <input id="daily_stepsInput_4" type="number"  name='dailygoal_4' value="" class="d-none"> -->
        <p class="pl-2 pt-1" style="color: #2b63c6; font-weight: bold; font-size: 80%;">木</p>
        <div class="col-4">
          <div class="d-flex flex-row">
            <input id="daily_stepsInput_4" class="w-100" type="number" step="any" name='dailygoal_4' value="" max="85" min="0" onchange="daily_difStepsChange()" required><span class=" pl-1  " style="background-color: #f2f4f6; margin-left:-20px;;">km</span>
          </div>
        </div>
        <p class="pl-3"><img id="dailygoal_4_add" onclick="getDailygoal4(this.id)" src="{{ asset('storage/settings/btn_add@3x.png') }}" style="height: 22px; width: 22px;" class="" alt=""></p>
        <p class="pl-3"><img id="dailygoal_4_sub" onclick="getDailygoal4(this.id)" src="{{ asset('storage/settings/btn_sub@3x.png') }}" style="height: 22px; width: 22px;" class="" alt=""></p>
      </div>
      <div class="d-flex flex-row pb-2">
        <!-- <input id="daily_stepsInput_5" type="number"  name='dailygoal_5' value="" class="d-none"> -->
        <p class="pl-2 pt-1" style="color: #2b63c6; font-weight: bold; font-size: 80%;">金</p>
        <div class="col-4">
          <div class="d-flex flex-row">
            <input id="daily_stepsInput_5" class="w-100" type="number" step="any"  name='dailygoal_5' value="" max="85" min="0" onchange="daily_difStepsChange()" required><span class=" pl-1  " style="background-color: #f2f4f6; margin-left:-20px;;">km</span>
          </div>
        </div>
        <p class="pl-3"><img id="dailygoal_5_add" onclick="getDailygoal5(this.id)" src="{{ asset('storage/settings/btn_add@3x.png') }}" style="height: 22px; width: 22px;" class="" alt=""></p>
        <p class="pl-3"><img id="dailygoal_5_sub" onclick="getDailygoal5(this.id)" src="{{ asset('storage/settings/btn_sub@3x.png') }}" style="height: 22px; width: 22px;" class="" alt=""></p>
      </div>
      <div class="d-flex flex-row pb-2">
        <!-- <input id="daily_stepsInput_6" type="number"  name='dailygoal_6' value="" class="d-none"> -->
        <p class="pl-2 pt-1" style="color: #2b63c6; font-weight: bold; font-size: 80%;">土</p>
        <div class="col-4">
          <div class="d-flex flex-row">
            <input id="daily_stepsInput_6" class="w-100" type="number" step="any" name='dailygoal_6' value="" max="85" min="0" onchange="daily_difStepsChange()" required><span class=" pl-1  " style="background-color: #f2f4f6; margin-left:-20px;;">km</span>
          </div>
        </div>
        <p class="pl-3"><img id="dailygoal_6_add" onclick="getDailygoal6(this.id)" src="{{ asset('storage/settings/btn_add@3x.png') }}" style="height: 22px; width: 22px;" class="" alt=""></p>
        <p class="pl-3"><img id="dailygoal_6_sub" onclick="getDailygoal6(this.id)" src="{{ asset('storage/settings/btn_sub@3x.png') }}" style="height: 22px; width: 22px;" class="" alt=""></p>
      </div>
      <div class="d-flex flex-row pb-2" style="border-bottom: 3px solid rgb(248,252,253);">
        <!-- <input id="daily_stepsInput_7" type="number"  name='dailygoal_7' value="" class="d-none"> -->
        <p class="pl-2 pt-1" style="color: #e28c8c; font-weight: bold; font-size: 80%;">日</p>
        <div class="col-4">
          <div class="d-flex flex-row">
            <input id="daily_stepsInput_7" class="w-100" type="number" step="any" name='dailygoal_7' value="" max="85" min="0" onchange="daily_difStepsChange()" required><span class=" pl-1  " style="background-color: #f2f4f6; margin-left:-20px;;">km</span>
          </div>
        </div>
        <p class="pl-3"><img id="dailygoal_7_add" onclick="getDailygoal7(this.id)" src="{{ asset('storage/settings/btn_add@3x.png') }}" style="height: 22px; width: 22px;" class="" alt=""></p>
        <p class="pl-3"><img id="dailygoal_7_sub" onclick="getDailygoal7(this.id)" src="{{ asset('storage/settings/btn_sub@3x.png') }}" style="height: 22px; width: 22px;" class="" alt=""></p>
      </div>
    </div>
    <div class="container-fluid pb-3">
      <div class="d-flex flex-row justify-content-between pt-3">
        <p class="pl-2 pt-1" style="font-size: 80%; font-weight: bold; color: #2b63c6;">曜日ごとの目標距離</p>
        <p id="est_monthly_dist" class="pr-2 text-center" style="font-weight: bold; color: #2b63c6;">122.4 km</p>
      </div>
      <div id="error_monthDist" class="box2 sb12 pl-2 d-none flex-row justify-content-center">
        <div class="col-1">
          <img src="{{ asset('storage/settings/ico_ caution_b@3x.png') }}" alt="">
        </div>
        <div class="col-11">
          <p class="" style="color: #707070;">1ヵ月あたりの目標指定は2500kmを超えない範囲である必要があります。</p>
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
          <input name="motionapp" type="checkbox" class="custom-control-input" id="customSwitch1" onchange="motionAppChange(this.id)">
          <label class="custom-control-label" for="customSwitch1"> <span id="motion_app_text" style="color: #2b63c6;">あり</span> </label>
        </div>
      </div>
      <div class="d-flex flex-row justify-content-between px-2 pt-3">
        <p style="font-size: 80%; font-weight: bold; color: #2b63c6;">Webでのモーション表示</p>
        <div class="custom-control custom-switch">
          <input name="motionweb" type="checkbox" class="custom-control-input" id="customSwitch2" onchange="motionWebChange(this.id)">
          <label class="custom-control-label" for="customSwitch2"> <span id="motion_web_text" style="color: #2b63c6;">なし</span> </label>
        </div>
      </div>
    </div>
    <div class="container-fluid text-center pt-3">
      <button class="w-100 py-1" type="submit"  id="myBtn" name="button" style="border: solid 1px #2b63c6; background-color: #2b63c6; border-radius: 25px;
      font-size: 120%; font-weight: bold; color: #fff">変更内容を登録   &nbsp; <span style="font-size: 100%; font-weight: normal;">  ></span> </button>
      <a href="/padometerscreen"><button class="w-100 py-1 mt-3" type="button" name="button" style="border: solid 1px #2b63c6; background-color: rgba(255, 255, 255, 0); border-radius: 25px;
      font-size: 100%; font-weight: normal; color: #2b63c6;">キャンセル </button></a>
    </div>
    <div class="container-fluid text-center">
      <img src="{{ asset('storage/settings/bg@3x.png') }}" alt="" style="max-width: 100%;">
    </div>
    <div class="container-fluid navfix" style="background-color: #2b63c6;">
      <div class="row d-flex text-center">
        <div class="col-3 padding-0 pt-2 navItem" style="border-right: 2px solid #113a83;" id="box1" onclick="navItemClick(this.id);">
          <a href='/mypage'>
            <img id="box1_img" class="pb-0 mb-0" src="{{asset('storage/mypage/box1.png')}}" alt="">
            <p id="box1_title" class="pt-0 mt-0" style="font-size: 60%; font-weight: normal;text-align: center;color: #fff;">マイページ</p>
        </a>
        </div>
        <div class="col-3 padding-0 pt-2 navItem" style="border-right: 2px solid #113a83;" id="box2" onclick="navItemClick(this.id);">
          <a href='/mycollection'>
            <img id="box2_img" class="pb-0 mb-0" src="{{asset('storage/mypage/box2.png')}}" alt="">
            <p id="box2_title" class="pt-0 mt-0" style="font-size: 60%; font-weight: normal;text-align: center;color: #fff;">コレクション</p>
          </a>
        </div>
        <div class="col-3 padding-0 pt-2 navItem" style="border-right: 2px solid #113a83;" id="box3" onclick="navItemClick(this.id);">
          <a href="{{ route('userhistory', [now()->year,now()->month]) }}" >
            <img id="box3_img" class="pb-0 mb-0" src="{{asset('storage/mypage/box3.png')}}" alt="">
            <p id="box3_title" class="pt-0 mt-0" style="font-size: 60%; font-weight: normal;text-align: center;color: #ffffff;">マイヒストリ</p>
          </a>
        </div>
        <div class="col-3 padding-0 pt-2 navItem is-active" id="box4" onclick="navItemClick(this.id);">
          <a href="/showprofiledetails">
            <img id="box4_img" class="pb-0 mb-0" src="{{asset('storage/mypage/box4_sel.png')}}" alt="">
            <p id="box4_title" class="pt-0 mt-0" style="font-size: 60%; font-weight: bold;text-align: center;color: #fddb66;">設定</p>
          </a>
        </div>
      </div>
    </div>
    <script type="text/javascript">



    </script>
    <script type="text/javascript">
      var h_input = document.getElementById("heightinput");
      var s_input = document.getElementById("strideinput");
      var ds_input = document.getElementById("daily_stepsInput");
      var gender = "male";

      var ds_1 = document.getElementById("daily_stepsInput_1");
      var ds_2 = document.getElementById("daily_stepsInput_2");
      var ds_3 = document.getElementById("daily_stepsInput_3");
      var ds_4 = document.getElementById("daily_stepsInput_4");
      var ds_5 = document.getElementById("daily_stepsInput_5");
      var ds_6 = document.getElementById("daily_stepsInput_6");
      var ds_7 = document.getElementById("daily_stepsInput_7");

      var cb1 = document.getElementById("customSwitch1");
      var cb2 = document.getElementById("customSwitch2");
      cb1.checked = true;
      cb2.checked = false;

      h_input.value = 170;
      s_input.value = 76.5;
      ds_input.value = 6000;
      ds_1.value = 3.6;
      ds_2.value = 3.6;
      ds_3.value = 3.6;
      ds_4.value = 3.6;
      ds_5.value = 3.6;
      ds_6.value = 3.6;
      ds_7.value = 3.6;


      function heightChange() {
        // if (h_input.value < 45 || h_input.value >85 ) {
        //   console.log("invalidHeight");
        // }
        console.log("hc");
      }

      function fixStride() {
          if (s_input.value < 45) {
            s_input.value = 45;
          } else if (s_input.value > 85) {
            s_input.value = 85;
          }
          strideChange();
      }

      function strideChange() {
        if (s_input.value < 45 || s_input.value >85 ) {
          console.log("invalidStride");
          s_input.setCustomValidity(" ");
          document.getElementById("stride_error").className = "box2 sb10 pl-2  flex-row justify-content-center d-flex";
          fixStride();
        } else {
          s_input.setCustomValidity("");
          document.getElementById("stride_error").className = "box2 sb10 pl-2  flex-row justify-content-center d-none";
        }
        console.log("sc");
      }
      function dailyStepsChange() {
        if (ds_input.value < 0 || ds_input.value > 100000 ) {
          console.log("invalidStride");
          ds_input.setCustomValidity(" ");
          document.getElementById("dailySteps_error").className = "box2 sb11 pl-2  flex-row justify-content-center d-flex";
        } else {
          ds_input.setCustomValidity("");
          document.getElementById("dailySteps_error").className = "box2 sb11 pl-2  flex-row justify-content-center d-none";
        }
        console.log("dsc");
      }
      function removeDefError() {
        if (ds_7.value < 0 || ds_7.value > 85) {
          ds_7.setCustomValidity(" ");
          console.log("inval");
        } else {
          ds_7.setCustomValidity("");
          console.log("val");
        }
        if (ds_6.value < 0 || ds_6.value > 85) {
          ds_6.setCustomValidity(" ");
          console.log("inval");
        } else {
          ds_6.setCustomValidity("");
          console.log("val");
        }
        if (ds_5.value < 0 || ds_5.value > 85) {
          ds_5.setCustomValidity(" ");
          console.log("inval");
        } else {
          ds_5.setCustomValidity("");
          console.log("val");
        }
        if (ds_4.value < 0 || ds_4.value > 85) {
          ds_4.setCustomValidity(" ");
          console.log("inval");
        } else {
          ds_4.setCustomValidity("");
          console.log("val");
        }
        if (ds_3.value < 0 || ds_3.value > 85) {
          ds_3.setCustomValidity(" ");
          console.log("inval");
        } else {
          ds_3.setCustomValidity("");
          console.log("val");
        }
        if (ds_2.value < 0 || ds_2.value > 85) {
          ds_2.setCustomValidity(" ");
          console.log("inval");
        } else {
          ds_2.setCustomValidity("");
          console.log("val");
        }
        if (ds_1.value < 0 || ds_1.value > 85) {
          ds_1.setCustomValidity(" ");
          console.log("inval");
        } else {
          ds_1.setCustomValidity("");
          console.log("val");
        }
      }
      function daily_difStepsChange() {
        removeDefError();
        var total_dist = parseFloat(ds_1.value)  + parseFloat(ds_2.value)  + parseFloat(ds_3.value)  + parseFloat(ds_4.value)
        + parseFloat(ds_5.value)  + parseFloat(ds_6.value)  + parseFloat(ds_7.value) ;
        document.getElementById("est_monthly_dist").innerHTML = parseFloat(total_dist*4).toFixed(2) + " km";
        if ((parseInt(total_dist*4)) > 2500) {
          document.getElementById("error_monthDist").className = "box2 sb12 pl-2 d-flex flex-row justify-content-center"
        } else {
          document.getElementById("error_monthDist").className = "box2 sb12 pl-2 d-none flex-row justify-content-center"
        }
      }
      function copyGoal() {
        var d_goal_dist = parseFloat(document.getElementById("est_daily_dist").innerHTML);
        ds_1.value =  d_goal_dist;
        ds_2.value =  d_goal_dist;
        ds_3.value =  d_goal_dist;
        ds_4.value =  d_goal_dist;
        ds_5.value =  d_goal_dist;
        ds_6.value =  d_goal_dist;
        ds_7.value =  d_goal_dist;
        daily_difStepsChange();
      }
      function motionAppChange(id) {
        if (cb1.checked) {
          console.log("true");
          document.getElementById("motion_app_text").innerHTML = "あり";
        } else {
          document.getElementById("motion_app_text").innerHTML = "なし";
        }
      }
      function motionWebChange(id) {
        if (cb2.checked) {
          console.log("true");
          document.getElementById("motion_web_text").innerHTML = "あり";
        } else {
          document.getElementById("motion_web_text").innerHTML = "なし";
        }
      }
    </script>
    <script type="text/javascript">
        // var height_p = document.getElementById("h_show");
        var h_input = document.getElementById("heightinput");
        var height = "";
        function setHeight(id) {
          height = h_input.value;
          console.log(id);
          if (id == "h_add") {
            height = parseFloat(height) + 0.5;
            console.log(height);
          } else {
            height -= 0.5;
          }
          //height_p.innerHTML = height;
          h_input.value = height;
          console.log(document.getElementById("heightinput").value);
        }

    </script>
    <script type="text/javascript">

        //var stride_p = document.getElementById("stride_show");
        var s_input = document.getElementById("strideinput");
        var stride = "";
        function setStride(id) {
          stride = s_input.value;
          if (id == "stride_add") {
            stride = parseFloat(stride) + 0.5 ;
          } else {
            stride -= 0.5;
          }
          // stride_p.innerHTML = stride;
          console.log(stride);
          if (stride >= 45 && stride <= 85) {
            s_input.value = stride;
          } else {
            if (s_input.value < 45) {
              s_input.value = 45;
            } else if (s_input.value > 85) {
              s_input.value = 85;
            }
          }
          console.log(document.getElementById("strideinput").value);
          strideChange();
        }
        function setGender(id) {
          if (id == "btn_male") {
            document.getElementById(id).className = "text-center w-100 gender_sel";
            document.getElementById("btn_female").className = "text-center w-100 gender";
            gender = "male";
            document.getElementById("input_gender").value = 0;
          } else {
            document.getElementById(id).className = "text-center w-100 gender_sel";
            document.getElementById("btn_male").className = "text-center w-100 gender";
            gender = "female";
            document.getElementById("input_gender").value = 1;
          }
          console.log(document.getElementById("input_gender").value);
        }
        function calculateStride() {
          var x = document.getElementById("heightinput").value;
          var strideLength = 0;
          if (gender == "male") {
            strideLength = (x/2.5).toFixed(0);
          } else {
            strideLength = (x/3).toFixed(0);
          }
          if (strideLength>85) {
            strideLength = 85;
          }
          if (strideLength<45) {
            strideLength = 45;
          }
          s_input.value = strideLength;
        }
    </script>
    <script type="text/javascript">
        // var dailySteps_p = document.getElementById("dailySteps_show");
        var ds_input = document.getElementById("daily_stepsInput");
        var steps = "";
        function setDailySteps(id) {
          steps = ds_input.value;
          if (id == "daily_steps_add") {
            steps = parseFloat(steps) + 1;
          } else {
            steps -= 1;
          }
          // dailySteps_p.innerHTML = steps;
          console.log(steps);
          if (steps > 100000) {
            steps = 100000;
          }
          ds_input.value = steps;
          console.log(document.getElementById("daily_stepsInput").value);
          var daily_steps = steps;



          var p_dailyEstDist = document.getElementById("est_daily_dist");

          var stride_value = document.getElementById("strideinput").value;

          if (daily_steps>=1) {
            p_dailyEstDist.innerHTML = ((daily_steps * stride_value)/100000).toFixed(2) + " km";
          }
          dailyStepsChange();
        }
    </script>
    <script type="text/javascript">
    // var dailygoal_1_show = document.getElementById("dailygoal_1_show");
    var ds_1 = document.getElementById("daily_stepsInput_1");
    var dailygoal_1 = "";
      function getDailygoal1(id) {
        dailygoal_1 = ds_1.value;
        if (id == "dailygoal_1_add") {
          dailygoal_1 = parseFloat(dailygoal_1) + 1;
        } else {
          dailygoal_1 -= 1;
        }
        // dailygoal_1_show.innerHTML = dailygoal_1;
        console.log(dailygoal_1);
        ds_1.value = dailygoal_1.toFixed(2);
        console.log(document.getElementById("daily_stepsInput_1").value);
        daily_difStepsChange();
      }
    </script>
    <script type="text/javascript">
    // var dailygoal_1_show = document.getElementById("dailygoal_1_show");
    var ds_2 = document.getElementById("daily_stepsInput_2");
    var dailygoal_2 = "";
      function getDailygoal2(id) {
        dailygoal_2 = ds_2.value;
        if (id == "dailygoal_2_add") {
          dailygoal_2 = parseFloat(dailygoal_2) + 1;
        } else {
          dailygoal_2 -= 1;
        }
        // dailygoal_1_show.innerHTML = dailygoal_1;
        console.log(dailygoal_2);
        ds_2.value = dailygoal_2.toFixed(2);
        console.log(document.getElementById("daily_stepsInput_2").value);
        daily_difStepsChange();
      }
    </script>
    <script type="text/javascript">
    // var dailygoal_1_show = document.getElementById("dailygoal_1_show");
    var ds_3 = document.getElementById("daily_stepsInput_3");
    var dailygoal_3 = "";
      function getDailygoal3(id) {
        dailygoal_3 = ds_3.value;
        if (id == "dailygoal_3_add") {
          dailygoal_3 = parseFloat(dailygoal_3) + 1;
        } else {
          dailygoal_3 -= 1;
        }
        // dailygoal_1_show.innerHTML = dailygoal_1;
        console.log(dailygoal_3);
        ds_3.value = dailygoal_3.toFixed(2);
        console.log(document.getElementById("daily_stepsInput_3").value);
        daily_difStepsChange();
      }
    </script>
    <script type="text/javascript">
    // var dailygoal_1_show = document.getElementById("dailygoal_1_show");
    var ds_4 = document.getElementById("daily_stepsInput_4");
    var dailygoal_4 = "";
      function getDailygoal4(id) {
        dailygoal_4 = ds_4.value;
        if (id == "dailygoal_4_add") {
          dailygoal_4 = parseFloat(dailygoal_4) + 1;
        } else {
          dailygoal_4 -= 1;
        }
        // dailygoal_1_show.innerHTML = dailygoal_1;
        console.log(dailygoal_4);
        ds_4.value = dailygoal_4.toFixed(2);
        console.log(document.getElementById("daily_stepsInput_4").value);
        daily_difStepsChange();
      }
    </script>
    <script type="text/javascript">
    // var dailygoal_1_show = document.getElementById("dailygoal_1_show");
    var ds_5 = document.getElementById("daily_stepsInput_5");
    var dailygoal_5 = "";
      function getDailygoal5(id) {
        dailygoal_5 = ds_5.value;
        if (id == "dailygoal_5_add") {
          dailygoal_5 = parseFloat(dailygoal_5) + 1;
        } else {
          dailygoal_5 -= 1;
        }
        // dailygoal_1_show.innerHTML = dailygoal_1;
        console.log(dailygoal_5);
        ds_5.value = dailygoal_5.toFixed(2);
        console.log(document.getElementById("daily_stepsInput_5").value);
        daily_difStepsChange();
      }
    </script>
    <script type="text/javascript">
    // var dailygoal_1_show = document.getElementById("dailygoal_1_show");
    var ds_6 = document.getElementById("daily_stepsInput_6");
    var dailygoal_6 = "";
      function getDailygoal6(id) {
        dailygoal_6 = ds_6.value;
        if (id == "dailygoal_6_add") {
          dailygoal_6 = parseFloat(dailygoal_6) + 1;
        } else {
          dailygoal_6 -= 1;
        }
        // dailygoal_1_show.innerHTML = dailygoal_1;
        console.log(dailygoal_6);
        ds_6.value = dailygoal_6.toFixed(2);
        console.log(document.getElementById("daily_stepsInput_6").value);
        daily_difStepsChange();
      }
    </script>
    <script type="text/javascript">
    // var dailygoal_1_show = document.getElementById("dailygoal_1_show");
    var ds_7 = document.getElementById("daily_stepsInput_7");
    var dailygoal_7 = "";
      function getDailygoal7(id) {
        dailygoal_7 = ds_7.value;
        if (id == "dailygoal_7_add") {
          dailygoal_7 = parseFloat(dailygoal_7) + 1;
        } else {
          dailygoal_7 -= 1;
        }
        // dailygoal_1_show.innerHTML = dailygoal_1;
        console.log(dailygoal_7);
        ds_7.value = dailygoal_7.toFixed(2);
        console.log(document.getElementById("daily_stepsInput_7").value);
        daily_difStepsChange();
      }
    </script>
    <script type="text/javascript">
      //setStride("x");
      //calculateStride("x");
      //setDailySteps("x");
      //daily_difStepsChange();
      //motionAppChange("x");
      //motionWebChange("x");
    </script>
  </form>

</body>
<script>
      document.getElementById("myBtn").click();
</script>
@endsection
