@extends('layouts.app')

@section('content')
<style media="screen">
    .btn.blue {
      background-color: #ccece8 !important;
      /* padding: 12px 32px !important; */
    }
    .dropdown-menu.blue {
      background-color: #ccece8 !important;
    }
    .scrolling-wrapper {
        background-color: #fff;
        overflow-x: scroll;
        scrollbar-width: none; /* Firefox */
        -ms-overflow-style: none;  /* Internet Explorer 10+ */
    }
.scrolling-wrapper::-webkit-scrollbar { /* WebKit */
    width: 0;
    height: 0;
}
.selected_month {
  border-top: none;
  border-left: none;
  border-right: none;
  border-bottom: 3px solid #2b63c6;
  font-weight: bold; color: #2b63c6;
}
.not_selected_month {
  border-top: none;
  border-left: none;
  border-right: none;
  border-bottom: none;
  opacity: 0.2;
  font-weight: bold; color: #2b63c6;
}
.selected_tab {
  border-top: none;
  border-left: none;
  border-right: none;
  border-bottom: 2px solid #fff;
}
.not_selected_tab {
  border-top: none;
  border-left: none;
  border-right: none;
  border-bottom: none;
}
.table-striped>tbody>tr:nth-child(even)>td,
.table-striped>tbody>tr:nth-child(even)>th {
   background-color: #f7fafb; // Choose your own color here
 }
 .table-striped>tbody>tr:nth-child(odd)>td,
 .table-striped>tbody>tr:nth-child(odd)>th {
    background-color: #f0f6f8; // Choose your own color here
  }
  .table-striped>tbody>tr:nth-child(even).comp>td,
  .table-striped>tbody>tr:nth-child(even).comp>th {
     background-color: #fafaee; // Choose your own color here
   }
   .table-striped>tbody>tr:nth-child(odd).comp>td,
   .table-striped>tbody>tr:nth-child(odd).comp>th {
      background-color: #f5f5de; // Choose your own color here
    }
    .invisible {
  display: none !important;
}
.goalTxt {
  position: fixed;
  bottom: 12%;
  right: 7%;
  left: 7%;
  z-index: 10;
}
@media only screen and (min-device-width: 360px) and (orientation: landscape) {
/* CSS */
.goalTxt {
  position: fixed;
  bottom: 21%;
  right: 7%;
  left: 7%;
  z-index: 10;
}
}

@media only screen and (min-device-width: 611px) and (min-device-height: 450px) and (orientation: landscape) {
/* CSS */
.goalTxt {
  position: fixed;
  bottom: 16%;
  right: 7%;
  left: 7%;
  z-index: 10;
}
}
.navfix {
  position: fixed;
  bottom: 0;
  z-index: 10;
}
 .dropdown-menu {
    /* min-width: 6rem; */
    z-index: 10 !important;
    margin-top: 10px !important;
    border-radius: 18px !important;
}


    .speech-bubble {
    	position: relative;
    	background: #fff;
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
    	border: 6px solid transparent;
      border-bottom:20px solid #fff;
    	margin-left: 0px;
      margin-right: 10px;
      margin-top: 0px;
    	margin-bottom: 10px;
    }
    .speech-bubble2 {
    	position: relative;
    	background: #dce0e3;
    	border-radius: .8em;
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
    	border-top: 0;
    	margin-left: -12px;
    	margin-top: -10px;
    }

.dropdown-toggle::after {
    display:none !important;
}
.padding-0{
    padding-right:0 !important;
    padding-left:0 !important;
}
.navItem {
    height: 66px;
}

