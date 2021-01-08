@extends('layouts.app2')

@section('content')

 <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.1.9/p5.min.js" integrity="sha512-WIklPM6qPCIp6d3fSSr90j+1unQHUOoWDS4sdTiR8gxUTnyZ8S2Mr8e10sKKJ/bhJgpAa/qG068RDkg6fIlNFA==" crossorigin="anonymous"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style media="screen">


.chartcenter{
  position: absolute;
  top: -100px;
  left: -200px;

  text-align: center;

  color: red;

}


/* a {
color: #000000 !important;
text-decoration: none !important;
} */
.relative {
position: relative;
}

.absolute-center {
position:absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
}

.text-center{
text-align: center;
}
.speech-bubble2 {
position: relative;
background: #dce0e3;
border-radius: .4em;
}

.speech-bubble2:after {
content: '';
position: absolute;
bottom: 0;
left: 50%;
width: 0;
height: 0;
border: 10px solid transparent;
border-top-color: #dce0e3;
border-bottom: 0;
margin-left: -12px;
margin-bottom: -10px;
}

.speech-bubble-yel {
position: relative;
background: #ff9327;
border-radius: .4em;
}

.speech-bubble-yel:after {
content: '';
position: absolute;
bottom: 0;
left: 50%;
width: 0;
height: 0;
border: 10px solid transparent;
border-top-color: #ff9327;
border-bottom: 0;
margin-left: -12px;
margin-bottom: -10px;
}

.overlay-text2 {
align-self: flex-start;
transform: translateY(60%);
z-index: 50;
margin-bottom: -500px;
}
.overlay-text3 {
align-self: flex-start;
transform: translateY(50%);
z-index: 50
}
.overlay-text4 {
align-self: flex-start;
transform: translate(-49%, -70%);
z-index: 50;
}
.overlay-btn2 {
align-self: flex-start;
transform: translate(0%,-50%);
z-index: 50;
}
.overlay-btn4 {
align-self: flex-start;
transform: translate(-17%,-60%);
z-index: 50;
}
.overlay-btn3 {
align-self: flex-start;
transform: translateX(30%);
z-index: 50
}
.overlay-tri {
align-self: flex-start;
transform: translateY(-40%);
z-index: 0;
margin-bottom: -2000px;
}
.overlay-tri2 {
align-self: flex-start;
transform: translateY(-20%);
z-index: -1000 !important;
}
.overlay-pado {
align-self: flex-start;
transform: translateY(30%);
z-index: 100
}
.overlay-btn1 {
align-self: flex-start;
transform: translatex(-80%);
z-index: 50
}
.dot {
height: 5vh;
width: 5vh;
background-color: #fff;
border-radius: 50%;
display: inline-block;
}
i {
background-color: white;
border-radius: 50%;
border: 1px solid white;
padding: 10px;
}

body {
background-color: #f0f6f8;
}
.blackiconcolor {color:#dce0e3;}
.fa { transform: scale(1.3,1.2);
padding: 4px;
font-weight: normal;}
.nopadding {
padding-top: 0 !important;
padding-bottom: 0 !important;
margin: 0 !important;
}
.vl {
border-left: 6px solid green;
}
.containerImg {
  position: relative;
  text-align: center;
  color: white;
}
.centeredTxt {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.overlay-textImg {
align-self: flex-start;
transform: translateY(-230%);
z-index: 50
}
.overlay-textImgXS {
align-self: flex-start;
transform: translateY(-150%);
z-index: 50
}
.overlay-textImgMD {
align-self: flex-start;
transform: translateY(-200%);
z-index: 50
}
.overlay-text5 {
align-self: flex-start;
transform: translateY(0%);
z-index: 50;
margin-bottom: -30px;
}
.myPageBtn {
  position: fixed;
  bottom: 0;
  right: 0;
  z-index: 10;
}
.refBtn {
  position: fixed;
  top: 0;
  right: 0;
  z-index: 10;
}
.botImg {
  position: relative;
  bottom: 0px;
  right: 0;
  margin-bottom: -80px;
  transform: translateY(17%) !important;
}
.botCont {
  margin-left: -10% !important;
  padding: 0 !important;
  width: 118%;
  transform: translateY(125%) !important;
}
.rt_pos {
  right: 0% !important;
}
@media only screen and (min-device-width: 390px) and (max-device-width: 447px) {
/* CSS */
.botCont {
  padding: 0 !important;
  width: 118%;
  transform: translateY(125%) !important;
}
.rt_pos {
  right: 1% !important;
  padding-bottom: 2.5% !important;
}
}
@media only screen and (min-device-width: 448px) and (max-device-width: 575px) {
/* CSS */
.botCont {
  padding: 0 !important;
  width: 115%;
  transform: translateY(125%) !important;
}
.rt_pos {
  right: 0% !important;
  padding-bottom: 2.5% !important;
}
}
/* @media only screen and (min-device-width: 390px)  {

.botCont {
  margin-left: -10% !important;
  padding: 0 !important;
  width: 118%;
  transform: translateY(125%) !important;
}
.rt_pos {
  right: 1% !important;
  padding-bottom: 2.5% !important;
}
} */
.container-fluid.overlay-tri.container-fluid.white.m-0.p-0 {
  background: #fff !important;
  background-color: #fff !important;
}
.card {
  border: none !important;
  padding: none !important;
  margin: 0 auto !important;
  background-color: #f0f6f8;
}
.card.card-img-top {
  padding: none !important;
  margin: none !important;
}
@media only screen and (max-height: 667px) {
  .refBtn {
    position: fixed;
    top: 0;
    right: 0;
    z-index: 10;
  }
}
@media only screen and (min-device-width: 360px) and (max-device-width: 420px) and (orientation: landscape) {
/* CSS */
.refBtn {
  position: fixed;
  top: 0;
  right: 0;
  z-index: 10;
}
}
* iPad Landscape */
@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
/* CSS */
.refBtn {
  position: fixed;
  top: 0%;
  right: 0;
  z-index: 10;
}
}

/* iPad Portrait */
@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) and (orientation: portrait) {
/* CSS */
.refBtn {
  position: fixed;
  top: 0%;
  right: 0;
  z-index: 10;
}
}
.fixpixel {
  margin-left: -32px;
}
.fixpixel img{
height: auto;
background-position: center;
background-repeat: no-repeat;
background-size: cover;
padding-left: -8px;
padding-right: -8px;
 }
