@extends('layouts.app')

@section('content')

<head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.1.9/p5.min.js" integrity="sha512-WIklPM6qPCIp6d3fSSr90j+1unQHUOoWDS4sdTiR8gxUTnyZ8S2Mr8e10sKKJ/bhJgpAa/qG068RDkg6fIlNFA==" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/domarrow.css') }}" />
  <script type="text/javascript" src="{{ URL::asset('js/domarrow.js') }}"></script>
<style media="screen">


.StepProgress {
position: relative;
padding-left: 40px;
list-style: none;
}
.StepProgress::before {
display: inline-block;
content: '';
position: absolute;
left: 15px;
width: 10px;
height: 0;
border-left: 2px solid #CCC;
}
.StepProgress-item {
position: relative;
counter-increment: list;
}
.StepProgress-itemStart {
position: relative;
counter-increment: list;
left: 4px;
}
.StepProgress-item2 {
position: relative;
counter-increment: list;
left: -3px;
}
.StepProgress-item:not(:last-child) {
padding-bottom: 12px;
}
.StepProgress-itemStart:not(:last-child) {
padding-bottom: 12px;
}
.StepProgress-item2:not(:last-child) {
padding-bottom: 10px;
}
.StepProgress-item::before {
display: inline-block;
content: '';
position: absolute;
top: 19px;
left: -31px;
height: 100%;
width: 10px;
border-left: 3px solid #cadcf6;
}
.StepProgress-item2::before {
display: inline-block;
content: '';
position: absolute;
top: 8px;
left: -32px;
height: 100%;
width: 10px;
}
.StepProgress-itemStart::before {
display: inline-block;
content: '';
position: absolute;
left: -35px;
height: 100%;
width: 10px;
border-left: 3px solid #cadcf6;
top: 20px;
z-index: 2
}
.StepProgress-itemStart.is-done::before {
display: inline-block;
content: '';
position: absolute;
left: -35px;
height: 100%;
width: 10px;
border-left: 3px solid #e68f00;
top: 20px;
z-index: 2;
padding-top: 0px;
}
.StepProgress-item::after {
content: '';
display: inline-block;
position: absolute;
top: 4px;
left: -37px;
width: 15px;
height: 15px;
border: 1px solid #cadcf6;
border-radius: 50%;
background-color: #cadcf6;
z-index: 3
}
.StepProgress-item2::after {
background-image: url({{asset('storage/padometerscreen/star_blue.png')}});
content: '';
background-size: 20px 20px;
display: inline-block;
position: absolute;
top: 4px;
left: -37px;
width: 20px;
height: 20px;
/* width: 12px;
height: 12px;
border: 2px solid #CCC; */
/* border-radius: 50%; */
background-color: transparent;
}
.StepProgress-item2.is-done::after {
background-image: url({{asset('storage/padometerscreen/star_yellow.png')}});
content: '';
background-size: 20px 20px;
display: inline-block;
position: absolute;
top: 2px;
left: -37px;
width: 20px;
height: 20px;
/* width: 12px;
height: 12px;
border: 2px solid #CCC; */
/* border-radius: 50%; */
background-color: transparent;
}
.StepProgress-itemStart::after {
background-image: url({{asset('storage/padometerscreen/star_blue.png')}});;
content: '';
background-size: 20px 20px;
display: inline-block;
position: absolute;
top: 2px;
left: -44px;
width: 20px;
height: 20px;
/* width: 12px;
height: 12px;
border: 2px solid #CCC;
border-radius: 50%; */
background-color: transparent;
}
.StepProgress-itemStart.is-done::after {
background-image: url({{asset('storage/padometerscreen/star_yellow.png')}});;
content: '';
background-size: 20px 20px;
display: inline-block;
position: absolute;
top: 2px;
left: -44px;
width: 20px;
height: 20px;
/* width: 12px;
height: 12px;
border: 2px solid #CCC;
border-radius: 50%; */
background-color: transparent;
}
.StepProgress-item.is-done::before {
display: inline-block;
content: '';
position: absolute;
top: 19px;
left: -31px;
height: 100%;
width: 10px;
border-left: 3px solid #e68f00;
}
.StepProgress-item.is-done::after {
content: '';
display: inline-block;
position: absolute;
top: 4px;
left: -37px;
width: 15px;
height: 15px;
border: 1px solid #e68f00;
border-radius: 50%;
background-color: #ffd00d;
z-index: 3
}
.StepProgress-item.current::before {
border-left: 3px solid #7ea8ef;
top: 19px;
}
.StepProgress-item.current::after {
content: "";
font-size: 10px;
color: #FFF;
text-align: center;
border: 1px solid #7ea8ef;
background-color: #7ea8ef;
top: 4px;
}
.StepProgress strong {
display: block;
}

.speech-bubble {
position: relative;
background: #cadcf6;
border-radius: .2em;
}

.speech-bubble:after {
content: '';
position: absolute;
top: 10px;
left: 0;
width: 0;
height: 0;
border: 3px solid transparent;
border-top-color: #cadcf6;
border-top: 4px solid transparent;
border-bottom: 4px solid transparent;

border-right:10px solid #cadcf6;
margin-left: -12px;
margin-right: 0px;
margin-top: 0px;
margin-bottom: 10px;
}



/* PB */
.dd {
position: absolute;
}
.dist_t {
text-align: center !important;
}
.dist_t_p {
  width: 30px;
}
.right_t {
line-height: 0.8;
}
.chartcenter{
position: absolute;
top: -100px;
left: -200px;

text-align: center;

color: red;

}


