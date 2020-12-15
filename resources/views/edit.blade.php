@extends('layouts.app')

@section('content')

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

.navfix {
  position: fixed;
  bottom: 0;
  left: 0;
  z-index: 10;
}
.navItem {
    height: 66px;
}

.navItem.is-active {
    margin-top: -10px;
    /* margin-bottom: -10px; */
    height: 76px;
    background-color: #174493;
     border-radius: 5px
}
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
  outline: none;
  text-decoration: none;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
  border-color: transparent;
  background-color: #f2f4f6;
  border-radius: 5px;
  outline: none;
  text-decoration: none;
}
  </style>
@if(! empty($m_users) && $m_users->users_id == Auth::id())

<!-- <div class="container-fluid mt-1">
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
    </div> -->
    <div class="container-fluid sticky-top p-0 m-0 w-100" style="box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.5); background-color: #2b63c6;">
      <p class="p-2 w-100" style="color: #fff; font-size: 80%; font-weight: bold"> <span class="pl-2">設定</span> <span class="pl-2">></span>  <span class="pl-2">個人設定の変更</span> </p>
    </div>
<form action="{{ route('update',$m_users->id) }}" method="POST" >
{{ csrf_field() }}

<div class="container-fluid pt-0 mt-0">
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
        <input id="heightinput" class="w-100" type="number" step="any" name='inputheight' value="{{ $m_users->height }}"><span class=" pl-1  " style="background-color: #f2f4f6; z-index: -1;">cm</span>
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
    <input id="input_gender" type="number" name="gender_input" value="{{ $m_users->gender }}" class="d-none">
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
    <button type="button" onclick="calculateStride()" class="w-50 py-0 my-0 text-center" style="background: #fff; color: #2b63c6; font-size: 80%; border-radius: 12px;border: solid 1px #2b63c6;">身長と性別から自動計算</button>
  </div>
  <div class="d-flex flex-row pb-2">
    <!-- <input id="strideinput" type="number"  name='stridelength' value="" class="d-none"> -->
    <div class="col-4 pl-2">
      <div class="d-flex flex-row">
        <input id="strideinput" class="w-100" type="number" step="any" name='stridelength' value="{{ $m_users->stride }}"><span class=" pl-1  " style="background-color: #f2f4f6; z-index: -1;">cm</span>
      </div>
    </div>
    <!-- <p class="text-center" style="width: 22px; height: 22px;border-radius: 20px; border: 1px solid #2b63c6;"> <span class="pb-3">+</span> </p> -->
    <p class="pl-3"><img id="stride_add" src="{{ asset('storage/settings/btn_add@3x.png') }}" style="height: 22px; width: 22px;" class="" alt="" onclick="setStride(this.id)"></p>
    <p class="pl-3"><img id="stride_sub" src="{{ asset('storage/settings/btn_sub@3x.png') }}" style="height: 22px; width: 22px;" class="" alt="" onclick="setStride(this.id)"></p>
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
    <div class="col w-100 ml-0 pl-2" style="">
      <div class="d-flex flex-row">
        <!-- <input id="daily_stepsInput" type="number"  name='dailygoal' value="" class="d-none"> -->
        <div class="col-4 pl-2">
          <div class="d-flex flex-row">
            <input id="daily_stepsInput" class="w-100" type="number"  name='dailygoal' value="{{ $m_users->step_goal_per_day }}"><span class="pt-1" class=" pl-1  " style="background-color: #f2f4f6; z-index: -1;">歩</span>
          </div>
        </div>
        <!-- <p class="text-center" style="width: 22px; height: 22px;border-radius: 20px; border: 1px solid #2b63c6;"> <span class="pb-3">+</span> </p> -->
        <p class="pl-3"><img id="daily_steps_add" onclick="setDailySteps(this.id);" src="{{ asset('storage/settings/btn_add@3x.png') }}" style="height: 22px; width: 22px;" class="" alt=""></p>
        <p class="pl-3"><img id="daily_steps_sub" onclick="setDailySteps(this.id);" src="{{ asset('storage/settings/btn_sub@3x.png') }}" style="height: 22px; width: 22px;" class="" alt=""></p>
      </div>
    </div>
    <div class="col-3 px-0 mx-0">
      <p id="est_daily_dist" class="text-center" style="font-weight: bold; color: #2b63c6;">4.5 km</p>
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
    <button type="button" onclick="copyGoal()" class="w-50 py-0 my-0 text-center mb-3" style="background: #fff; color: #2b63c6; font-size: 80%; border-radius: 12px;border: solid 1px #2b63c6;">1日あたりの目標を反映</button>
    <!-- <p class="w-50 text-center" style="color: #2b63c6; font-size: 80%; border-radius: 12px;border: solid 1px #2b63c6;">1日あたりの目標を反映</p> -->
  </div>
  <div class="d-flex flex-row pb-2">
    <!-- <input id="daily_stepsInput_1" type="number"  name='dailygoal_1' value="" class="d-none"> -->
    <p class="pl-2 pt-1" style="color: #2b63c6; font-weight: bold; font-size: 80%;">月</p>
    <div class="col-4">
      <div class="d-flex flex-row">
        <input id="daily_stepsInput_1" class="w-100" type="number" step="any" name='dailygoal_1' value="{{ $m_users->step_monday }}"><span class=" pl-1  " style="background-color: #f2f4f6; z-index: -1;">km</span>
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
        <input id="daily_stepsInput_2" class="w-100" type="number" step="any" name='dailygoal_2' value="{{ $m_users->step_tuesday }}"><span class=" pl-1  " style="background-color: #f2f4f6; z-index: -1;">km</span>
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
        <input id="daily_stepsInput_3" class="w-100" type="number" step="any" name='dailygoal_3' value="{{ $m_users->step_wednesday }}"><span class=" pl-1  " style="background-color: #f2f4f6; z-index: -1;">km</span>
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
        <input id="daily_stepsInput_4" class="w-100" type="number" step="any" name='dailygoal_4' value="{{ $m_users->step_thursday }}"><span class=" pl-1  " style="background-color: #f2f4f6; z-index: -1;">km</span>
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
        <input id="daily_stepsInput_5" class="w-100" type="number" step="any"  name='dailygoal_5' value="{{ $m_users->step_friday }}"><span class=" pl-1  " style="background-color: #f2f4f6; z-index: -1;">km</span>
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
        <input id="daily_stepsInput_6" class="w-100" type="number" step="any" name='dailygoal_6' value="{{ $m_users->step_saturday }}"><span class=" pl-1  " style="background-color: #f2f4f6; z-index: -1;">km</span>
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
        <input id="daily_stepsInput_7" class="w-100" type="number" step="any" name='dailygoal_7' value="{{ $m_users->step_sunday }}"><span class=" pl-1  " style="background-color: #f2f4f6; z-index: -1;">km</span>
      </div>
    </div>
    <p class="pl-3"><img id="dailygoal_7_add" onclick="getDailygoal7(this.id)" src="{{ asset('storage/settings/btn_add@3x.png') }}" style="height: 22px; width: 22px;" class="" alt=""></p>
    <p class="pl-3"><img id="dailygoal_7_sub" onclick="getDailygoal7(this.id)" src="{{ asset('storage/settings/btn_sub@3x.png') }}" style="height: 22px; width: 22px;" class="" alt=""></p>
  </div>