.navItem.is-active {
    margin-top: -10px;
    /* margin-bottom: -10px; */
    height: 76px;
    background-color: #174493;
}
#swipeContainer {
  margin-bottom: 0px !important;
}
#swipeContainer2 {
  margin-bottom: 0px !important;
}
.imgSelColor{
  filter: invert(80%) sepia(97%) saturate(414%) hue-rotate(324deg) brightness(401%) contrast(98%) !important;
}
.body {
  background-color: #f0f6f8;
}
.comp_td {
  background-color: #ffd00d !important;
  color: #793800;
}
.incomp_td {
  background-color: #2b63c6 !important;
  color: #fff;
}
.selected_sort {
  color: #2b63c6;
  font-weight: bold;
}
.not_selected_sort {
  color: #000;
  font-weight: normal;
}
</style>
@if(! empty($dates))
<div class="container-fluid sticky-top" style="top:28px;" >
  			    <div class="row d-flex justify-content-between pb-0 mb-0" style="background-color: #2B63C6; height:30px;">
  				        <div class='col-4 shadow-lg mb-0 pb-0 mt-1 pt-1' > <p class="shadow-lg mb-0 pb-0" style="color:white; font-size: 80%">マイヒストリ</p> </div>
                    <!-- <p class="text-center" style="color:white; font-size: 80%">マイヒストリ</p> -->
                    <div class="col-2 mb-0 pb-0 mt-1 shadow-lg padding-0">
                      <a href="{{ route('userhistory', [now()->year,now()->month]) }}"><button id="tab_monthly" class="text-center selected_tab mb-0 pb-0" style="color: white; font-size: 80%;
                        background-color: #2b63c6;" onclick="changeTab(this.id);">月間</button></a>
                    </div>
                    <div class="col-2 mb-0 pb-0 mt-1 shadow-lg padding-0">

                        <a href="{{ route('usermonthlyhistory', [now()->year]) }}"><button id="tab_yearly" class="text-center not_selected_tab mb-0 pb-0" style="color: white; font-size: 80%;
                          background-color: #2b63c6;" onclick="changeTab(this.id);">年間</button></a>
                    </div>
  				        <div class='col-4 pb-0 mb-0 shadow-lg'>
                     <!-- <button class="text-center" style="color: white; font-size: 80%; border-radius: 12px;
                    border: solid 1px #ffffff;
                    background-color: #2b63c6;">並び替え ↑↓</button> -->
                    <div class="dropdown p-1">
          <button class="text-center dropdown-toggle" type="" style="color: white; font-size: 80%; border-radius: 12px;
         border: solid 1px #ffffff;
         background-color: #2b63c6;" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            並び替え ↑↓
          </button>
          <div class="dropdown-menu speech-bubble dropdown-menu-right" aria-labelledby="dropdownMenu2">
          <a id="sort_newest" onclick="sortHistory(this.id);" >  <label class="radio-inline pl-2">
      <input id="sort_newest_radio" class="pt-3" type="radio" name="optradio"><span id="sort_newest_span" class="not_selected_sort pl-2 pb-2" style="font-size: 100%">実績の新しい順</span>
    </label></a>
          <a id="sort_oldest" onclick="sortHistory(this.id);">   <label class="radio-inline pl-2 pb-2">
      <input id="sort_oldest_radio" class="pt-3" type="radio" name="optradio"><span id="sort_oldest_span" class="not_selected_sort pl-2 pb-1" style="font-size: 100%">実績の古い順</span>
    </label> </a>
          </div>
        </div>
                  </div>
           </div>
           <!-- filter:blur(1px); -->
        <div id="month_list" class="row d-flex pt-2 pb-0 mb-0" style="background-color:#fff; z-index: 0">
          <div class="col-2 w-100 padding-0 mb-0">
            <p id="yearnumber" class="w-100 pl-3" style="font-weight: bold; color: #2b63c6;background-color: #fff; height: 27px;">2020</p>
          </div>
          <div class="col-10 mb-0">
            <div id="monthsContainer" class="pl-3 mb-0 scrolling-wrapper row  flex-nowrap ">
              <div class="col">
                <button id="12" onclick="myFunc(this.id);" class="px-1 not_selected_month" style="background-color:#fff;">12</button>
              </div>
              <div class="col">
                <button id="11" onclick="myFunc(this.id);" class="px-1 not_selected_month" style="background-color:#fff;">11</button>
              </div>
              <div class="col">
                <button id="10" onclick="myFunc(this.id);" class="px-1 not_selected_month" style="background-color:#fff;">10</button>
              </div>
              <div class="col">
                <button id="9" onclick="myFunc(this.id);" class="px-1 not_selected_month" style="background-color:#fff;">9</button>
              </div>
              <div class="col">
                <button id="8" onclick="myFunc(this.id);" class="px-1 not_selected_month" style="background-color:#fff;">8</button>
              </div>
              <div class="col">
                <button id="7" onclick="myFunc(this.id);" class="px-1 not_selected_month" style="background-color:#fff;">7</button>
              </div>
              <div class="col">
                <button id="6" onclick="myFunc(this.id);" class="px-1 not_selected_month" style="background-color:#fff;">6</button>
              </div>
              <div class="col">
                <button id="5" onclick="myFunc(this.id);" class="px-1 not_selected_month" style="background-color:#fff;">5</button>
              </div>
              <div class="col">
                <button id="4" onclick="myFunc(this.id);" class="px-1 not_selected_month" style="background-color:#fff;">4</button>
              </div>
              <div class="col">
                <button id="3" onclick="myFunc(this.id);" class="px-1 not_selected_month" style="background-color:#fff;">3</button>
              </div>
              <div class="col">
                <button id="2" onclick="myFunc(this.id);" class="px-1 not_selected_month" style="background-color:#fff;">2</button>
              </div>
              <div class="col">
                <button id="1" onclick="myFunc(this.id);" class="px-1 not_selected_month" style="background-color:#fff;">1</button>
              </div>
            </div>
          </div>
        </div>
        <div id="year_list" class="row d-flex pt-1 invisible w-100" style="background-color:#fff; z-index: 0;">
          <div class="col-12 w-100">
            <div id="yearsContainer" class=" scrolling-wrapper row flex-row flex-nowrap">
              <div class="col">
                <button id="2020" onclick="myFunc2(this.id);" class="px-1 selected_month" style="background-color:#fff;">2020</button>
              </div>
              <div class="col">
                <button id="2019" onclick="myFunc2(this.id);" class="px-1 not_selected_month" style="background-color:#fff;">2019</button>
              </div>
              <div class="col">
                <button id="2018" onclick="myFunc2(this.id);" class="px-1 not_selected_month" style="background-color:#fff;">2018</button>
              </div>
            </div>
          </div>
        </div>
        <div id="tab_monthly_row" class="row d-flex my-0 py-0" >
          <table class="table table-striped text-center my-0 py-0" >
            <thead class="py-0 my-0" style="background-color: #ffffff;">
              <tr>
                <th scope="col" style="color: #2b63c6; font-weight: bold; font-size: 85%;">日にち</th>
                <th scope="col" style="color: #2b63c6; font-weight: bold; font-size: 85%;">歩数 (距離換算)</th>
                <th scope="col" style="color: #2b63c6; font-weight: bold; font-size: 85%;">達成率</th>
              </tr>
            </thead>
          </table>
        </div>
        <div id="tab_yearly_row" class="row d-flex my-0 invisible">
          <table class="table table-striped text-center my-0" >
            <thead style="background-color: #ffffff;">
              <tr>
                <th scope="col" style="color: #2b63c6; font-weight: bold; font-size: 85%;">月</th>
                <th scope="col" style="color: #2b63c6; font-weight: bold; font-size: 85%;">歩数 (距離換算)</th>
                <th scope="col" style="color: #2b63c6; font-weight: bold; font-size: 85%;">達成率</th>
              </tr>
            </thead>
          </table>
        </div>
    </div>
    <div id="tableContainer" class="container-fluid p-0 my-0" style="margin-top:28px !important">
      <table id="swipeContainer" class="table table-striped text-center my-0">
        <tbody id="monthly_table">

        </tbody>
      </table>
      <table id="swipeContainer2" class="table table-striped text-center my-0 invisible">
        <tbody>

        </tbody>
      </table>

    </div>
    <div class="goalTxt text-center" style="border-radius: 18px;