.a {
color: #000000 !important;
text-decoration: none !important;
}
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
transform: translateY(50%);
z-index: 50;
margin-bottom: -500px;
}
.overlay-text22 {
align-self: flex-start;
transform: translateY(-40%);
z-index: 50;
}
.overlay-text3 {
align-self: flex-start;
transform: translateY(-300%);
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
/* align-self: flex-start;
transform: translateY(0);
z-index: 0;
margin-bottom: -2000px; */
position:relative;
  bottom: 0px;
}
.overlay-tri2 {
  position: static;
align-self: flex-start;
/* transform: translateY(-20%); */
}
#compStar {
  position: relative;
  z-index: 2 !important;
}
#triangle_graph {
  z-index: -5 !important;
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

.body {
background-color:#fffdfa;
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

.top_0 {
top: 10%;
padding-top: 0
}
.overlay-text1 {
  align-self: flex-start;
  transform: translateY(60%);
}
.remMar {
}
#paraCont {
  position: relative;
}
#paraRight{
  position: absolute;
  right: 0%;
  z-index: 5;
}
#paraLeft {
  position: absolute;
  left: 3%;
  top: 0;
  z-index: 5;
  transform: translateY(100%);
}
.refBtn {
  position: fixed;
  bottom: 70px;
  right: 2%;
  z-index: 10;
  height: 55px;
  width: 55px;
}
.navfix {
  position: fixed;
  bottom: 0;
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
</style>
</head>

<body>
  <!-- <div class="container-fluid">
   @if(! empty($checkpoints))
    <div class="row">
      <div class="col" id="checkPoint_name">

      </div>
      <div class="col pt-2 pl-3">
        <ul class="StepProgress" id="progress_bar">

        </ul>
      </div>
      <div class="col" id="checkPoint_name2">

      </div>
    </div>
   @else
   <h4> 申し訳ありませんが、チェックポイントはありません。ツアーを選択してください。</h4>
   @endif
  </div> -->
  
  @if ( empty($m__users_id))
  <div class='text-center'>
    <h2 class='mt-5'> 最初にプロファイルを作成してください <a href="/" style="color:blue !important; margin-top: 28px !important"> ここをクリック </a> </h2>
  </div>
  @else

  <a href="{{ url('/mypage') }}"><img style="border-radius: 50%" class="refBtn mr-2" src="{{ asset('storage/mypage/ref-blue.png') }}" alt=""></a>
  <div class="container-fluid" style="margin-top: 28px !important">
        <div class="row" style="padding: 0 16px 0 0;
                                box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.16);
                                background-color: #ffdd80;">
          <div class="col-2 text-center pl-2 p-2" style="background-color: #ffd00d;">
              <img src="{{ asset('storage/mypage/ico_alert.svg') }}" alt="Icon">
          </div>
          <div class="col-10">
            <p class="pt-1" style="
              font-family: RoundedMplus1c;
              font-size: 90%;
              text-align: left;
              color: #5f2f00;">コレクションに99件のアイテムが追加されました！</p>
          </div>
        </div>
  </div>
      <div class="container-fluid">
        <div class="row" style=" padding: 14px 1px 1px;
          background-color: #2b63c6;">
          <div class="col-1 text-right">
            @if (($steps*$get_m_user_stride/100000) >  $total )
              <img src="{{ asset('storage/mypage/ico_tours.svg') }}" class="pl-2" alt="">
            @endif
          </div>
          <div class="col-9">
            <p class="pl-2" style="margin: 1px 0 2px 10px;
              font-family: RoundedMplus1cBold;
              font-weight: bold;
              text-align: left;
              color: #ffffff;">北陸３県ゆったり満喫旅</p>
          </div>
        </div>
        <div class="row" style=" padding: 5px 1px 10px;
          background-color: #2b63c6;">
          <div class="col-1 text-right">
            <img src="{{ asset('storage/mypage/ico_foot.svg') }}" class="pl-3" alt="">
          </div>
          <div class="col-9">
            <p class="pl-2" style="margin: 0 0 0 12px;
              object-fit: contain;
              font-family: RoundedMplus1c;
              font-size: 16px;
              font-weight: normal;
              font-stretch: normal;
              font-style: normal;
              line-height: 1.56;
              letter-spacing: normal;
              text-align: left;
              color: #ffd00d;;">{{ number_format($steps*$get_m_user_stride/100000,1,'.','') }}km / {{ $total }}km</p>
          </div>
        </div>
    </div>
    @if(! empty($checkpoints))
    <div class="container-fluid pt-3" id="progress_bar">
    </div>
    @else
    <h4> 申し訳ありませんが、チェックポイントはありません。ツアーを選択してください。</h4>
    @endif
    <div class="container pt-3 pb-3">
      <div class="row justify-content-between w-75 mx-auto p-0" style="border-radius: 20px; border: solid 1px #2b63c6;">
        <div class="col-10">
          <a href="/createtour"><p class="p-1 my-auto" style="font-size: 12px; color: #2b63c6">ツアーの一覧や変更はこちら</p></a>
        </div>
        <div class="col text-right">
          <p class="my-auto"><img src="{{ asset('storage/mypage/arrow-right-icon.svg') }}" alt=""></p>
        </div>
      </div>
    </div>
    <div class="container" >
      <p class="w-100 text-center mb-0 pb-0 overlay-text1" style="font-weight: bold; color: #2b63c6;">今日の歩数</p>
      <p class="w-100 text-center pt-0 mt-0"><img class="mt-0 pt-0" src="{{ asset('storage/mypage/lineUp.png') }}" alt=""></p>
    </div>
    @if($today_data >= $get_m_user_daily_goal)
    <div class="container" style="background: url({{asset('storage/padometerscreen/complete01.png')}}); background-size: cover; background-position: center; background-repeat: no-repeat">
      <div class="container-fluid w-75 pb-3">
        <div class="speech-bubble-yel text-center">
          <p class="mb-0 font-weight-bold" style="font-size:90%; color:white;">今日の目標達成！</p>
        </div>
      </div>
      <div class="container-fluid text-center">
        <img src="{{asset('storage/padometerscreen/star.png')}}" alt="">
      </div>
    <!-- <div id="bg_season1" class="container-fluid pt-3" style="background-size: 100% 80%; background-position: right 100%;; background-repeat: no-repeat"> -->
    <div class="relative w-100 h-50" style="background: url({{asset('storage/padometerscreen/graphcomp.png')}}); background-size: 52% 104%; background-position: center; background-repeat: no-repeat">
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
      <div class="container-fluid w-75 pb-3">
        <div class="speech-bubble2 text-center">
          <p class="mb-0 font-weight-bold" style="font-size:90%; color:#113A83;">あと {{ $current_month_steps }}歩 {{ $current_month_steps*$get_m_user_stride/100000 }} で目標達成！</p>
        </div>
      </div>
      <!-- <div id="bg_season2" class="container-fluid pt-3 pb-3" style="background-size: 100% 80%; background-position: right 100%;; background-repeat: no-repeat"> -->
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
    <div class="container pt-3" >
      <p class="w-100 text-center mb-0 pb-0 overlay-text1" style="font-weight: bold; color: #2b63c6;">最近の歩数</p>
      <p class="w-100 text-center pt-0 mt-0"><img class="mt-0 pt-0" src="{{ asset('storage/mypage/lineUp.png') }}" alt=""></p>
    </div>
    <div class="container-fluid pt-3 mt-3">
      <canvas id="ctx" class="pt-3"></canvas>
    </div>
    <div class="container pt-3" >
      <p class="w-100 text-center mb-0 pb-0 overlay-text1" style="font-weight: bold; color: #2b63c6;">今日の歩数</p>
      <p class="w-100 text-center pt-0 mt-0"><img class="mt-0 pt-0" src="{{ asset('storage/mypage/lineUp.png') }}" alt=""></p>
    </div>
    @if( $current_month_steps  >=  $get_m_user_monthly_goal )
    <div class="container pt-3" style="background: url({{asset('storage/padometerscreen/complete01.png')}}); background-size: cover; background-position: center; background-repeat: no-repeat">
      <div id="compStar" class="">
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
              <div class="row" >
                <div class="col text-center">
                  <img src="{{asset('storage/mypage/bg@3x.png')}}" alt="" style="width: 100%;">
                </div>
              </div>
            </div>
          </div>
    @else
    <div class="container">
      <!-- <div class="container-fluid d-lg-none">
        <div class="row justify-content-center">
          <div class="col-sm-3">

          </div>
           <div class="col col-sm-5 text-center">
            <div class="d-flex flex-row-reverse pl-3 pb-3 mb-3 ">
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
            <div class="d-flex flex-row pr-3 overlay-text22">
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
            <div class="d-flex flex-row-reverse pl-3 pb-3 mb-3 ">
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
            <div class="d-flex flex-row pl-3">
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
      </div> -->
      <div id="paraCont" class="">
        <div id="paraRight" class="d-flex flex-row justify-content-end pr-3">
          <p class="font-weight-bold p-1" style="background: #dce0e3; font-size:70%; color:#113A83; border: 2px solid #dce0e3; border-radius: 15px;">残ります @if($get_m_user_monthly_goal <= $current_month_steps) 0
            @else {{ $get_m_user_monthly_goal-$current_month_steps }}歩 {{ round(($get_m_user_monthly_goal-$current_month_steps)*$get_m_user_stride/100000,2) }} @endif Km!</p>
        </div>
        <div id="paraLeft" class="d-flex flex-row justify-content-start mt-3">
          <p class="font-weight-bold p-1" style="background: white; font-size:70%; color:#2b63c6;; border: 1px solid #2b63c6;; border-radius: 15px;">
            あと {{ $current_month_steps }}歩 {{ $current_month_steps*$get_m_user_stride/100000 }} Km!</p>
        </div>
      </div>


            <div id="triCont" class="container-fluid overlay-tri dd">
              <div class="d-flex flex-row justify-content-center">
                  <div id="triangle_graph" class="mt-3"></div>
              </div>
              <div class="container-fluid pt-3 w-25 d-none d-lg-block">
                <p class="text-center" style="background: #113A83; color:#FFFFFF; border: 2px solid #113A83; border-radius: 15px;">今月の累計目標 {{ $get_m_user_monthly_goal }}歩 ({{ $get_m_user_monthly_goal*$get_m_user_stride/100000 }} Km)</p>
              </div>
              <div class="container-fluid pt-3 w-50 d-none d-md-block d-lg-none">
                <p class="text-center" style="background: #113A83; color:#FFFFFF; border: 2px solid #113A83; border-radius: 15px;">今月の累計目標 {{ $get_m_user_monthly_goal }}歩 ({{ $get_m_user_monthly_goal*$get_m_user_stride/100000 }} Km)</p>
              </div>
              <div class="container-fluid pt-3 d-md-none">
                <p class="text-center" style="background: #113A83; color:#FFFFFF; border: 2px solid #113A83; border-radius: 15px;">今月の累計目標 {{ $get_m_user_monthly_goal }}歩 ({{ $get_m_user_monthly_goal*$get_m_user_stride/100000 }} Km)</p>
              </div>

              <!-- <div class="row" style="margin: 0 !important;">
                <div class="col-12" style="margin: 0 !important;">
                  <img class="" style="margin-left: -15px !important;" src="{{ asset('storage/padometerscreen/blue_bottom.png') }}" alt="" >
                </div>
              </div> -->
              <div class="row" >
                <div class="col text-center">
                  <img src="{{asset('storage/mypage/bg@3x.png')}}" alt="" style="width: 100%;">
                </div>
              </div>
              </div>
              <connection from="#paraLeft" to="#triCont" color="#2b63c6" fromX="0.5" fromY="0" toX="0.16" toY="0.41"></connection>
              <connection from="#paraRight" to="#triCont" color="#cecece" fromX="0.4" fromY="0" toX="0.725" toY="0.15"></connection>
    </div>
    @endif
    <div class="container-fluid navfix" style="background-color: #2b63c6;">
      <div class="row d-flex text-center">
        <div class="col-3 padding-0 pt-2 navItem is-active" style="border-right: 2px solid #113a83;" id="box1" onclick="navItemClick(this.id);">
          <a href='/mypage'>
            <img id="box1_img" class="pb-0 mb-0" src="{{asset('storage/mypage/box1_sel.png')}}" alt="">
            <p id="box1_title" class="pt-0 mt-0" style="font-size: 60%; font-weight: bold;text-align: center;color: #fddb66;">マイページ</p>
        </a>
        </div>
        <div class="col-3 padding-0 pt-2 navItem" style="border-right: 2px solid #113a83;" id="box2" onclick="navItemClick(this.id);">
          <a href='/mycollection'>
            <img id="box2_img" class="pb-0 mb-0" src="{{asset('storage/mypage/box2.png')}}" alt="">
            <p id="box2_title" class="pt-0 mt-0" style="font-size: 60%; font-weight: normal;text-align: center;color: #ffffff;">コレクション</p>
          </a>
        </div>
        <div class="col-3 padding-0 pt-2 navItem" style="border-right: 2px solid #113a83;" id="box3" onclick="navItemClick(this.id);">
          <a href="{{ route('userhistory', [now()->year,now()->month]) }}" >
            <img id="box3_img" class="pb-0 mb-0" src="{{asset('storage/mypage/box3.png')}}" alt="">
            <p id="box3_title" class="pt-0 mt-0" style="font-size: 60%; font-weight: normal;text-align: center;color: #ffffff;">マイヒストリ</p>
          </a>
        </div>
        <div class="col-3 padding-0 pt-2 navItem" id="box4" onclick="navItemClick(this.id);">
          <a href="/showprofiledetails">
            <img id="box4_img" class="pb-0 mb-0" src="{{asset('storage/mypage/box4.png')}}" alt="">
            <p id="box4_title" class="pt-0 mt-0" style="font-size: 60%; font-weight: normal;text-align: center;color: #ffffff;">設定</p>
          </a>
        </div>
      </div>
    </div>