</style>

@if ( empty($m__users_id))
<div class='text-center'>
 <h2 class='mt-5'> 最初にプロファイルを作成してください <a href="/" style="color: blue !important">ここをクリック </a> </h2>
</div>
@else
<!-- <div class="container-fluid pt-3" style="color:#FFFFFF; border-radius: 15px;">
      <div class="row justify-content-center">
        <div class="col pt-1 text-center">
          <p class="font-weight-bold pr-3 py-2" style="background: white; color:#2b63c6; border: 2px solid white; border-radius: 15px;">{{ $year }}年 {{ $month }}月 {{ $day }}日 火曜日</p>
        </div>
      </div>
    </div> -->
    <!-- @if(empty($get_t_tour))
    <a href="{{ url('/createtour') }}"> <p id="btnMyPage" value="" onclick="mypage.performClick(this.value)" class="myPageBtn my-0 mr-2 mb-3 text-center pt-3 text-break px-2" style="color: #fff; font-size: 11px; font-weight: bold;width: 90px;height: 90px;border: solid 2px #ffffff; border-radius: 50% !important;
    background: url({{asset('storage/padometerscreen/yellow.png')}}); background-size: fill; background-position: center; background-repeat: no-repeat">
    ウォーキング <br> ツアーに <br> 参加しよう！ </p> </a>
    @else
    <a href="{{ url('/mypage') }}"> <p id="btnMyPage2" value="" onclick="mypage.performClick(this.value)" class="myPageBtn my-0 mr-2 mb-3 text-center pt-3 text-break px-2" style="color: #fff; font-size: 11px; font-weight: bold;width: 90px;height: 90px;border: solid 2px #ffffff; border-radius: 50% !important;
    background: url({{asset('storage/padometerscreen/blue.png')}}); background-size: fill; background-position: center; background-repeat: no-repeat">
    {{$get_t_tour->m_tours->tour_title}}<br> 参加中！ </p> </a>
    @endif
    <a href="{{ url('/padometerscreen') }}"><img style="border-radius: 50%" class="refBtn d-block d-sm-none mt-2 mr-2" src="{{ asset('storage/padometerscreen/ref.png') }}" alt=""></a>
    <a href="{{ url('/padometerscreen') }}"><img style="border-radius: 50%" class="refBtn d-none d-sm-block d-md-none mt-2 mr-2" src="{{ asset('storage/padometerscreen/ref.png') }}" alt=""></a>
    <a href="{{ url('/padometerscreen') }}"><img style="border-radius: 50%" class="refBtn d-none d-md-block d-lg-none mt-2 mr-2" src="{{ asset('storage/padometerscreen/ref.png') }}" alt=""></a>
    <a href="{{ url('/padometerscreen') }}"><img style="border-radius: 50%" class="refBtn d-none d-lg-block d-xl-none mt-2 mr-2" src="{{ asset('storage/padometerscreen/ref.png') }}" alt=""></a>
    <a href="{{ url('/padometerscreen') }}"><img style="border-radius: 50%" class="refBtn d-none d-xl-block mt-2 mr-2" src="{{ asset('storage/padometerscreen/ref.png') }}" alt=""></a>
    <div class="container-fluid pt-3">
      <div class="row">
      <div class="col-6">
      <div class="card">
        <a href="http://3.114.126.114:8012/recipe/serial_number"><img class="card-img-top" src="{{ asset('storage/padometerscreen/rec.png') }}" alt="Card image cap"></a>
      </div>
      </div>
      <div class="col-6">
        <div class="card">
          <a href="http://3.114.126.114:8012/himekuri/specified_date/{serial_number}"><img class="card-img-top" src="{{ asset('storage/padometerscreen/cal.png') }}" alt="Card image cap"></a>
        </div>
      </div>
      </div>
    </div> -->
    <div class="d-flex flex-row justify-content-around">
      <!-- <p><img src="{{ asset('storage/padometerscreen/rec.png') }}" alt=""></p>
      <p><img src="{{ asset('storage/padometerscreen/rec.png') }}" alt=""></p> -->
    </div>
    <!-- <div class="container-fluid pt-2 px-0 mx-0">
      <div class="row px-0 mx-0">
          <div class="col-5 px-0 mx-0">
            <img src="{{ asset('storage/padometerscreen/rec.png') }}" alt="" style="object-fit: scale-down;">
          </div>
          <div class="col-5 px-0 mx-0">
            <img src="{{ asset('storage/padometerscreen/cal.png') }}" alt="" style="object-fit: scale-down;">
          </div>
      </div>
    </div> -->
    @if($today_data >= $get_m_user_daily_goal)
    <div class="container" style="background: url({{asset('storage/padometerscreen/complete01.png')}}); background-size: cover; background-position: center; background-repeat: no-repeat">
      <div class="container-fluid text-center pt-3">
        <p class="font-weight-bold" style="color:#2b63c6">今日の歩数</p>
      </div>
      <div class="container-fluid w-75 pb-3">
        <div class="speech-bubble-yel text-center">
          <p class="mb-0 font-weight-bold" style="font-size:90%; color:white;">今日の目標達成！</p>
        </div>
      </div>
      <div class="container-fluid text-center">
        <img src="{{asset('storage/padometerscreen/star.png')}}" alt="">
      </div>
    <div id="bg_season1" class="container-fluid pt-3" style="background-size: 100% 80%; background-position: right 100%;; background-repeat: no-repeat">
    <div class="relative w-100 h-50" style="background: url({{asset('storage/padometerscreen/graphcomp.png')}}); background-position: center; background-repeat: no-repeat">
      <canvas id="myChart"></canvas>
      <div class="absolute-center text-center">
        <p class="mb-0 p-0" style="font-size:70%; color:#ff9327;"> {{ ($today_data)*$get_m_user_stride/100000 }} km</p>
        <p class="font-weight-bold mb-0 p-0 text-wrap" style="color:#ff9327;">{{ $today_data }}歩</p>
        <p class="mb-0 mt-0 p-0" style="font-size:70%;">----------------</p>
        <p class="font-weight-bold mb-0 mt-0" style="color: #113A83">{{ $get_m_user_daily_goal }}歩</p>
        <p class="mb-0" style="font-size:70%; color: #113A83">{{ $get_m_user_daily_goal*$get_m_user_stride/100000 }} (km)</p>
      </div>
    </div>
    </div>
    </div>
    @else
    <div class="container">
      <div class="container-fluid text-center pt-3">
        <p class="font-weight-bold" style="color:#2b63c6">今日の歩数</p>
      </div>
      <div class="container-fluid w-75 pb-3">
        <div class="speech-bubble2 text-center">
          <p class="mb-0 font-weight-bold" style="font-size:90%; color:#113A83;">あと {{ $current_month_steps }}歩 {{ $current_month_steps*$get_m_user_stride/100000 }} で目標達成！</p>
        </div>
      </div>
    <div id="bg_season2" class="container-fluid pt-3 pb-3" style="background-size: 100% 80%; background-position: right 100%;; background-repeat: no-repeat">
    <div class="relative w-100 h-50" style="background: url({{asset('storage/padometerscreen/graph.png')}}); background-size: 52% 104%; background-position: center; background-repeat: no-repeat">
      <canvas id="myChart"></canvas>
      <div class="absolute-center text-center">
        <p class="mb-0 p-0" style="font-size:70%; color:#2b63c6;"> {{ ($today_data)*$get_m_user_stride/100000 }} km</p>
        <p class="font-weight-bold mb-0 p-0 text-wrap" style="color:#2b63c6;">{{ $today_data }}歩</p>
        <p class="mb-0 mt-0 p-0" style="font-size:70%;">---------------</p>
        <p class="font-weight-bold mb-0 mt-0" style="color:#113A83;">{{ $get_m_user_daily_goal }}歩</p>
        <p class="mb-0" style="font-size:70%; color:#113A83;">{{ $get_m_user_daily_goal*$get_m_user_stride/100000 }} (km)</p>
      </div>
    </div>
    </div>
    </div>
    @endif
    <div class="container-fluid pt-3 mt-3">
      <canvas id="ctx" class="pt-3"></canvas>
    </div>
    @if(empty($get_t_tour))
    <h6> まだツアーを始めていません！ </h6>
    @endif
    @if( $current_month_steps  >=  $get_m_user_monthly_goal )
    <div class="container pt-3" style="background: url({{asset('storage/padometerscreen/complete01.png')}}); background-size: cover; background-position: center; background-repeat: no-repeat">
      <div class="container-fluid text-center overlay-text5">
        <p class="font-weight-bold" style="color:#2b63c6;">今日の歩数</p>
      </div>
      <div class="container-fluid w-75 d-md-none">
        <br>
        <div class="speech-bubble-yel text-center">
          <p class="mb-0 font-weight-bold" style="font-size:90%; color: white;">今月の目標達成！</p>
        </div>
      </div>
      <div class="container-fluid pt-3 w-75 d-md-none">
        <p class="text-center" style="background: white; color:#ff9327; border: 2px solid #ff9327; border-radius: 15px;">今日までの累計 {{ $current_month_steps }}歩 ({{ $current_month_steps*$get_m_user_stride/100000 }} Km)</p>
      </div>

      <div class="container-fluid w-50 d-none d-md-block d-lg-none">
        <br>
        <div class="speech-bubble2 text-center" style="background: #ff9327">
          <p class="mb-0 font-weight-bold" style="font-size:90%; color:#113A83;">あと {{ $current_month_steps }}歩 {{ $current_month_steps*$get_m_user_stride/100000 }} Km!</p>
        </div>
      </div>
      <div class="container-fluid pt-3 w-50 d-none d-md-block d-lg-none">
        <p class="text-center" style="background: white; color:#ff9327; border: 2px solid #ff9327; border-radius: 15px;">今日までの累計 {{ $current_month_steps }}歩 ({{ $current_month_steps*$get_m_user_stride/100000 }} Km)</p>
      </div>

      <div class="container-fluid w-25 d-none d-lg-block">
        <br>
        <div class="speech-bubble2 text-center" style="background: #ff9327">
          <p class="mb-0 font-weight-bold" style="font-size:90%; color:#113A83;">あと {{ $current_month_steps }}歩 {{ $current_month_steps*$get_m_user_stride/100000 }} Km!</p>
        </div>
      </div>
      <div class="container-fluid pt-3 w-25 d-none d-lg-block">
        <p class="text-center" style="background: white; color:#ff9327; border: 2px solid #ff9327; border-radius: 15px;">今日までの累計 {{ $current_month_steps }}歩 ({{ $current_month_steps*$get_m_user_stride/100000 }} Km)</p>
      </div>
      <div class="container-fluid" style="z-index: 2000 !important;">
        <p style="z-index: 2000 !important;" class="text-center" > <img style="z-index: 2000 !important;" src="{{asset('storage/padometerscreen/star.png')}}" alt=""> </p>
      </div>

            <div class="container-fluid overlay-tri2">
              <div class="d-flex flex-row justify-content-center">
                  <div style="z-index: -1000 !important;" id="triangle_graph" class=""></div>
              </div>
              <div class="container-fluid pt-3 w-25 d-none d-lg-block">
                <p class="text-center" style="background: #113A83; color:#FFFFFF; border: 2px solid #113A83; border-radius: 15px;">今月の累計目標 {{ $current_month_steps }}歩 ({{ $current_month_steps*$get_m_user_stride/100000 }} Km)</p>
              </div>
              <div class="container-fluid pt-3 w-50 d-none d-md-block d-lg-none">
                <p class="text-center" style="background: #113A83; color:#FFFFFF; border: 2px solid #113A83; border-radius: 15px;">今月の累計目標 {{ $current_month_steps }}歩 ({{ $current_month_steps*$get_m_user_stride/100000 }} Km)</p>
              </div>
              <div class="container-fluid pt-3 d-md-none">
                <p class="text-center" style="background: #113A83; color:#FFFFFF; border: 2px solid #113A83; border-radius: 15px;">今月の累計目標 {{ $current_month_steps }}歩 ({{ $current_month_steps*$get_m_user_stride/100000 }} Km)</p>
              </div>
              <!-- @if(!empty($get_t_tour))
                <div class="container-fluid botCont bg-white" >
                  <div class="row  p-0 m-0 pl-2" style=" ">
                    <div class="col text-left p-0 m-0">
                      <div class="d-flex flex-row">
                        <p class="pl-2">疑似ツアーで全国を歩こう！
                                  ウォーキングの各種設定や
                                    詳細情報の確認もこちら。</p>
                        <p> <img class="pl-3" src="{{ asset('storage/padometerscreen/ico_arrow_r.png') }}" alt=""> </p>
                      </div>
                    </div>
                    <div class="col-4 text-right p-0 m-0 rt_pos" >
                      <div class="float-right p-0 m-0" style="border: solid 2px #2b63c6; background-color: #2b63c6;  width: 96px;height: 100px; border-radius: 50%">

                      </div>
                    </div>
                  </div>
                </div>

              @else
              <div class="container-fluid botCont bg-white" >
                <div class="row  p-0 m-0 pl-2" style=" ">
                  <div class="col text-left p-0 m-0">
                    <div class="d-flex flex-row">
                      <p class="pl-2">疑似ツアーで全国を歩こう！
                                ウォーキングの各種設定や
                                  詳細情報の確認もこちら。</p>
                      <p> <img class="pl-3" src="{{ asset('storage/padometerscreen/ico_arrow_R_orange.png') }}" alt=""> </p>
                    </div>
                  </div>
                  <div class="col-4 text-right p-0 m-0 rt_pos" >
                    <div class="float-right p-0 m-0" style="border: solid 2px #2b63c6; background-color: #2b63c6;  width: 96px;height: 100px; border-radius: 50%">

                    </div>
                  </div>
                </div>
              </div>
              @endif -->
              </div>
    </div>
    @else
    <div class="container">
      <div class="container-fluid text-center pt-3 overlay-text5">
        <p class="font-weight-bold" style="color:#2b63c6;">今月の歩数</p>
      </div>
      <div class="container-fluid d-lg-none">
        <div class="row justify-content-center">
          <div class="col-sm-3">

          </div>
           <div class="col col-sm-5 text-center">
            <div class="d-flex flex-row-reverse pl-3 pb-3 mb-3 overlay-text2">
              <div class="text-center">
                <p class="mb-0 pb-0 font-weight-bold pr-sm-3" style="background: #dce0e3; font-size:70%; color:#113A83; border: 2px solid #dce0e3; border-radius: 15px;">残ります @if($get_m_user_monthly_goal <= $current_month_steps) 0 @else {{ $get_m_user_monthly_goal-$current_month_steps }}歩 {{ round(($get_m_user_monthly_goal-$current_month_steps)*$get_m_user_stride/100000,2) }} @endif Km!</p>
                <div class="d-flex flex-row-reverse">
                  <div class="col text-right border-left border-primary">
                    <p style="font-size:100%"><br><br><br><br></p>
                  </div>
                  <div class="col">

                  </div>
                </div>
               </div>
             </div>
            <div class="d-flex flex-row pr-3 overlay-text3">
              <div class="text-center">
                <p class="mb-0 mt-0 pt-0 font-weight-bold px-1 pl-sm-2 pl-md-3" style="background: white; font-size:70%; color:#2b63c6;; border: 1px solid #2b63c6;; border-radius: 15px;">あと {{ $current_month_steps }}歩 {{ $current_month_steps*$get_m_user_stride/100000 }} Km!</p>
                <div class="row justify-content-center">
                  <div class="col border-right border-primary">
                    <p style="font-size:100%;"><br><br><br></p>
                  </div>
                  <div class="col">

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-3">

          </div>
        </div>
      </div>
      <div class="container d-none d-lg-block">
        <div class="row justify-content-center">
          <div class="col-sm-3">

          </div>
           <div class="col col-sm-5 text-center">
            <div class="d-flex flex-row-reverse pl-3 pb-3 mb-3 overlay-text2">
              <div class="text-center">
                <p class="mb-0 pb-0 font-weight-bold pr-sm-3" style="background: #dce0e3; font-size:70%; color:#113A83; border: 2px solid #dce0e3; border-radius: 15px;">残ります @if($get_m_user_monthly_goal <= $current_month_steps) 0 @else {{ $get_m_user_monthly_goal-$current_month_steps }}歩 {{ round(($get_m_user_monthly_goal-$current_month_steps)*$get_m_user_stride/100000,2) }} @endif Km!</p>
                <div class="d-flex flex-row-reverse">
                  <div class="col text-right border-left border-primary">
                    <p style="font-size:100%"><br><br><br><br></p>
                  </div>
                  <div class="col">

                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex flex-row pl-3 overlay-text3">
              <div class="text-center">
                <p class="mb-0 mt-0 pt-0 font-weight-bold pl-sm-2 pl-md-3 pl-3 pl-lg-3 pr-3" style="background: white; font-size:70%; color:#2b63c6; border: 1px solid #2b63c6;; border-radius: 15px;">あと {{ $current_month_steps }}歩 {{ $current_month_steps*$get_m_user_stride/100000 }} Km!</p>
                <div class="row justify-content-center">
                  <div class="col border-right border-primary">
                    <p style="font-size:100%"><br><br><br></p>
                  </div>
                  <div class="col">

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-3">

          </div>
        </div>
      </div>

            <div class="container-fluid overlay-tri">
              <div class="d-flex flex-row justify-content-center">
                  <div id="triangle_graph" class=""></div>
              </div>
              <div class="container-fluid pt-3 w-25 d-none d-lg-block">
                <p class="text-center" style="margin-bottom: 0px; background: #113A83; color:#FFFFFF; border: 2px solid #113A83; border-radius: 15px;">今月の累計目標 {{ $get_m_user_monthly_goal }}歩 ({{ $get_m_user_monthly_goal*$get_m_user_stride/100000 }} Km)</p>
              </div>
              <div class="container-fluid pt-3 w-50 d-none d-md-block d-lg-none">
                <p class="text-center" style="margin-bottom: 0px; background: #113A83; color:#FFFFFF; border: 2px solid #113A83; border-radius: 15px;">今月の累計目標 {{ $get_m_user_monthly_goal }}歩 ({{ $get_m_user_monthly_goal*$get_m_user_stride/100000 }} Km)</p>
              </div>
              <div class="container-fluid pt-3 d-md-none">
                <p class="text-center" style="margin-bottom: 0px; background: #113A83; color:#FFFFFF; border: 2px solid #113A83; border-radius: 15px;">今月の累計目標 {{ $get_m_user_monthly_goal }}歩 ({{ $get_m_user_monthly_goal*$get_m_user_stride/100000 }} Km)</p>
              </div>

              <!-- <div class="row" style="margin: 0 !important;">
                <div class="col-12" style="margin: 0 !important;">
                  <img class="" style="margin-left: -15px !important;" src="{{ asset('storage/padometerscreen/blue_bottom.png') }}" alt="" >
                </div>
              </div> -->
              <!-- @if(!empty($get_t_tour))
                <div class="container-fluid botCont bg-white" >
                  <div class="row  p-0 m-0 pl-2" style=" ">
                    <div class="col text-left p-0 m-0">
                      <div class="d-flex flex-row">
                        <p class="pl-2">疑似ツアーで全国を歩こう！
                                  ウォーキングの各種設定や
                                    詳細情報の確認もこちら。</p>
                        <p> <img class="pl-3" src="{{ asset('storage/padometerscreen/ico_arrow_r.png') }}" alt=""> </p>
                      </div>
                    </div>
                    <div class="col-4 text-right p-0 m-0 rt_pos" >
                      <div class="float-right p-0 m-0" style="border: solid 2px #2b63c6; background-color: #2b63c6;  width: 96px;height: 100px; border-radius: 50%">

                      </div>
                    </div>
                  </div>
                </div>

              @else
              <div class="container-fluid botCont bg-white" >
                <div class="row  p-0 m-0 pl-2" style=" ">
                  <div class="col text-left p-0 m-0">
                    <div class="d-flex flex-row">
                      <p class="pl-2">疑似ツアーで全国を歩こう！
                                ウォーキングの各種設定や
                                  詳細情報の確認もこちら。</p>
                      <p> <img class="pl-3" src="{{ asset('storage/padometerscreen/ico_arrow_R_orange.png') }}" alt=""> </p>
                    </div>
                  </div>
                  <div class="col-4 text-right p-0 m-0 rt_pos" >
                    <div class="float-right p-0 m-0" style="border: solid 2px #2b63c6; background-color: #2b63c6;  width: 96px;height: 100px; border-radius: 50%">

                    </div>
                  </div>
                </div>
              </div>
              @endif -->
              </div>
    </div>
    @endif

          <script id="tri" type="text/javascript">
          var cnv;
            function setup() {
              cnv = createCanvas(300, 150);
              // var x = windowWidth / 2;
              // var y = windowHeight / 4;
              // cnv.position(x, y);
              cnv.parent('triangle_graph');
            }

            function draw() {
              if ({{ $current_month_steps }} >= {{ $get_m_user_monthly_goal }}) {
                fill('#FFD00D');
                triangle(0, 150, 300, 150, 300, 0);
              } else {
                fill('#dce0e3');
                triangle(0, 150, 300, 150, 300, 0);
                fill('#113A83');
                if({{ $current_month_steps }}> 0){
                  var comp = {{ $current_month_steps }};
                  if({{ $get_m_user_monthly_goal }} > {{ $current_month_steps }} ){
                      var rem = {{ $get_m_user_monthly_goal-$current_month_steps }};
                  }
                  else{
                    rem = 0;
                  }
                }
                 else{
                  var comp = 0;
                  var rem = {{ $get_m_user_monthly_goal }};
                }
                var k = (comp/(comp+rem));
                var x = 300*k;
                var y = 150 - 150*k;
                triangle(0, 150, x, y, x, 150);
              }
            }
          </script>
          <script type="text/javascript">
            var mon = {{ $month }};
            if({{$today_data}} >= {{$get_m_user_daily_goal}}) {
              var bg_season = document.getElementById("bg_season1");
            } else {
              var bg_season = document.getElementById("bg_season2");
            }
            if (mon == 12 || mon == 1 || mon == 2) {
              bg_season.style.backgroundImage = "url({{asset('storage/padometerscreen/bg01_winter01@2x.png')}})";
            } else if (mon>=3 && mon<=5) {
              bg_season.style.backgroundImage= "url({{asset('storage/padometerscreen/bg01_spring01@2x.png')}})";
            } else if (mon>=6 && mon<=8) {
              console.log("yes88");
              bg_season.style.backgroundImage = "url({{asset('storage/padometerscreen/bg01_summer01@2x.png')}})";
            } else if (mon>=9 && mon<=11) {
              bg_season.style.backgroundImage = "url({{asset('storage/padometerscreen/bg01_autumn01@2x.png')}})";
            }
          </script>

  <script type="text/javascript">
  var dev = {{ $device }};
  var motion_app = {{ $m__users->motion_app }};
  var motion_web = {{ $m__users->motion_web}};
  console.log(motion_app);
  console.log(motion_web);
  var animation_time = 0;
  if (dev == 111 && motion_app == 1) {
    animation_time = 3000;
  } else if (dev == 222 && motion_web == 1) {
    animation_time = 3000;
  }
  console.log("todayData" + {{$today_data}});
  var comp, rem;
  if({{ $today_data }} > 0) {
      comp = {{ $today_data*$get_m_user_stride/100000 }};
      if({{ $today_data*$get_m_user_stride/100000 }} > {{ $get_m_user_daily_goal*$get_m_user_stride/100000 }}) {
        rem = 0;
      }
      else {
        rem =  {{ ($get_m_user_daily_goal*$get_m_user_stride/100000)-($today_data*$get_m_user_stride/100000) }};
      }
  }
  else{
      comp = 0;
      rem = {{ $get_m_user_monthly_goal }};
  }