box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2);
background-color: #113a83; color: #fff">
      1日の目標 {{$get_m_user_daily_goal}}歩 ({{ $get_m_user_daily_goal*$get_m_user_stride/100000 }} km)
    </div>
  @else
    <div class='text-center'>
    <h4 class='mt-5'> 申し訳ありませんが、今まで歴史がありません！ </h4>
    </div>
  @endif
    <div style="padding-top:0;">
      <div class='d-flex flex-row' style='background-color: #eef4f6; position: relative; z-index: 5;'>
        <div class='col-12'>
        <img style='width: 100%; height: auto;' src='/storage/img/bg@3x.png'>
      </div>
    </div>
    <!-- style="transform: scaleY(1.2) !important;" -->
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
            <p id="box2_title" class="pt-0 mt-0" style="font-size: 60%; font-weight: normal;text-align: center;color: #ffffff;">コレクション</p>
          </a>
        </div>
        <div class="col-3 padding-0 pt-2 navItem is-active" style="border-right: 2px solid #113a83;" id="box3" onclick="navItemClick(this.id);">
          <a href="{{ route('userhistory', [now()->year,now()->month]) }}" >
            <img id="box3_img" class="pb-0 mb-0" src="{{asset('storage/mypage/box3_sel.png')}}" alt="">
            <p id="box3_title" class="pt-0 mt-0" style="font-size: 60%; font-weight: bold;text-align: center;color: #fddb66;">マイヒストリ</p>
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
<!-- <div class="container-fluid">
      <div class="row justify-content-around">
        <div class="col-xs-3">
         <a href="{{ url('/mypage') }}" > <button type="button" class="btn blue mr-1">マイページへ戻る</button> </a>
        </div>
        <div class="col-xs-3">
         <a href="{{ route('usermonthlyhistory', [now()->year]) }}" >  <button type="button" class="btn blue mr-1" onclick="changeText()" id="bt1">月別</button> </a>
        </div>
        <div class="dropdown">
          <button class="btn blue dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            成果の順序
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
          <a href="{{ url('/reverseuserdailyhistory',[now()->year,now()->month]) }}" >    <button class="btn blue dropdown-item mb-1" type="button">最新</button> </a>
          <a href="{{ route('userhistory', [now()->year,now()->month]) }}" >   <button class="btn blue dropdown-item" type="button">年代順</button> </a>
          </div>
        </div>
      </div>
    </div> -->



    <script type="text/javascript">
    function navItemClick(id) {
      console.log(id);
    }
      var nav_box2 = document.getElementById("box2");
      var unseen_collection = {{$unseen_collection}};
      console.log("$unseen_collection",unseen_collection);
      if (unseen_collection > 0) {
        nav_box2.style = "border-right: 2px solid #113a83; background: url({{asset('storage/mypage/notify.png')}});  background-position: 70% 20%; background-repeat: no-repeat";
      } else {
        nav_box2.style = "border-right: 2px solid #113a83";
      }
    </script>

    <script type="text/javascript">
    var is_rev = {{$reverse}};
    if (is_rev == 1) {
      document.getElementById("sort_newest_span").className = "selected_sort pl-2 pb-2";
      document.getElementById("sort_newest_radio").checked = true;
    } else {
      document.getElementById("sort_oldest_span").className = "selected_sort pl-2 pb-2";
      document.getElementById("sort_oldest_radio").checked = true;
    }
    function sortHistory(id) {
      var url = "";
      if (id == "sort_newest") {
        url = "{{ url('/reverseuserdailyhistory',['year','month']) }}";
        url = url.replace('year',{{$y}});
        url = url.replace('month',{{$m}});
        document.location = url;
      } else {
        url = "{{ route('userhistory', ['year','month']) }}";
        url = url.replace('year',{{$y}});
        url = url.replace('month',{{$m}});
        document.location = url;
      }
    }
    </script>
    <script type="text/javascript">
    console.log({{$y}});
    console.log({{$m}});
    var table_body = document.getElementById("monthly_table");
    var goal = {{$get_m_user_daily_goal}};
    console.log(goal);
    var weekGoals = {!! json_encode($steps_week) !!};
    var dates = {!! json_encode($dates) !!};
    console.log("sort_normal", Object.keys(dates).sort());
    if (Object.keys(dates).length > 0) {
      if (is_rev == 1) {
        var totalDays = daysInThisMonth();
        console.log(totalDays);
        Object.keys(dates).sort().reverse().forEach((date, i) => {
          console.log("ddd",date);
          var day_symbol = "(曜)";
          var td1 = document.createElement("td");
          td1.className = "incomp_td w-25";
          var td2 = document.createElement("td");
          td2.className = "w-50";
          td2.style.color = "#2b63c6";
          var td3 = document.createElement("td");
          td3.className = "w-25";
          td3.style.color = "#2b63c6";
          var tr = document.createElement("tr");
          var totalSteps = 0;
          var d = new Date();
          dates[date].forEach((item, i) => {
            totalSteps += item["steps"];
            var datee = item["step_actual_datetime"];
            d = new Date(datee);
          });
          console.log("date",d);
          console.log("day",d.getDate());
          console.log("day_name",d.getDay());
          console.log(totalSteps);
          switch (d.getDay()) {
            case 0:
              day_symbol = " (日)";
              console.log(day_symbol);
              goal = weekGoals[6];
              break;
            case 1:
              day_symbol = " (月)";
              console.log(day_symbol);
              goal = weekGoals[0];
              break;
            case 2:
              day_symbol = " (火)";
              console.log(day_symbol);
              goal = weekGoals[1];
              break;
            case 3:
              day_symbol = " (水)";
              console.log(day_symbol);
              goal = weekGoals[2];
              break;
            case 4:
              day_symbol = " (木)";
              console.log(day_symbol);
              goal = weekGoals[3];
              break;
            case 5:
              day_symbol = " (金)";
              console.log(day_symbol);
              goal = weekGoals[4];
              break;
            case 6:
              day_symbol = " (土)";
              console.log(day_symbol);
              goal = weekGoals[5];
              break;
            default:

          }
          if (totalSteps > goal) {
            tr.className = "comp";
            td1.className = "comp_td w-25";
            td1.innerHTML = d.getDate() + day_symbol;
            dist_km = totalSteps * {{$get_m_user_stride}} / 100000;
            td2.innerHTML = totalSteps + " (" + dist_km +  " km)";
            td3.innerHTML = parseInt((totalSteps/goal)*100) + '<span style="font-size:80%">%</span> <img style="height: 15px; width: 15px;" class="pb-1" src="{{URL::asset('storage/history/co.svg')}}" alt="">';
          } else {
            td1.innerHTML = d.getDate() + day_symbol;
            dist_km = totalSteps * {{$get_m_user_stride}} / 100000;
            td2.innerHTML = totalSteps + " (" + dist_km +  " km)";
            td3.innerHTML = parseInt((totalSteps/goal)*100) + '<span style="font-size:80%">%</span>';
          }
          tr.appendChild(td1);
          tr.appendChild(td2);
          tr.appendChild(td3);
          table_body.appendChild(tr);
        });
      } else {
        Object.keys(dates).sort().forEach((date, i) => {
          console.log("ddd",date);
          var day_symbol = "(曜)";
          var td1 = document.createElement("td");
          td1.className = "incomp_td w-25";
          var td2 = document.createElement("td");
          td2.className = "w-50";
          td2.style.color = "#2b63c6";
          var td3 = document.createElement("td");
          td3.className = "w-25";
          td3.style.color = "#2b63c6";
          var tr = document.createElement("tr");
          var totalSteps = 0;
          var d = new Date();
          dates[date].forEach((item, i) => {
            totalSteps += item["steps"];
            var datee = item["step_actual_datetime"];
            d = new Date(datee);
          });
          console.log("date",d);
          console.log("day",d.getDate());
          console.log("day_name",d.getDay());
          console.log(totalSteps);
          switch (d.getDay()) {
            case 0:
              day_symbol = " (日)";
              console.log(day_symbol);
              goal = weekGoals[6];
              break;
            case 1:
              day_symbol = " (月)";
              console.log(day_symbol);
              goal = weekGoals[0];
              break;
            case 2:
              day_symbol = " (火)";
              console.log(day_symbol);
              goal = weekGoals[1];
              break;
            case 3:
              day_symbol = " (水)";
              console.log(day_symbol);
              goal = weekGoals[2];
              break;
            case 4:
              day_symbol = " (木)";
              console.log(day_symbol);
              goal = weekGoals[3];
              break;
            case 5:
              day_symbol = " (金)";
              console.log(day_symbol);
              goal = weekGoals[4];
              break;
            case 6:
              day_symbol = " (土)";
              console.log(day_symbol);
              goal = weekGoals[5];
              break;
            default:

          }
          if (totalSteps > goal) {
            tr.className = "comp";
            td1.className = "comp_td w-25";
            td1.innerHTML = d.getDate() + day_symbol;
            dist_km = totalSteps * {{$get_m_user_stride}} / 100000;
            td2.innerHTML = totalSteps + " (" + dist_km +  " km)";
            td3.innerHTML = parseInt((totalSteps/goal)*100) + '<span style="font-size:80%">%</span> <img style="height: 15px; width: 15px;" class="pb-1" src="{{URL::asset('storage/history/co.svg')}}" alt="">';
          } else {
            td1.innerHTML = d.getDate() + day_symbol;
            dist_km = totalSteps * {{$get_m_user_stride}} / 100000;
            td2.innerHTML = totalSteps + " (" + dist_km +  " km)";
            td3.innerHTML = parseInt((totalSteps/goal)*100) + '<span style="font-size:80%">%</span>';
          }
          tr.appendChild(td1);
          tr.appendChild(td2);
          tr.appendChild(td3);
          table_body.appendChild(tr);
        });
      }
    } else {
      console.log("dates is null");
      var td1 = document.createElement("td");
      td1.className = "incomp_td w-25";
      var td2 = document.createElement("td");
      td2.className = "w-50";
      td2.style.color = "#2b63c6";
      td2.innerHTML = "No Data Exists for this date";
      var td3 = document.createElement("td");
      td3.className = "w-25";
      td3.style.color = "#2b63c6";
      var tr = document.createElement("tr");
      tr.appendChild(td1);
      tr.appendChild(td2);
      tr.appendChild(td3);
      table_body.appendChild(tr);
    }
    console.log(dates);
    console.log("normal", Object.keys(dates));
    console.log("reverse", Object.keys(dates).reverse());
    function daysInThisMonth() {
      var now = new Date();
      return new Date(now.getFullYear(), now.getMonth()+1, 0).getDate();
    }
    </script>
    <script type="text/javascript">
    function changeText() {
      var x = document.getElementById("bt1");
      if (x.innerHTML === "月別") {
        x.innerHTML = "毎日";
      } else {
        x.innerHTML = "月別";
      }
    }
  </script>
  <script type="text/javascript">
  var currentNav = "box3";
  var clickedNav = "";
  var cur_imgid = "box3_img";
  var cur_imgName = "box3_sel.png";
  var clicked_imgid = "";
  var clicked_imgName = "";
  var cur_title = "box3_title";
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


