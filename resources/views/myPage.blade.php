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
  <link rel="stylesheet" href="/css/style_mypage_v1.css">
</head>

<body>

  @if ( empty($m__users_id))
  <div class='text-center'>
    <h2 class='mt-5'> 最初にプロファイルを作成してください <a href="/" style="color:blue !important; margin-top: 28px !important"> ここをクリック </a> </h2>
  </div>
  @else

  <a href="{{ url('/mypage') }}"><img style="border-radius: 50%" class="refBtn mr-2" src="{{ asset('storage/mypage/ref-blue.png') }}" alt=""></a>
  <div id="div_notification" class="container-fluid" style="margin-top: 0px !important">
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
              color: #5f2f00;">コレクションに{{$unseen_collection}}件のアイテムが追加されました！</p>
          </div>
        </div>
  </div>
      <div id="div_notification_below" class="container-fluid pt-3">
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
              color: #ffffff;">@if($get_t_tour == null) No tour selected! @else {{$get_t_tour->m_tours->tour_title}} @endif</p>
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
              color: #ffd00d;;">{{ number_format($steps*$get_m_user_stride/100000,2,'.','') }}km / {{ $total }}km</p>
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
          <a href="/createtour"><p class="p-1 my-auto" style="font-size: 12px; color: #2b63c6">コースの一覧や変更はこちら</p></a>
        </div>
        <div class="col text-right">
          <p class="my-auto"><img src="{{ asset('storage/mypage/arrow-right-icon.svg') }}" alt=""></p>
        </div>
      </div>
    </div>
    <div class="container" >
      <p class="w-100 text-center mb-0 pb-0 overlay-text1" style="font-weight: bold; color: #2b63c6;">今日の歩数</p>
      <p class="w-100 text-center pt-0 mt-0"><img class="mt-0 pt-0" style="width:100%; height:auto;" src="{{ asset('storage/mypage/lineUp.png') }}" alt=""></p>
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
    <div class="relative w-100 h-50" style="background: url({{asset('storage/padometerscreen/graphcomp.png')}}); background-size: 95% 104%; background-position: center; background-repeat: no-repeat">
      <canvas id="myChart"></canvas>
      <div class="absolute-center text-center">
        <p class="mb-0 p-0" style="font-size:70%; color:#ff9327;"> {{ number_format(($today_data)*$get_m_user_stride/100000, 2 ,'.',',') }}km</p>
        <p class="font-weight-bold mb-0 p-0 text-wrap" style="color:#ff9327;">{{ number_format($today_data, 0 ,'.',',') }}歩</p>
        <p class="mb-0 mt-0 p-0" style="font-size:70%;">----------------</p>
        <p class="font-weight-bold mb-0 mt-0" style="color: #113A83">{{ number_format($get_m_user_daily_goal, 0 ,'.',',') }}歩</p>
        <p class="mb-0" style="font-size:70%; color: #113A83">{{ number_format($get_m_user_daily_goal*$get_m_user_stride/100000, 2 ,'.',',') }}km</p>
      </div>
    </div>
  </div>