var data = {
labels: [
  "Completed",
  "Remaining"
],
datasets: [
  {
    data: [comp, rem],
    backgroundColor: [
      "#113A83",
      "#dce0e3"
    ]
  }]
};

var promisedDeliveryChart = new Chart(document.getElementById('myChart'), {
type: 'doughnut',
data: data,
options: {
  responsive: true,
  legend: {
    display: false
  },
  cutoutPercentage: 85,
  animation: {
    duration: animation_time, // general animation time
  },
  hover: {
    animationDuration: animation_time/3, // duration of animations when hovering an item
  },
  responsiveAnimationDuration: 0, // animation duration after a resize
}
});
if ({{$today_data}} >= {{$get_m_user_daily_goal}}) {
  promisedDeliveryChart.data.datasets[0].backgroundColor[0] = '#FFD00D';
  promisedDeliveryChart.update();
}

</script>
<script type="text/javascript">
var weekMap = [6, 0, 1, 2, 3, 4, 5];
function formatDate(d) {
  //var d = new Date(date),
      //month = '' + (d.getMonth() + 1),
      day = d.getDate();
      //year = d.getFullYear();

  // if (month.length < 2)
  //     month = '0' + month;
  if (day.length < 2)
      day = '0' + day;

  return day;
}
function datesofWeek() {
  var now = new Date();
  now.setHours(0, 0, 0, 0);
  var mon = new Date(now);
  mon.setDate(mon.getDate() - weekMap[mon.getDay()]);
  var tue = new Date(now);
  tue.setDate(tue.getDate() - weekMap[tue.getDay()] + 1);
  var wed = new Date(now);
  wed.setDate(wed.getDate() - weekMap[wed.getDay()] + 2);
  var thu = new Date(now);
  thu.setDate(thu.getDate() - weekMap[thu.getDay()] + 3);
  var fri = new Date(now);
  fri.setDate(fri.getDate() - weekMap[fri.getDay()] + 4);
  var sat = new Date(now);
  sat.setDate(sat.getDate() - weekMap[sat.getDay()] + 5);
  var sun = new Date(now);
  sun.setDate(sun.getDate() - weekMap[sun.getDay()] + 6);
  sun.setHours(23, 59, 59, 999);
  console.log(mon);
  console.log(tue);
  console.log(wed);
  console.log(thu);
  console.log(fri);
  console.log(sat);
  console.log(sun);
  return [mon, tue, wed, thu, fri, sat, sun];
}
var current_week_datas1 = {!! json_encode($current_week_datas) !!}
var stepsData = [0,0,0,0,0,0,0];
var barBgColor = ['#3476ea', '#3476ea', '#3476ea', '#3476ea', '#3476ea', '#3476ea', '#3476ea'];
var weekDates = datesofWeek();