var selected = {{$m}};
//var tab_year = 2020;
var selectedyear = {{$y}};
var tab_yearly_selectedyear = 2020;
var monthsContainer = document.getElementById('monthsContainer');
var yearsContainer = document.getElementById('yearsContainer');
var yearnumber = document.getElementById('yearnumber');
yearnumber.innerHTML = selectedyear;
var sel_mon = document.getElementById(selected);
sel_mon.className = "px-1 selected_month";
sel_mon.scrollIntoView();
var url = "{{ route('userhistory', ['year','month']) }}";
function myFunc(id)
      {

        console.log("inmyfun1", selected);
        console.log("funId",id);
          //alert(id);
          if (id>12) {
            id = 1;
            selectedyear+=1;
            yearnumber.innerHTML = selectedyear;
            console.log(selectedyear);
          }
          if (id<1) {
            id = 12;
            selectedyear-=1;
            yearnumber.innerHTML = selectedyear;
            console.log(selectedyear);
          }
          if (id!=selected) {
            var sel = document.getElementById(selected);
            var clicked = document.getElementById(id);
            // sel.className = "px-1 not_selected_month";
            // clicked.className = "px-1 selected_month";
            selected = parseInt(id);
            clicked.scrollIntoView();
            //row_top.scrollIntoView();
            $('html, body').animate({ scrollTop: 0 }, 'fast');
            console.log("inmyfun2", selected);
            url = url.replace('year',selectedyear);
            url = url.replace('month',selected);
            console.log("url",url);
            // $.ajax({
            //     method: 'get',
            //     url: url,
            // }).done(function(response, status){
            //     //
            //     console.log("done");
            // }).fail(function(jqXHR, textStatus, errorThrown){
            //     //
            //     console.log("fail");
            // });
            location.reload();location.href=url;
          }
          $('html, body').animate({ scrollTop: 0 }, 'fast');
      }
      function myFunc2(id)
            {

              console.log("inmyfun2", selected);
              console.log("funId2",id);
                //alert(id);
                if (id>2020) {
                  id = 2018;
                  //selectedyear+=1;
                  //console.log(selectedyear);
                }
                if (id<2018) {
                  id = 2020;
                  //selectedyear-=1;
                  //console.log(selectedyear);
                }
                if (id!=tab_yearly_selectedyear) {
                  var sel = document.getElementById(tab_yearly_selectedyear);
                  var clicked = document.getElementById(id);
                  sel.className = "px-1 not_selected_month";
                  clicked.className = "px-1 selected_month";
                  tab_yearly_selectedyear = parseInt(id);
                  clicked.scrollIntoView();
                  console.log("inmyfun2", tab_yearly_selectedyear);
                }
            }
      let touchstartX = 0;
      let touchendX = 0;
      let touchstartY = 0;
      let touchendY = 0;