</div>
    @else
    <div class="container">
      <div class="container-fluid w-100 pb-3">
        <div class="speech-bubble2 text-center pb-1 pt-1">
          <p class="mb-0 font-weight-bold" style="font-size:90%; color:#113A83;">あと {{ $get_m_user_daily_goal - $today_data }}歩 ({{ round(($get_m_user_daily_goal*$get_m_user_stride/100000 - $today_data*$get_m_user_stride/100000),2) }}km) で目標達成！</p>
        </div>
      </div>
      <!-- <div id="bg_season2" class="container-fluid pt-3 pb-3" style="background-size: 100% 80%; background-position: right 100%;; background-repeat: no-repeat"> -->
      <div class="relative w-100 h-50" style="background: url({{asset('storage/padometerscreen/graph.png')}}); background-size: 95% 104%; background-position: center; background-repeat: no-repeat">
        <canvas id="myChart"></canvas>
        <div class="absolute-center text-center">
          <p class="mb-0 p-0" style="font-size:70%; color:#2b63c6;">{{ number_format(($today_data)*$get_m_user_stride/100000, 2 ,'.',',') }}km</p>
          <p class="font-weight-bold mb-0 p-0 text-wrap" style="color:#2b63c6;">{{ number_format($today_data, 0 ,'.',',') }}歩</p>
          <p class="mb-0 mt-0 p-0" style="font-size:70%;">---------------</p>
          <p class="font-weight-bold mb-0 mt-0" style="color:#113A83;">{{ number_format($get_m_user_daily_goal, 0 ,'.',',') }}歩</p>
          <p class="mb-0" style="font-size:70%; color:#113A83;">{{ number_format($get_m_user_daily_goal*$get_m_user_stride/100000, 2 ,'.',',') }}km</p>
        </div>
      </div>
    </div>
  </div>
    @endif
    <div class="container pt-3" >
      <p class="w-100 text-center mb-0 pb-0 overlay-text1" style="font-weight: bold; color: #2b63c6;">最近の歩数</p>
      <p class="w-100 text-center pt-0 mt-0"><img class="mt-0 pt-0" style="width:100%; height:auto;" src="{{ asset('storage/mypage/lineUp.png') }}" alt=""></p>
    </div>
    <div class="container-fluid pt-3 mt-3">
      <canvas id="ctx" class="pt-3"></canvas>
    </div>
    <div class="container pt-3" >
      <p class="w-100 text-center mb-0 pb-0 overlay-text1" style="font-weight: bold; color: #2b63c6;">今日の歩数</p>
      <p class="w-100 text-center pt-0 mt-0"><img class="mt-0 pt-0" style="width:100%; height:auto;" src="{{ asset('storage/mypage/lineUp.png') }}" alt=""></p>
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
          <p class="text-center" style="background: white; color:#ff9327; border: 2px solid #ff9327; border-radius: 15px;">今日までの累計 {{ number_format($current_month_steps,2,'.',',') }}歩 ({{ number_format($current_month_steps*$get_m_user_stride/100000,2,'.',',') }} Km)</p>
        </div>

        <div class="container-fluid w-50 d-none d-md-block d-lg-none">
          <br>
          <div class="speech-bubble2 text-center" style="background: #ff9327">
            <p class="mb-0 font-weight-bold" style="font-size:90%; color:#113A83;">あと {{ number_format($current_month_steps,2,'.',',') }}歩 {{ number_format($current_month_steps*$get_m_user_stride/100000,2,'.',',') }} Km!</p>
          </div>
        </div>
        <div class="container-fluid pt-3 w-50 d-none d-md-block d-lg-none">
          <p class="text-center" style="background: white; color:#ff9327; border: 2px solid #ff9327; border-radius: 15px;">今日までの累計 {{ number_format($current_month_steps,2,'.',',') }}歩 ({{ number_format($current_month_steps*$get_m_user_stride/100000,2,'.',',') }} Km)</p>
        </div>

        <div class="container-fluid w-25 d-none d-lg-block">
          <br>
          <div class="speech-bubble2 text-center" style="background: #ff9327">
            <p class="mb-0 font-weight-bold" style="font-size:90%; color:#113A83;">あと {{ number_format($current_month_steps,2,'.',',') }}歩 {{ number_format($current_month_steps*$get_m_user_stride/100000,2,'.',',') }} Km!</p>
          </div>
        </div>
        <div class="container-fluid pt-3 w-25 d-none d-lg-block">
          <p class="text-center" style="background: white; color:#ff9327; border: 2px solid #ff9327; border-radius: 15px;">今日までの累計 {{ number_format($current_month_steps,2,'.',',') }}歩 ({{ number_format($current_month_steps*$get_m_user_stride/100000,2,'.',',') }} Km)</p>
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
                <p class="text-center" style="font-size:75%; background: #113A83; color:#FFFFFF; border: 2px solid #113A83; border-radius: 15px;">今月の累計目標 {{ number_format($current_month_steps,0,'.',',') }}歩 ({{ number_format($current_month_steps*$get_m_user_stride/100000,2,'.',',') }} Km)</p>
              </div>
              <div class="container-fluid pt-3 w-50 d-none d-md-block d-lg-none">
                <p class="text-center" style="font-size:75%; background: #113A83; color:#FFFFFF; border: 2px solid #113A83; border-radius: 15px;">今月の累計目標 {{ number_format($current_month_steps,0,'.',',') }}歩 ({{ number_format($current_month_steps*$get_m_user_stride/100000,2,'.',',') }} Km)</p>
              </div>
              <div class="container-fluid pt-3 d-md-none">
                <p class="text-center" style="font-size:75%; background: #113A83; color:#FFFFFF; border: 2px solid #113A83; border-radius: 15px;">今月の累計目標 {{ number_format($current_month_steps,0,'.',',') }}歩 ({{ number_format($current_month_steps*$get_m_user_stride/100000,2,'.',',') }} Km)</p>
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
          <p class="font-weight-bold p-1" style="background: #dce0e3; font-size:70%; color:#113A83; border: 2px solid #dce0e3; border-radius: 15px;">あと@if($get_m_user_monthly_goal <= $current_month_steps) 0 @else {{ number_format($get_m_user_monthly_goal-$current_month_steps,2,'.',',') }}歩({{ number_format(($get_m_user_monthly_goal-$current_month_steps)*$get_m_user_stride/100000,2,'.',',') }}km)で目標達成 @endif</p>
        </div>
        <div id="paraLeft" class="d-flex flex-row justify-content-start mt-3">
          <p class="font-weight-bold p-1" style="background: white; font-size:70%; color:#2b63c6;; border: 1px solid #2b63c6;; border-radius: 15px;">
            今日までの累計{{ number_format($current_month_steps,2,'.',',') }}歩({{ number_format($current_month_steps*$get_m_user_stride/100000,2,'.',',') }}km)</p>
        </div>
      </div>


            <div id="triCont" class="container-fluid overlay-tri dd">
              <div class="d-flex flex-row justify-content-center">
                  <div id="triangle_graph" class="mt-3"></div>
              </div>
              <div class="container-fluid pt-3 w-25 d-none d-lg-block">
                <p class="text-center" style="font-size:75%; background: #113A83; color:#FFFFFF; border: 2px solid #113A83; border-radius: 15px;">今月の累計目標 {{ number_format($current_month_steps,0,'.',',') }}歩 ({{ number_format($current_month_steps*$get_m_user_stride/100000,2,'.',',') }} Km)</p>
              </div>
              <div class="container-fluid pt-3 w-50 d-none d-md-block d-lg-none">
                <p class="text-center" style="font-size:75%; background: #113A83; color:#FFFFFF; border: 2px solid #113A83; border-radius: 15px;">今月の累計目標 {{ number_format($current_month_steps,0,'.',',') }}歩 ({{ number_format($current_month_steps*$get_m_user_stride/100000,2,'.',',') }} Km)</p>
              </div>
              <div class="container-fluid pt-3 d-md-none">
                <p class="text-center" style="font-size:75%; background: #113A83; color:#FFFFFF; border: 2px solid #113A83; border-radius: 15px;">今月の累計目標 {{ number_format($current_month_steps,0,'.',',') }}歩 ({{ number_format($current_month_steps*$get_m_user_stride/100000,2,'.',',') }} Km)</p>
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
              <div class="d-md-none">
                <connection from="#paraLeft" to="#triCont" color="#2b63c6" fromX="0.5" fromY="0" toX="0.16" toY="0.41"></connection>
                <connection from="#paraRight" to="#triCont" color="#cecece" fromX="0.4" fromY="0" toX="0.725" toY="0.15"></connection>
              </div>
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
        <div class="col-3 padding-0 pt-2 navItem" style="border-right: 2px solid #113a83; background: url({{asset('storage/mypage/notify.png')}});  background-position: 70% 20%; background-repeat: no-repeat"
        id="box2" onclick="navItemClick(this.id);">
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
// var currentNav = "box1";
// var clickedNav = "";
// var cur_imgid = "box1_img";
// var cur_imgName = "box1_sel.png";
// var clicked_imgid = "";
// var clicked_imgName = "";
// var cur_title = "box1_title";
// var clicked_title = "";
// var comPath1 = "{{URL::asset('storage/mypage/";
// var comPath2 = "')}}";
// var def_path = "{{URL::asset('storage/mypage/box1_sel.png')}}";
  function navItemClick(id) {
    console.log(id);
  }