Object.keys(current_week_datas1).forEach((single_day_data, i) => {
  //console.log(current_week_datas[single_day_data]);
  var total = 0;
  current_week_datas1[single_day_data].forEach((item, i) => {
    total += parseInt(item["steps"]);
  });
  weekDates.forEach((item, i) => {
    if (formatDate(item) == single_day_data) {
      stepsData[i] = parseInt(total);
    }
  });

});
var maxSteps = Math.max(...stepsData);
var maxY = maxSteps + 1000 - maxSteps%1000;
console.log(maxY);
var weekGoals = {!! json_encode($steps_week) !!};
const img = new Image();
img.src = "{{ asset('storage/padometerscreen/star.png') }}";
Chart.plugins.register({
 afterDatasetsDraw: function(chart, ease) {
    var barLabels = chart.options.barLabels;
    if (!barLabels) return;
    var ctx = chart.ctx;
    chart.data.datasets.forEach(function(dataset, index) {
      //console.log("dataset");
      //console.log(index);
       var meta = chart.getDatasetMeta(index);
       if (!meta.hidden) {
          meta.data.forEach(function(segment, index) {
            if (stepsData[index]>0) {
              //console.log("segment");
              //console.log(index);
               var model = segment._model,
                   position = segment.tooltipPosition(),
                   x = position.x,
                   y = position.y,
                   height = segment.height(),
                   width = model.width,
                   padding = width / 4;
                   //console.log(segment);
               ctx.save();
               ctx.textBaseline = 'middle';
               ctx.font = 'bold ' + width + 'px Arial';
               ctx.fillStyle = '#FF9529'; //first label's font color
               var encoded = barLabels.first[index];
               var REG_HEX = /&#x([a-fA-F0-9]+);/g;
               var   text1 = encoded.replace(REG_HEX, function(match, group1){
               var num = parseInt(group1, 16); //=> 39
               return String.fromCharCode(num); //=> '
               });
               var   text2 = barLabels.second[index];
               var   textWidth = ctx.measureText(text1).width + padding;
               if (stepsData[index]>=weekGoals[index]) {
                 //ctx.fillText(text1, x-5, y-10);
                 ctx.drawImage(img, x-15, y-35, 30, 30);
               }
               ctx.font = 4*width/5 + 'px Arial';
               ctx.fillStyle = '#3476ea'; //second label's font color
               // ctx.translate(x, y);
               ctx.rotate(-Math.PI / 2);
               var textVertical = stepsData[index] + "歩";
               ctx.fillText(textVertical, -chart.height+3*Chart.defaults.global.defaultFontSize, x+15);
               // console.log("x: " + chart.width);
               // console.log("y: " + chart.height);
               ctx.restore();
            }
          });
       }
    });
 }
});