const slider = document.getElementById('swipeContainer');

function handleGesure() {
if (touchendX - touchstartX < -50 && (touchendY - touchstartY < 25 && touchendY - touchstartY > -25)) {
//alert('swiped left!');
console.log("inswipeleft", selected);
myFunc(selected-1);
}
if (touchendX - touchstartX > 50 && (touchendY - touchstartY < 25 && touchendY - touchstartY > -25)) {
//alert('swiped right!');
console.log("inswiperight", selected);
myFunc(selected+1);
}
}

slider.addEventListener('touchstart', e => {
touchstartX = e.changedTouches[0].screenX;
touchstartY = e.changedTouches[0].screenY;
});

slider.addEventListener('touchend', e => {
touchendX = e.changedTouches[0].screenX;
touchendY = e.changedTouches[0].screenY;
handleGesure()
});

let touchstartX2 = 0;
let touchendX2 = 0;
let touchstartY2 = 0;
let touchendY2 = 0;

const slider2 = document.getElementById('swipeContainer2');

function handleGesure2() {
if (touchendX2 - touchstartX2 < -50 && (touchendY2 - touchstartY2 < 25 && touchendY2 - touchstartY2 > -25)) {
//alert('swiped left!');
console.log("inswipeleft", tab_yearly_selectedyear);
myFunc2(tab_yearly_selectedyear-1);
}
if (touchendX2 - touchstartX2 > 50 && (touchendY2 - touchstartY2 < 25 && touchendY2 - touchstartY2 > -25)) {
//alert('swiped right!');
console.log("inswiperight", tab_yearly_selectedyear);
myFunc2(tab_yearly_selectedyear+1);
}
}