</div>
<div class="container-fluid pb-3">
  <div class="d-flex flex-row justify-content-between pt-3">
    <p class="pl-2 pt-1" style="font-size: 80%; font-weight: bold; color: #2b63c6;">1ヶ月あたりの目標距離</p>
    <p id="est_monthly_dist" class="pr-2 text-center" style="font-weight: bold; color: #2b63c6;">{{ number_format($m_users->step_goals_per_month*$m_users->stride/100000, 2 ,'.',',') }} km</p>
  </div>
  <div class="box2 sb12 pl-2 d-flex flex-row justify-content-center">
    <div class="col-1">
      <img src="{{ asset('storage/settings/ico_ caution_b@3x.png') }}" alt="">
    </div>
    <div class="col-11">
      <p class="" style="color: #707070;">1ヵ月あたりの目標指定は1,000kmを超えない範囲である必要があります。</p>
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
      @if($m_users->motion_app == 0)
        <input name="motionapp" type="checkbox" class="custom-control-input" id="customSwitch1" >
      @else
       <input name="motionapp" type="checkbox" class="custom-control-input" id="customSwitch1" checked>
      @endif
      <label class="custom-control-label" for="customSwitch1"> <span style="color: #2b63c6;">あり</span> </label>
    </div>
  </div>
  <div class="d-flex flex-row justify-content-between px-2 pt-3">
    <p style="font-size: 80%; font-weight: bold; color: #2b63c6;">Webでのモーション表示</p>
    <div class="custom-control custom-switch">
      @if($m_users->motion_web == 0)
        <input name="motionweb" type="checkbox" class="custom-control-input" id="customSwitch2">
      @else
       <input name="motionweb" type="checkbox" class="custom-control-input" id="customSwitch2" checked>
      @endif
      <label class="custom-control-label" for="customSwitch2"> <span style="color: #2b63c6;">なし</span> </label>
    </div>
  </div>