<script type="text/javascript">
var currentNav = "box1";
var clickedNav = "";
var cur_imgid = "box1_img";
var cur_imgName = "box1_sel.png";
var clicked_imgid = "";
var clicked_imgName = "";
var cur_title = "box1_title";
var clicked_title = "";
// var comPath1 = "{{URL::asset('storage/mypage/";
// var comPath2 = "')}}";
var def_path = "{{URL::asset('storage/mypage/box1_sel.png')}}";
  function navItemClick(id) {
    console.log(id);
    if (id != currentNav) {
      console.log("if",id);
      clicked_imgid = id + "_img";
      clicked_imgName = id + "_sel.png";
      cur_imgid = currentNav + "_img";
      cur_imgName = currentNav + ".png";
      cur_title = currentNav + "_title";
      clicked_title = id + "_title";
      clicked_imgName = def_path.replace("box1_sel.png",clicked_imgName);
      cur_imgName = def_path.replace("box1_sel.png",cur_imgName);
      document.getElementById(currentNav).className = "col-3 padding-0 pt-2 navItem";
        document.getElementById(cur_imgid).src = cur_imgName;
        document.getElementById(id).className = "col-3 padding-0 pt-2 navItem is-active";
        document.getElementById(clicked_imgid).src = clicked_imgName;
        document.getElementById(cur_title).style.color = "#fff";
        document.getElementById(cur_title).style.fontWeight = "normal";
        document.getElementById(clicked_title).style.color = "#fddb66";
        document.getElementById(clicked_title).style.fontWeight = "bold";
      currentNav = id;
    }
  }