slider2.addEventListener('touchstart', e => {
touchstartX2 = e.changedTouches[0].screenX;
touchstartY2 = e.changedTouches[0].screenY;
});

slider2.addEventListener('touchend', e => {
touchendX2 = e.changedTouches[0].screenX;
touchendY2 = e.changedTouches[0].screenY;
handleGesure2();
});

</script>
<script type="text/javascript">
    var tab_monthly = document.getElementById('tab_monthly');
    var tab_yearly = document.getElementById('tab_yearly');
    var tab_yearly_row = document.getElementById('tab_yearly_row');
    var tab_monthly_row = document.getElementById('tab_monthly_row');
    var month_list = document.getElementById('month_list');
    var year_list = document.getElementById('year_list');
    var table1 = document.getElementById('swipeContainer');
    var table2 = document.getElementById('swipeContainer2');
    var tableContainer = document.getElementById('tableContainer');
      function changeTab(id) {
        if (id == 'tab_yearly') {
          tab_yearly.className = "text-center selected_tab";
          tab_monthly.className = "text-center not_selected_tab";
          tab_yearly_row.className = "row d-flex my-0";
          tab_monthly_row.className = "row d-flex my-0 invisible";
          month_list.className= "row d-flex pt-1 invisible";
          year_list.className = "row d-flex pt-1";
          table2.className = "table table-striped text-center my-0";
          table1.className = "table table-striped text-center my-0 invisible";
        } else if (id == 'tab_monthly') {
          tab_yearly.className = "text-center not_selected_tab";
          tab_monthly.className = "text-center selected_tab";
          tab_yearly_row.className = "row d-flex my-0 invisible";
          tab_monthly_row.className = "row d-flex my-0";
          year_list.className = "row d-flex pt-1 invisible";
          month_list.className = "row d-flex pt-1";
          table2.className = "table table-striped text-center my-0 invisible";
          table1.className = "table table-striped text-center my-0";
        }
      }
    </script>
@endsection