</div>
<div class="container-fluid text-center pt-3">
  <button class="w-100 py-1" type="submit" name="button" style="border: solid 1px #2b63c6; background-color: #2b63c6; border-radius: 25px;
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

  function copyGoal() {
    var d_goal_dist = parseFloat(document.getElementById("est_daily_dist").innerHTML);
    ds_1.value =  d_goal_dist;
    ds_2.value =  d_goal_dist;
    ds_3.value =  d_goal_dist;
    ds_4.value =  d_goal_dist;
    ds_5.value =  d_goal_dist;
    ds_6.value =  d_goal_dist;
    ds_7.value =  d_goal_dist;
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
      s_input.value = stride;
      console.log(document.getElementById("strideinput").value);
    }
    var gender = "";
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
      console.log(gender);
    }
    function calculateStride() {
      var x = document.getElementById("heightinput").value;
      var strideLength = 0;
      if (gender == "male") {
        strideLength = (x/2.5).toFixed(0);
      } else {
        strideLength = (x/3).toFixed(0);
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
      ds_input.value = steps;
      console.log(document.getElementById("daily_stepsInput").value);
      var daily_steps = steps;



      var p_dailyEstDist = document.getElementById("est_daily_dist");

      var stride_value = document.getElementById("strideinput").value;

      if (daily_steps>=1) {
        p_dailyEstDist.innerHTML = ((daily_steps * stride_value)/100000).toFixed(2) + " km";
      }
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
    ds_1.value = dailygoal_1;
    console.log(document.getElementById("daily_stepsInput_1").value);
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
    ds_2.value = dailygoal_2;
    console.log(document.getElementById("daily_stepsInput_2").value);
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
    ds_3.value = dailygoal_3;
    console.log(document.getElementById("daily_stepsInput_3").value);
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
    ds_4.value = dailygoal_4;
    console.log(document.getElementById("daily_stepsInput_4").value);
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
    ds_5.value = dailygoal_5;
    console.log(document.getElementById("daily_stepsInput_5").value);
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
    ds_6.value = dailygoal_6;
    console.log(document.getElementById("daily_stepsInput_6").value);
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
    ds_7.value = dailygoal_7;
    console.log(document.getElementById("daily_stepsInput_7").value);
  }
</script>

<!-- <div class="container-fluid"> -->


      <!-- <div class="row">
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
  </script> -->
@else
  <h3> Sorry! You are not authorized to see this page. </h3>
@endif
@endsection