</script>
  <!-- <div class="container pt-3">
        <div class="relative w-100 h-50">
      <canvas id="myChart"></canvas>
      <div class="absolute-center text-center">
        <p class="mb-0 p-0" style="font-size:70%; color:#3476ea;">3.5 km</p>
        <p class="font-weight-bold mb-0 p-0 text-wrap" style="color:#3476ea;">5,432 ##</p>
        <p class="mb-0 mt-0 p-0" style="font-size:70%;">________________</p>
        <p class="font-weight-bold mb-0 mt-0">8,000 ##</p>
        <p class="mb-0" style="font-size:70%;">5.2 km</p>
      </div>
    </div>
      </div>
      <div class="container pt-3 mt-3">
        <canvas id="ctx"></canvas>
      </div> -->
  <!-- <script src="https://www.gstatic.com/charts/loader.js"></script>
  <script>
  google.load("visualization", "1", {
    packages: ["corechart"]
  });

  google.setOnLoadCallback(init);

  function drawChart(id, title, comp, rem) {
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Volume');
    data.addColumn('number', 'Mortgage Volume');
    data.addRows([
        ['Completed', comp],
        ['Remaining', rem]
        ]);
    var options = {
        title:title,
        width: 120,
        height: 120,
        colors: ['#7acdc4', '#ccece8'],
        pieSliceText:'none',
        pieHole: 0.70,
        legend: 'none',
        tooltip: {
          text: 'percentage'
        },
        tooltip: {
          textStyle: {
            fontSize: 6
          }
        }
        //legend: { position: 'labeled' },
    };
    var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
    chart.draw(data, options);

    var comp_percent = (comp/(comp+rem))*100;
    var percent = 0;
      // start the animation loop
      var handler = setInterval(function(){
          // apply new values
          data.setValue(0, 1, percent);
          data.setValue(1, 1, 100 - percent);
          // update the pie
          chart.draw(data, options);
          // check if we have reached the desired value
          if (percent >= comp_percent) {
            // stop the loop
            clearInterval(handler);
              centerText('#chart_div', 0, 40, 60);
          }
          // values increment
          percent += 1;

      }, 15);

  }

  function centerText(chart, idx, X, Y) {
  var cht = document.querySelector(chart);
  var txt = document.querySelectorAll(chart + " text");
  //var chW = cht.width/2;
  //var chH = cht.height/2;
  //var txW = txt[idx].width/2;
  //var txH = txt[idx].height/2;
  //var W = chW - txW;
  //var H = chH - txH;
  txt[idx].setAttribute('x', X);
  txt[idx].setAttribute('y', Y);
  }

  function init() {

  if({{ $today_data }} > 0){
      comp = {{ $today_data*$get_m_user_stride/100000 }};
      if({{ $today_data*$get_m_user_stride/100000 }} > {{ $get_m_user_daily_goal*$get_m_user_stride/100000 }})
      { rem = 0;
      }
      else{
      rem =  {{ ($get_m_user_daily_goal*$get_m_user_stride/100000)-($today_data*$get_m_user_stride/100000) }};
      }
  }
  else{
      comp = 0;
      rem = 2000;
  }

  drawChart('chart_div', 'Step Count', comp, rem);
  }
  </script>


  <script>
  google.charts.load('current', {packages: ['corechart', 'bar']});
  google.charts.setOnLoadCallback(drawBasic);

  function drawBasic() {

  var weekDates = datesofWeek();
  console.log(weekDates[1].getMonth());

  var dataLabel = ['Days', 'Steps', { role: 'style' }, { role: 'annotation' } ];
  var steps = 0;
  var row1 = ['Mon', steps, '#7acdc4', weekDates[0].getDate() ];
  var row2 = ['Tue', steps, '#7acdc4', weekDates[1].getDate() ];
  var row3 = ['Wed', steps, '#7acdc4', weekDates[2].getDate() ];
  var row4 = ['Thu', steps, '#7acdc4', weekDates[3].getDate() ];
  var row5 = ['Fri', steps, '#7acdc4', weekDates[4].getDate() ];
  var row6 = ['Sat', steps, '#7acdc4', weekDates[5].getDate() ];
  var row7 = ['Sun', steps, '#7acdc4', weekDates[6].getDate() ];
  //console.log(formatDate(weekDates[0]));
  var current_week_datas1 = {!! json_encode($current_week_datas) !!}


  Object.keys(current_week_datas1).forEach((single_day_data, i) => {
    //console.log(current_week_datas[single_day_data]);
    var total = 0;
    current_week_datas1[single_day_data].forEach((item, i) => {
      total += parseInt(item["steps"]);
    });
    weekDates.forEach((item, i) => {
      if (formatDate(item) == single_day_data) {
        if (i==0) {
          row1[1] = parseInt(total);
        }
        if (i==1) {
          row2[1] = parseInt(total);
        }
        if (i==2) {
          row3[1] = parseInt(total);
        }
        if (i==3) {
          row4[1] = parseInt(total);
        }
        if (i==4) {
          row5[1] = parseInt(total);
        }
        if (i==5) {
          row6[1] = parseInt(total);
        }
        if (i==6) {
          row7[1] = parseInt(total);
        }
      }
    });

  });

  var data = google.visualization.arrayToDataTable([
       ['Days', 'Steps', { role: 'style' }, { role: 'annotation' } ],
       row1,
       row2,
       row3,
       row4,
       row5,
       row6,
       row7
    ]);
    var view = new google.visualization.DataView(data);
     view.setColumns([0, 1,
                      { calc: "stringify",
                        sourceColumn: 1,
                        type: "string",
                        role: "annotation" },
                      2]);
    var options = {
      title: 'Last 7 days record',
      legend: {
      position: 'none'
      },
      annotations: {
        alwaysOutside: true
      },
      animation:
           {
               "startup": true,
               duration: 2000,
               easing: 'out'
           }
    };

    var chart = new google.visualization.ColumnChart(
      document.getElementById('barchart_div'));

    // var chartLarge = new google.visualization.ColumnChart(
    //   document.getElementById('barchartLarge_div');
    // )
    //
    // chartLarge.draw(view, options);

    chart.draw(view, options);
  }
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
  </script> -->


  <script type="text/javascript">

    var steplist = document.getElementById("progress_bar");
    var tr_count_id = 1;

  if({{ $session_value }} === false){
    var get_m_user_stride = {{ $get_m_user_stride }};
    var steps = {{ $steps }};
    var dist_walked = (get_m_user_stride * steps)/100000;
    var flag1 = 0;

    var checkpoints = {!! json_encode($checkpoints) !!};
    checkpoints.forEach((item, i) => {
      var div_flex = document.createElement("div");
      div_flex.className = "d-flex flex-row justify-content-between";
      var div_dist = document.createElement("div");
      div_dist.className = "dist_t";
      var div_prog = document.createElement("div");
      div_prog.className = "d-flex flex-row w-50";
      var div_sp = document.createElement("div");
      div_sp.className = "StepProgress";
      var div_textRight = document.createElement("div");
      div_textRight.className = "pl-3 w-25 text-left text-break";
      var div_dist_p = document.createElement("p");
      div_dist_p.className = "text-center dist_t_p";
      div_dist_p.style.color = "#113a83";
      div_dist_p.innerHTML = item["distance"].toString() + "km";
      div_dist.appendChild(div_dist_p);
      if (i == 0) {
        if (item["distance"] < dist_walked) {
            // tag.className = "StepProgress-item is-done";
            var div_sp_li = document.createElement("li");
            div_sp_li.className = "StepProgress-itemStart is-done";
            var div_sp_li_p = document.createElement("p");
            div_sp_li_p.className = "py-0 speech-bubble pl-2 w-100 pb-1 text-break";
            div_sp_li_p.style.fontSize = "80%";
            div_sp_li_p.innerHTML = item["checkpoint_title"];
            div_sp_li.appendChild(div_sp_li_p);
            div_sp.appendChild(div_sp_li);
          } else {
            flag1 += 1;
            if (flag1 == 1) {
              // tag.className = "StepProgress-item current";
              var div_sp_li = document.createElement("li");
              div_sp_li.className = "StepProgress-itemStart";
              var div_sp_li_p = document.createElement("p");
              div_sp_li_p.className = "py-0 speech-bubble pl-2 pr-1 w-100 pb-1 text-break";
              div_sp_li_p.style.fontSize = "80%";
              div_sp_li_p.innerHTML = item["checkpoint_title"];
              div_sp_li.appendChild(div_sp_li_p);
              div_sp.appendChild(div_sp_li);
            } else {
              // tag.className = "StepProgress-item";
              var div_sp_li = document.createElement("li");
              div_sp_li.className = "StepProgress-itemStart";
              var div_sp_li_p = document.createElement("p");
              div_sp_li_p.className = "py-0 speech-bubble pl-2 pr-1 w-100 pb-1 text-break";
              div_sp_li_p.style.fontSize = "80%";
              div_sp_li_p.innerHTML = item["checkpoint_title"];
              div_sp_li.appendChild(div_sp_li_p);
              div_sp.appendChild(div_sp_li);
            }
          }
      } else if (i == checkpoints.length - 1) {
        if (item["distance"] <= dist_walked) {
            // tag.className = "StepProgress-item is-done";
            var div_sp_li = document.createElement("li");
            div_sp_li.className = "StepProgress-item2 is-done";
            var div_sp_li_p = document.createElement("p");
            div_sp_li_p.className = "py-0 speech-bubble pl-2 pr-1 w-100 pb-1 text-break";
            div_sp_li_p.style.fontSize = "80%";
            div_sp_li_p.innerHTML = item["checkpoint_title"];
            div_sp_li.appendChild(div_sp_li_p);
            div_sp.appendChild(div_sp_li);
          } else {
            flag1 += 1;
            if (flag1 == 1) {
              // tag.className = "StepProgress-item current";
              var div_sp_li = document.createElement("li");
              div_sp_li.className = "StepProgress-item2";
              var div_sp_li_p = document.createElement("p");
              div_sp_li_p.className = "py-0 speech-bubble pl-2 pr-1 w-100 pb-1 text-break";
              div_sp_li_p.style.fontSize = "80%";
              div_sp_li_p.innerHTML = item["checkpoint_title"];
              div_sp_li.appendChild(div_sp_li_p);
              div_sp.appendChild(div_sp_li);
            } else {
              // tag.className = "StepProgress-item";
              var div_sp_li = document.createElement("li");
              div_sp_li.className = "StepProgress-item2";
              var div_sp_li_p = document.createElement("p");
              div_sp_li_p.className = "py-0 speech-bubble pl-2 pr-1 w-100 pb-1 text-break";
              div_sp_li_p.style.fontSize = "80%";
              div_sp_li_p.innerHTML = item["checkpoint_title"];
              div_sp_li.appendChild(div_sp_li_p);
              div_sp.appendChild(div_sp_li);
            }
          }
      } else {
        if (item["distance"] <= dist_walked) {
            // tag.className = "StepProgress-item is-done";
            var div_sp_li = document.createElement("li");
            div_sp_li.className = "StepProgress-item is-done";
            var div_sp_li_p = document.createElement("p");
            div_sp_li_p.className = "py-0 speech-bubble pl-2 pr-1 w-100 pb-1 text-break";
            div_sp_li_p.style.fontSize = "80%";
            div_sp_li_p.innerHTML = item["checkpoint_title"];
            div_sp_li.appendChild(div_sp_li_p);
            div_sp.appendChild(div_sp_li);
          } else {
            flag1 += 1;
            if (flag1 == 1) {
              // tag.className = "StepProgress-item current";
              var div_sp_li = document.createElement("li");
              div_sp_li.className = "StepProgress-item current";
              var div_sp_li_p = document.createElement("p");
              div_sp_li_p.className = "py-0 speech-bubble pl-2 pr-1 w-100 pb-1 text-break";
              div_sp_li_p.style.fontSize = "80%";
              div_sp_li_p.innerHTML = item["checkpoint_title"];
              div_sp_li.appendChild(div_sp_li_p);
              div_sp.appendChild(div_sp_li);
            } else {
              // tag.className = "StepProgress-item";
              var div_sp_li = document.createElement("li");
              div_sp_li.className = "StepProgress-item";
              var div_sp_li_p = document.createElement("p");
              div_sp_li_p.className = "py-0 speech-bubble pl-2 pr-1 w-100 pb-1 text-break";
              div_sp_li_p.style.fontSize = "80%";
              div_sp_li_p.innerHTML = item["checkpoint_title"];
              div_sp_li.appendChild(div_sp_li_p);
              div_sp.appendChild(div_sp_li);
            }
          }
      }
      var div_textRight_p = document.createElement("p");
      div_textRight_p.className = "py-0 my-0 pl-3 text-center dd right_t";
      div_textRight_p.style.width = '20%';
      div_textRight_p.style.color = "#2b63c6";
      div_textRight_p.style.fontWeight = "bold";

      if (item["prefectures"]) {
        if (i == checkpoints.length - 1) {
            div_textRight_p.className = "py-0 my-0 pl-3 text-xs-left text-sm-center dd pb-0 mb-0 ";
            div_textRight_p.innerHTML = '<img  class = "pt-1 pb-0 mb-0" src="{{URL::asset('storage/mypage/flag.png')}}" alt="flag"/>' + item["prefectures"].substring(0, 5);
        } else {
          div_textRight_p.innerHTML = item["prefectures"];
        }
        div_textRight_p.id = "ar"+tr_count_id.toString();
        console.log(div_textRight_p.id);
        if (tr_count_id > 1) {
          var id_to = "#" +"ar"+ tr_count_id.toString();
          var id_from = "#" +"ar"+ (tr_count_id-1).toString();
          console.log(id_to);
          console.log(id_from);
          var div_con = document.createElement("connection");

          if (i == checkpoints.length - 1) {
            var motion_app = {{ $m__users->motion_app }};
            var motion_web = {{ $m__users->motion_web}};
            console.log(motion_app);
            console.log(motion_web);
            var con_html = '<connection from="'+id_from+'" to="'+id_to+'" color="#cadcf6" fromX="0.6" fromY="1.2" toX="0.6" toY="0.1"></connection>';
          } else {
            var con_html = '<connection from="'+id_from+'" to="'+id_to+'" color="#cadcf6" fromX="0.6" fromY="1.2" toX="0.6" toY="0.1" tail></connection>';
          }
          document.write(con_html);
        }
        tr_count_id += 1;
      } else {
        div_textRight_p.innerHTML = "";
      }

      div_textRight.appendChild(div_textRight_p);
      div_flex.appendChild(div_dist);
      div_prog.appendChild(div_sp);
      div_flex.appendChild(div_prog);
      div_flex.appendChild(div_textRight);
      steplist.appendChild(div_flex);

    });
  }
  else{
    console.log("inelse");
     var get_m_user_stride = {{ $get_m_user_stride }};
    var steps = {{ $steps }};
    var dist_walked = (get_m_user_stride * steps)/100000;
    var flag1 = 0;

    var checkpoints = {!! json_encode($checkpointsr) !!};
    checkpoints.forEach((item, i) => {
      var div_flex = document.createElement("div");
      div_flex.className = "d-flex flex-row justify-content-between";
      var div_dist = document.createElement("div");
      div_dist.className = "dist_t";
      var div_prog = document.createElement("div");
      div_prog.className = "d-flex flex-row w-50";
      var div_sp = document.createElement("div");
      div_sp.className = "StepProgress";
      var div_textRight = document.createElement("div");
      div_textRight.className = "pl-3 w-25 text-left text-break";
      var div_dist_p = document.createElement("p");
      div_dist_p.className = "text-right dist_t_p";
      div_dist_p.innerHTML = ({{ $total }}-item["distance"]).toString() + "km";
      div_dist.appendChild(div_dist_p);
      if (i == 0) {
        if (({{ $total }}-item["distance"]) < dist_walked) {
            // tag.className = "StepProgress-item is-done";
            var div_sp_li = document.createElement("li");
            div_sp_li.className = "StepProgress-itemStart is-done";
            var div_sp_li_p = document.createElement("p");
            div_sp_li_p.className = "py-0 speech-bubble pl-2 w-100 pb-1 text-break";
            div_sp_li_p.innerHTML = item["checkpoint_title"];
            div_sp_li.appendChild(div_sp_li_p);
            div_sp.appendChild(div_sp_li);
          } else {
            flag1 += 1;
            if (flag1 == 1) {
              // tag.className = "StepProgress-item current";
              var div_sp_li = document.createElement("li");
              div_sp_li.className = "StepProgress-itemStart";
              var div_sp_li_p = document.createElement("p");
              div_sp_li_p.className = "py-0 speech-bubble pl-2 w-100 pb-1 text-break";
              div_sp_li_p.innerHTML = item["checkpoint_title"];
              div_sp_li.appendChild(div_sp_li_p);
              div_sp.appendChild(div_sp_li);
            } else {
              // tag.className = "StepProgress-item";
              var div_sp_li = document.createElement("li");
              div_sp_li.className = "StepProgress-itemStart";
              var div_sp_li_p = document.createElement("p");
              div_sp_li_p.className = "py-0 speech-bubble pl-2 w-100 pb-1 text-break";
              div_sp_li_p.innerHTML = item["checkpoint_title"];
              div_sp_li.appendChild(div_sp_li_p);
              div_sp.appendChild(div_sp_li);
            }
          }
      } else if (i == checkpoints.length - 1) {
        if (({{ $total }}-item["distance"]) <= dist_walked) {
            // tag.className = "StepProgress-item is-done";
            var div_sp_li = document.createElement("li");
            div_sp_li.className = "StepProgress-item2 is-done";
            var div_sp_li_p = document.createElement("p");
            div_sp_li_p.className = "py-0 speech-bubble pl-2 w-100 pb-1 text-break";
            div_sp_li_p.innerHTML = item["checkpoint_title"];
            div_sp_li.appendChild(div_sp_li_p);
            div_sp.appendChild(div_sp_li);
          } else {
            flag1 += 1;
            if (flag1 == 1) {
              // tag.className = "StepProgress-item current";
              var div_sp_li = document.createElement("li");
              div_sp_li.className = "StepProgress-item2";
              var div_sp_li_p = document.createElement("p");
              div_sp_li_p.className = "py-0 speech-bubble pl-2 w-100 pb-1 text-break";
              div_sp_li_p.innerHTML = item["checkpoint_title"];
              div_sp_li.appendChild(div_sp_li_p);
              div_sp.appendChild(div_sp_li);
            } else {
              // tag.className = "StepProgress-item";
              var div_sp_li = document.createElement("li");
              div_sp_li.className = "StepProgress-item2";
              var div_sp_li_p = document.createElement("p");
              div_sp_li_p.className = "py-0 speech-bubble pl-2 w-100 pb-1 text-break";
              div_sp_li_p.innerHTML = item["checkpoint_title"];
              div_sp_li.appendChild(div_sp_li_p);
              div_sp.appendChild(div_sp_li);
            }
          }
      } else {
        if (({{ $total }}-item["distance"]) <= dist_walked) {
            // tag.className = "StepProgress-item is-done";
            var div_sp_li = document.createElement("li");
            div_sp_li.className = "StepProgress-item is-done";
            var div_sp_li_p = document.createElement("p");
            div_sp_li_p.className = "py-0 speech-bubble pl-2 w-100 pb-1 text-break";
            div_sp_li_p.innerHTML = item["checkpoint_title"];
            div_sp_li.appendChild(div_sp_li_p);
            div_sp.appendChild(div_sp_li);
          } else {
            flag1 += 1;
            if (flag1 == 1) {
              // tag.className = "StepProgress-item current";
              var div_sp_li = document.createElement("li");
              div_sp_li.className = "StepProgress-item current";
              var div_sp_li_p = document.createElement("p");
              div_sp_li_p.className = "py-0 speech-bubble pl-2 w-100 pb-1 text-break";
              div_sp_li_p.innerHTML = item["checkpoint_title"];
              div_sp_li.appendChild(div_sp_li_p);
              div_sp.appendChild(div_sp_li);
            } else {
              // tag.className = "StepProgress-item";
              var div_sp_li = document.createElement("li");
              div_sp_li.className = "StepProgress-item";
              var div_sp_li_p = document.createElement("p");
              div_sp_li_p.className = "py-0 speech-bubble pl-2 w-100 pb-1 text-break";
              div_sp_li_p.innerHTML = item["checkpoint_title"];
              div_sp_li.appendChild(div_sp_li_p);
              div_sp.appendChild(div_sp_li);
            }
          }
      }
      var div_textRight_p = document.createElement("p");
      div_textRight_p.className = "py-0 my-0 pl-3 text-center dd right_t";
      div_textRight_p.style.width = '20%';
      div_textRight_p.style.color = "#2b63c6";
      div_textRight_p.style.fontWeight = "bold";

      if (item["prefectures"]) {
        if (i == checkpoints.length - 1) {
          console.log("cp", "last");
            div_textRight_p.className = "py-0 my-0 pl-3 text-xs-left text-sm-center dd pb-0 mb-0 ";
            div_textRight_p.innerHTML = '<img  class = "pt-1 pb-0 mb-0" src="{{URL::asset('storage/mypage/flag.png')}}" alt="flag"/>' + item["prefectures"].substring(0, 5);
        } else {
          div_textRight_p.innerHTML = item["prefectures"];
        }
        div_textRight_p.id = "ar"+tr_count_id.toString();
        console.log(div_textRight_p.id);
        if (tr_count_id > 1) {
          var id_to = "#" +"ar"+ tr_count_id.toString();
          var id_from = "#" +"ar"+ (tr_count_id-1).toString();
          console.log(id_to);
          console.log(id_from);
          var div_con = document.createElement("connection");

          if (i == checkpoints.length - 1) {
            var motion_app = {{ $m__users->motion_app }};
            var motion_web = {{ $m__users->motion_web}};
            console.log(motion_app);
            console.log(motion_web);
            var con_html = '<connection from="'+id_from+'" to="'+id_to+'" color="#cadcf6" fromX="0.6" fromY="1.2" toX="0.6" toY="0.1"></connection>';
          } else {
            var con_html = '<connection from="'+id_from+'" to="'+id_to+'" color="#cadcf6" fromX="0.6" fromY="1.2" toX="0.6" toY="0.1" tail></connection>';
          }
          document.write(con_html);
        }
        tr_count_id += 1;
      } else {
        div_textRight_p.innerHTML = "";
      }

      div_textRight.appendChild(div_textRight_p);
      div_flex.appendChild(div_dist);
      div_prog.appendChild(div_sp);
      div_flex.appendChild(div_prog);
      div_flex.appendChild(div_textRight);
      steplist.appendChild(div_flex);


    });


  }


  </script>
  <!-- <script type="text/javascript">
    var weekMap = [6, 0, 1, 2, 3, 4, 5];
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
    </script> -->
    <!-- <script type="text/javascript">
    var comp, rem;
    if({{ $today_data }} > 0){
        comp = {{ $today_data*$get_m_user_stride/100000 }};
        if({{ $today_data*$get_m_user_stride/100000 }} > {{ $get_m_user_daily_goal*$get_m_user_stride/100000 }})
        { rem = 0;
        }
        else{
        rem =  {{ ($get_m_user_daily_goal*$get_m_user_stride/100000)-($today_data*$get_m_user_stride/100000) }};
        }
    }
    else{
        comp = 0;
        rem = 2000;
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
        "#3476ea",
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
    cutoutPercentage: 85
  }
  });

  </script>
  <script type="text/javascript">

  var current_week_datas1 = {!! json_encode($current_week_datas) !!}
  var stepsData = [2800,1620,0,525,2015,1875,0];

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

  Chart.plugins.register({
   afterDatasetsDraw: function(chart, ease) {
      var barLabels = chart.options.barLabels;
      if (!barLabels) return;
      var ctx = chart.ctx;
      chart.data.datasets.forEach(function(dataset, index) {
        console.log("dataset");
        console.log(index);
         var meta = chart.getDatasetMeta(index);
         if (!meta.hidden) {
            meta.data.forEach(function(segment, index) {
              if (stepsData[index]>0) {
                console.log("segment");
                console.log(index);
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
                 if (stepsData[index]>2000) {
                   ctx.fillText(text1, x-5, y-10);
                 }
                 ctx.font = 4*width/5 + 'px Arial';
                 ctx.fillStyle = '#3476ea'; //second label's font color
                 // ctx.translate(x, y);
                 ctx.rotate(-Math.PI / 2);
                 var textVertical = stepsData[index] + " steps";
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
         backgroundColor: ['#fd625e', '#01b8aa', '#01b8aa', '#01b8aa', '#fd625e', '#fd625e', '#01b8aa'],
      }]
   },
   options: {
     lineAt: 2000,
      scales: {
         yAxes: [{
            ticks: {
               beginAtZero: true,
               stepSize: 1000,
               min: 0
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
      }
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
  </script> -->
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
  <!-- <script type="text/javascript">

    var mon = 11;
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
  </script> -->

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
       if (stepsData[index]>={{$get_m_user_daily_goal}}) {
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
  if (dataset.data[i] >= colorChangeValue) {
  dataset.backgroundColor[i] = '#FFD00D';
  }
  }
  chart.update();
  </script>
@endif
</body>
  @endsection