</script>
  <script type="text/javascript">
    var div_notification = document.getElementById("div_notification");
    var div_notification_below = document.getElementById("div_notification_below");
    var nav_box2 = document.getElementById("box2");
    var unseen_collection = {{$unseen_collection}};
    console.log("$unseen_collection",unseen_collection);
    if (unseen_collection > 0) {
      nav_box2.style = "border-right: 2px solid #113a83; background: url({{asset('storage/mypage/notify.png')}});  background-position: 70% 20%; background-repeat: no-repeat";
      div_notification.className = "container-fluid";
      div_notification_below.className = "container-fluid";
    } else {
      nav_box2.style = "border-right: 2px solid #113a83";
      div_notification.className = "container-fluid d-none";
      div_notification_below.className = "container-fluid ";
    }
  </script>


  <script type="text/javascript">

  function goToCollectionPage(id) {
    var url = "/mycollection/" + id.toString();
    document.location=url;
  }

  function goToCheckpointPage(id) {
    var url = "/checkpointdetails/" + id.toString();
    document.location=url;
  }

    var steplist = document.getElementById("progress_bar");
    var tr_count_id = 1;
    var prefecture_type = "p";

  if({{ $session_value }} === 0){
    var get_m_user_stride = {{ $get_m_user_stride }};
    var steps = {{ $steps }};
    var dist_walked = (get_m_user_stride * steps)/100000;
    var flag1 = 0;
    var col_id = {!! json_encode($checkpoint_collection_id) !!};
    console.log("name_check", col_id);
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
            div_sp_li_p.id = col_id[i];
            div_sp_li_p.setAttribute('onclick', "goToCollectionPage(this.id)");
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
              div_sp_li_p.id = item["id"];
              div_sp_li_p.setAttribute('onclick', "goToCheckpointPage(this.id)");
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
              div_sp_li_p.id = item["id"];
              div_sp_li_p.setAttribute('onclick', "goToCheckpointPage(this.id)");
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
            div_sp_li_p.id = col_id[i];
            div_sp_li_p.setAttribute('onclick', "goToCollectionPage(this.id)");
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
              div_sp_li_p.id = item["id"];
              div_sp_li_p.setAttribute('onclick', "goToCheckpointPage(this.id)");
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
              div_sp_li_p.id = item["id"];
              div_sp_li_p.setAttribute('onclick', "goToCheckpointPage(this.id)");
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
            div_sp_li_p.id = col_id[i];
            div_sp_li_p.setAttribute('onclick', "goToCollectionPage(this.id)");
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
              div_sp_li_p.id = item["id"];
              div_sp_li_p.setAttribute('onclick', "goToCheckpointPage(this.id)");
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
              div_sp_li_p.id = item["id"];
              div_sp_li_p.setAttribute('onclick', "goToCheckpointPage(this.id)");
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
      if (i == checkpoints.length - 1) {
        prefecture_type = item["prefectures"];
      }
      console.log("p_type", prefecture_type);
      console.log("lc", item["prefectures"].localeCompare(prefecture_type));
      if (item["prefectures"].localeCompare(prefecture_type) != 0 || (i == checkpoints.length - 1)) {
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
            var con_html = '<connection from="'+id_from+'" to="'+id_to+'" color="#cadcf6" fromX="0.6" fromY="1.8" toX="0.6" toY="-0.5"></connection>';
          } else {
            var con_html = '<connection from="'+id_from+'" to="'+id_to+'" color="#cadcf6" fromX="0.6" fromY="1.8" toX="0.6" toY="-0.5" tail></connection>';
          }
          document.write(con_html);
        }
        tr_count_id += 1;
      } else {
        div_textRight_p.innerHTML = "";
      }
      prefecture_type = item["prefectures"];
      div_textRight.appendChild(div_textRight_p);
      div_flex.appendChild(div_dist);
      div_prog.appendChild(div_sp);
      div_flex.appendChild(div_prog);
      div_flex.appendChild(div_textRight);
      steplist.appendChild(div_flex);

    });
  }
  else{
    var col_id_r = {!! json_encode($checkpoint_collection_id) !!};
    var col_id = col_id_r.reverse()
    console.log("name_check_2", col_id);
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
            div_sp_li_p.id = col_id[i];
            div_sp_li_p.setAttribute('onclick', "goToCollectionPage(this.id)");
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
              div_sp_li_p.id = item["id"];
              div_sp_li_p.setAttribute('onclick', "goToCheckpointPage(this.id)");
              div_sp_li.appendChild(div_sp_li_p);
              div_sp.appendChild(div_sp_li);
            } else {
              // tag.className = "StepProgress-item";
              var div_sp_li = document.createElement("li");
              div_sp_li.className = "StepProgress-itemStart";
              var div_sp_li_p = document.createElement("p");
              div_sp_li_p.className = "py-0 speech-bubble pl-2 w-100 pb-1 text-break";
              div_sp_li_p.innerHTML = item["checkpoint_title"];
              div_sp_li_p.id = item["id"];
              div_sp_li_p.setAttribute('onclick', "goToCheckpointPage(this.id)");
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
            div_sp_li_p.id = col_id[i];
            div_sp_li_p.setAttribute('onclick', "goToCollectionPage(this.id)");
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
              div_sp_li_p.id = item["id"];
              div_sp_li_p.setAttribute('onclick', "goToCheckpointPage(this.id)");
              div_sp_li.appendChild(div_sp_li_p);
              div_sp.appendChild(div_sp_li);
            } else {
              // tag.className = "StepProgress-item";
              var div_sp_li = document.createElement("li");
              div_sp_li.className = "StepProgress-item2";
              var div_sp_li_p = document.createElement("p");
              div_sp_li_p.className = "py-0 speech-bubble pl-2 w-100 pb-1 text-break";
              div_sp_li_p.innerHTML = item["checkpoint_title"];
              div_sp_li_p.id = item["id"];
              div_sp_li_p.setAttribute('onclick', "goToCheckpointPage(this.id)");
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
            div_sp_li_p.id = col_id[i];
            div_sp_li_p.setAttribute('onclick', "goToCollectionPage(this.id)");
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
              div_sp_li_p.id = item["id"];
              div_sp_li_p.setAttribute('onclick', "goToCheckpointPage(this.id)");
              div_sp_li.appendChild(div_sp_li_p);
              div_sp.appendChild(div_sp_li);
            } else {
              // tag.className = "StepProgress-item";
              var div_sp_li = document.createElement("li");
              div_sp_li.className = "StepProgress-item";
              var div_sp_li_p = document.createElement("p");
              div_sp_li_p.className = "py-0 speech-bubble pl-2 w-100 pb-1 text-break";
              div_sp_li_p.innerHTML = item["checkpoint_title"];
              div_sp_li_p.id = item["id"];
              div_sp_li_p.setAttribute('onclick', "goToCheckpointPage(this.id)");
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
      if (i == checkpoints.length - 1) {
        prefecture_type = item["prefectures"];
      }
      console.log("p_type", prefecture_type);
      console.log("lc_else", item["prefectures"].localeCompare(prefecture_type));
      if (item["prefectures"].localeCompare(prefecture_type) != 0 || (i == checkpoints.length - 1)) {
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
      prefecture_type = item["prefectures"];
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
    aspectRatio: 1.1,
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
  var xLabel = [];
  console.log("wkd", weekDates);
  Object.keys(current_week_datas1).forEach((single_day_data, i) => {
  //console.log(current_week_datas[single_day_data]);
  var total = 0;
  current_week_datas1[single_day_data].forEach((item, i) => {
    //total += parseInt(item["steps"]);
    if (parseInt(item["steps"]) >= total) {
      total = parseInt(item["steps"]);
    }
  });
  weekDates.forEach((item, i) => {
    console.log("wkd_item_d",item.getDate());
    console.log("wkd_item_m",item.getMonth());
    console.log("wkd_item_y",item.getFullYear());
  if (formatDate(item) == single_day_data) {
  stepsData[i] = parseInt(total);
  console.log(i);
  }
  });

  });
  console.log("xl",xLabel);
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
  labels: ['月', '火', '水', '木', '金', '土', '日'],
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
     max: maxY + 6000
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
</body>
  @endsection