Chart.pluginService.register({
    afterDraw: function(chart) {
        if (typeof chart.config.options.lineAt != 'undefined') {
        	var lineAt = chart.config.options.lineAt;
            var ctxPlugin = chart.chart.ctx;
            var xAxe = chart.scales[chart.config.options.scales.xAxes[0].id];
            var yAxe = chart.scales[chart.config.options.scales.yAxes[0].id];

            // I'm not good at maths
            // So I couldn't find a way to make it work ...
            // ... without having the `min` property set to 0
            if(yAxe.min != 0) return;

            ctxPlugin.strokeStyle = "blue";
        	ctxPlugin.beginPath();
            lineAt = (lineAt - yAxe.min) * (100 / yAxe.max);
            lineAt = (100 - lineAt) / 100 * (yAxe.height) + yAxe.top;
            ctxPlugin.moveTo(xAxe.left, lineAt);
            ctxPlugin.lineTo(xAxe.right, lineAt);
            ctxPlugin.stroke();
        }
    }
});
var chart = new Chart(ctx, {
 type: 'bar',
 data: {
    labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
    datasets: [{
       barThickness: 15,
       maxBarThickness: 100,
       label: '',
       data: stepsData,
       backgroundColor: barBgColor,
    }]
 },
 options: {
   lineAt: {{$get_m_user_daily_goal}},
    scales: {
       yAxes: [{
          ticks: {
             beginAtZero: true,
             stepSize: 1000,
             min: 0,
             max: maxY + 2000
          },
       }],
       xAxes: [{
         gridLines: {
                color: "rgba(0, 0, 0, 0)",
            },
            ticks: {
               stepSize: 1000,
            }
       }]
    },
    barLabels: {
      first: ['&#x2605;', '&#x2605;', '&#x2605;', '&#x2605;', '&#x2605;', '&#x2605;', '&#x2605;'],
      second: ['', '', '', '', '', '','']
    },
    legend: {
        display: false
    },
    animation: {
      duration: animation_time, // general animation time
    },
    hover: {
      animationDuration: animation_time/3, // duration of animations when hovering an item
    },
    responsiveAnimationDuration: 0, // animation duration after a resize
 },
 plugins: [{
      beforeInit: function(chart) {
         chart.data.labels.forEach(function(e, i, a) {
            if (/\n/.test(e)) {
               a[i] = e.split(/\n/);
            }
         });
      }
   }]
});
var colorChangeValue = {{$get_m_user_daily_goal}}; //set this to whatever is the deciding color change value
var dataset = chart.data.datasets[0];
for (var i = 0; i < dataset.data.length; i++) {
  if (dataset.data[i] >= weekGoals[i]) {
    dataset.backgroundColor[i] = '#FFD00D';
  }
}
chart.update();
</script>
@endif
@endsection
