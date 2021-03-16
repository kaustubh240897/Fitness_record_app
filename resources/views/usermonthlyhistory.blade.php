@extends('layouts.app')

@section('content')


<link rel="stylesheet" href="/css/style_usermonthlyhistory.css">


@if(! empty($months))
  <div class="container-fluid sticky-top" style="margin-top: 0px">
    			    <div class="row d-flex justify-content-between pb-0 mb-0" style="background-color: #2B63C6; height:30px">
    				        <div class='col-4 shadow-lg mb-0 pb-0 mt-1 pt-1' > <p class="shadow-lg mb-0 pb-0" style="color:white; font-size: 80%">マイヒストリ</p> </div>
                      <!-- <p class="text-center" style="color:white; font-size: 80%">マイヒストリ</p> -->
                      <div class="col-2 mb-0 pb-0 mt-1 shadow-lg padding-0">
                        <a href="{{ route('userhistory', [now()->year,now()->month]) }}"><button id="tab_monthly" class="text-center not_selected_tab mb-0 pb-0" style="color: white; font-size: 80%;
                          background-color: #2b63c6;" onclick="changeTab(this.id);">月間</button></a>
                      </div>
                      <div class="col-2 mb-0 pb-0 mt-1 shadow-lg padding-0">

                          <a href="{{ route('usermonthlyhistory', [now()->year]) }}"><button id="tab_yearly" class="text-center selected_tab mb-0 pb-0" style="color: white; font-size: 80%;
                            background-color: #2b63c6;" onclick="changeTab(this.id);">年間</button></a>
                      </div>
    				        <div class='col-4 pb-0 mb-0 shadow-lg'>
                       <!-- <button class="text-center" style="color: white; font-size: 80%; border-radius: 12px;
                      border: solid 1px #ffffff;
                      background-color: #2b63c6;">並び替え ↑↓</button> -->
                      <div class="dropdown p-1">
            <button class="text-center dropdown-toggle" type="" style="height: 22px; color: white; font-size: 80%; border-radius: 12px;
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
          <div id="month_list" class="row d-flex pt-2 pb-0 mb-0  invisible" style="background-color:#fff; z-index: 0">
            <div class="col-2 w-100 padding-0 mb-0">
              <p id="yearnumber" class="w-100 pl-3" style="font-weight: bold; color: #2b63c6;background-color: #fff; height: 27px;">2020</p>
            </div>
            <div class="col-10 mb-0">
              <div id="monthsContainer" class="pl-3 mb-0 scrolling-wrapper row  flex-nowrap ">
                <div class="col">
                  <button id="12" onclick="myFunc(this.id);" class="px-1 selected_month" style="background-color:#fff;">12</button>
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
          <div id="year_list" class="row d-flex pt-1" style="background-color:#fff; z-index: 0">
            <div class="col-12 w-100">
              <div id="yearsContainer" class=" scrolling-wrapper row flex-row flex-nowrap">
                <!-- <div class="col">
                  <button id="2020" onclick="myFunc2(this.id);" class="px-1 not_selected_month" style="background-color:#fff;">2020</button>
                </div>
                <div class="col">
                  <button id="2021" onclick="myFunc2(this.id);" class="px-1 not_selected_month" style="background-color:#fff;">2021</button>
                </div>
                <div class="col">
                  <button id="2022" onclick="myFunc2(this.id);" class="px-1 not_selected_month" style="background-color:#fff;">2022</button>
                </div> -->
              </div>
            </div>
          </div>
          <div id="tab_monthly_row" class="row d-flex my-0 py-0 invisible">
            <table class="table table-striped text-center my-0 py-0">
              <thead class="py-0 my-0" style="background-color: #ffffff;">
                <tr>
                  <th scope="col" style="color: #2b63c6; font-weight: bold; font-size: 85%;">日にち</th>
                  <th scope="col" style="color: #2b63c6; font-weight: bold; font-size: 85%;">歩数 (距離換算)</th>
                  <th scope="col" style="color: #2b63c6; font-weight: bold; font-size: 85%;">達成率</th>
                </tr>
              </thead>
            </table>
          </div>
          <div id="tab_yearly_row" class="row d-flex my-0">
            <table class="table table-striped text-center my-0">
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
      <div id="tableContainer" class="container-fluid p-0 my-0" style="margin-top: 28px">
        <table id="swipeContainer" class="table table-striped text-center my-0  invisible">
          <tbody id="monthly_table">

          </tbody>
        </table>
        <table id="swipeContainer2" class="table table-striped text-center my-0">
          <tbody id="yearly_table">

          </tbody>
        </table>

      </div>
      <div class="goalTxt text-center" style="border-radius: 18px;
  box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2);
  background-color: #113a83; color: #fff">
        1日の目標 {{ number_format($get_m_user_monthly_goal) }}歩 ({{ number_format($get_m_user_monthly_goal*$get_m_user_stride/100000,2,'.',',') }} km)
      </div>
@else
  <div class='text-center'>
    <h4 class='mt-5'> 申し訳ありませんが、今まで歴史がありません！ </h4>
  </div>
@endif
    <div style='padding-top:0;'>
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
         <a href="{{ url('/mypage') }}" > <button type="button" class="btn blue mr-1 mb-1">マイページへ戻る</button> </a>
        </div>
        <div class="col-xs-3">
         <a href="{{ route('userhistory', [now()->year,now()->month]) }}" >  <button type="button" class="btn blue mr-1 mb-1" onclick="changeText()" id="bt1">日別</button> </a>
        </div>
        <div class="dropdown">
          <button class="btn blue dropdown-toggle mb-1" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            成果の順序
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
          <a href="{{ url('/reverseusermonthlyhistory', [now()->year]) }}" >    <button class="btn blue dropdown-item mb-1" type="button">最新</button> </a>
          <a href="{{ route('usermonthlyhistory', [now()->year]) }}" >   <button class="btn blue dropdown-item" type="button">年代順</button> </a>
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
        url = "{{ url('/reverseusermonthlyhistory', ['year']) }}";
        url = url.replace('year',{{$y}});
        document.location = url;
      } else {
        url = "{{ route('usermonthlyhistory', ['year']) }}";
        url = url.replace('year',{{$y}});
        document.location = url;
      }
    }
    </script>
    <script type="text/javascript">
    console.log("new_md", {!! json_encode($datewise_monthdata) !!});
    var is_rev = {{$reverse}};
    console.log(is_rev);
    var table_body = document.getElementById("yearly_table");
    var goal = {{$get_m_user_monthly_goal}};
    console.log(goal);
    var dist_km = 0;
    //var dates = {!! json_encode($months) !!};
    var dates = {!! json_encode($datewise_monthdata) !!};
    var nfObject = new Intl.NumberFormat('en-US');
    console.log("key_len",dates.length);
    if (Object.keys(dates).length > 0) {
      if (is_rev == 0) {
        dates.reverse().forEach((item1, i) => {
          console.log("it1",item1);
          var td1 = document.createElement("td");
          td1.className = "incomp_td text-left";
          var td2 = document.createElement("td");
          td2.className = "text-center";
          td2.style.color = "#2b63c6";
          var td3 = document.createElement("td");
          td3.className = "text-center";
          td3.style.color = "#2b63c6";
          var tr = document.createElement("tr");
          var totalSteps = 0;
          var d = new Date();
          Object.keys(item1).forEach((item2, i) => {
            console.log("it2", item2);
            //console.log("it3",item1[item2]);
            var maxSteps = 0;
            item1[item2].forEach((item3, i) => {
              console.log("it4",item3["steps"]);
              var datee = item3["step_actual_datetime"];
              var t = datee.split(/[- :]/);
              var dt = new Date(t[0], t[1]-1, t[2], t[3], t[4], t[5]);
              d = new Date(dt);
              if (item3["steps"] >= maxSteps) {
                maxSteps = item3["steps"];
              }
            });
            totalSteps += maxSteps;
            if (totalSteps > goal) {
              tr.className = "comp";
              td1.className = "comp_td text-left";
              td1.innerHTML =(d.getMonth() + 1).toString();
              dist_km = totalSteps * {{$get_m_user_stride}} / 100000;
              td2.innerHTML = nfObject.format(totalSteps) + " (" + dist_km.toFixed(2) +  " km)";
              td3.innerHTML = parseInt((totalSteps/goal)*100) + '<span style="font-size:80%">%</span> <img style="height: 15px; width: 15px;" class="pb-1" src="{{URL::asset('storage/history/co.svg')}}" alt="">';
            } else {
              td1.innerHTML = (d.getMonth() + 1).toString();
              dist_km = totalSteps * {{$get_m_user_stride}} / 100000;
              td2.innerHTML = nfObject.format(totalSteps) + " (" + dist_km.toFixed(2) +  " km)";
              td3.innerHTML = parseInt((totalSteps/goal)*100) + '<span style="font-size:80%">%</span>';
            }
            tr.appendChild(td1);
            tr.appendChild(td2);
            tr.appendChild(td3);
            table_body.appendChild(tr);
          });
        });
        // var totalDays = daysInThisMonth();
        // console.log(totalDays);
        // Object.keys(dates).reverse().forEach((date, i) => {
        //   console.log("ddd",date);
        //   var day_symbol = "(曜)";
        //   var td1 = document.createElement("td");
        //   td1.className = "incomp_td text-left";
        //   var td2 = document.createElement("td");
        //   td2.className = "text-center";
        //   td2.style.color = "#2b63c6";
        //   var td3 = document.createElement("td");
        //   td3.className = "text-center";
        //   td3.style.color = "#2b63c6";
        //   var tr = document.createElement("tr");
        //   var totalSteps = 0;
        //   var d = new Date();
        //   // dates[date].forEach((item, i) => {
        //   //   totalSteps += item["steps"];
        //   //   var datee = item["step_actual_datetime"];
        //   //   var t = datee.split(/[- :]/);
        //   //   var dt = new Date(t[0], t[1]-1, t[2], t[3], t[4], t[5]);
        //   //   d = new Date(dt);
        //   // });
        //   console.log("date",d);
        //   console.log("day",d.getDate());
        //   console.log("day_name",d.getDay());
        //   console.log(totalSteps);
        //   // switch (d.getDay()) {
        //   //   case 0:
        //   //     day_symbol = " (月)";
        //   //     console.log(day_symbol);
        //   //     break;
        //   //   case 1:
        //   //     day_symbol = " (火)";
        //   //     console.log(day_symbol);
        //   //     break;
        //   //   case 2:
        //   //     day_symbol = " (水)";
        //   //     console.log(day_symbol);
        //   //     break;
        //   //   case 3:
        //   //     day_symbol = " (木)";
        //   //     console.log(day_symbol);
        //   //     break;
        //   //   case 4:
        //   //     day_symbol = " (金)";
        //   //     console.log(day_symbol);
        //   //     break;
        //   //   case 5:
        //   //     day_symbol = " (土)";
        //   //     console.log(day_symbol);
        //   //     break;
        //   //   case 6:
        //   //     day_symbol = " (日)";
        //   //     console.log(day_symbol);
        //   //     break;
        //   //   default:
        //   //
        //   // }
        //   if (totalSteps > goal) {
        //     tr.className = "comp";
        //     td1.className = "comp_td text-left";
        //     td1.innerHTML = (d.getMonth() + 1).toString();
        //     dist_km = totalSteps * {{$get_m_user_stride}} / 100000;
        //     td2.innerHTML = totalSteps + " (" + dist_km.toFixed(2) +  " km)";
        //     td3.innerHTML = parseInt((totalSteps/goal)*100) + '<span style="font-size:80%">%</span> <img style="height: 15px; width: 15px;" class="pb-1" src="{{URL::asset('storage/history/co.svg')}}" alt="">';
        //   } else {
        //     td1.innerHTML = (d.getMonth() + 1).toString();
        //     dist_km = totalSteps * {{$get_m_user_stride}} / 100000;
        //     td2.innerHTML = totalSteps + " (" + dist_km.toFixed(2) +  " km)";
        //     td3.innerHTML = parseInt((totalSteps/goal)*100) + '<span style="font-size:80%">%</span>';
        //   }
        //   tr.appendChild(td1);
        //   tr.appendChild(td2);
        //   tr.appendChild(td3);
        //   table_body.appendChild(tr);
        // });
      } else {
        dates.forEach((item1, i) => {
          console.log("it1",item1);
          var td1 = document.createElement("td");
          td1.className = "incomp_td text-left";
          var td2 = document.createElement("td");
          td2.className = "text-center";
          td2.style.color = "#2b63c6";
          var td3 = document.createElement("td");
          td3.className = "text-center";
          td3.style.color = "#2b63c6";
          var tr = document.createElement("tr");
          var totalSteps = 0;
          var d = new Date();
          Object.keys(item1).forEach((item2, i) => {
            console.log("it2", item2);
            //console.log("it3",item1[item2]);
            var maxSteps = 0;
            item1[item2].forEach((item3, i) => {
              console.log("it4",item3["steps"]);
              var datee = item3["step_actual_datetime"];
              var t = datee.split(/[- :]/);
              var dt = new Date(t[0], t[1]-1, t[2], t[3], t[4], t[5]);
              d = new Date(dt);
              if (item3["steps"] >= maxSteps) {
                maxSteps = item3["steps"];
              }
            });
            totalSteps += maxSteps;
            if (totalSteps > goal) {
              tr.className = "comp";
              td1.className = "comp_td text-left";
              td1.innerHTML =(d.getMonth() + 1).toString();
              dist_km = totalSteps * {{$get_m_user_stride}} / 100000;
              td2.innerHTML = nfObject.format(totalSteps) + " (" + dist_km.toFixed(2) +  " km)";
              td3.innerHTML = parseInt((totalSteps/goal)*100) + '<span style="font-size:80%">%</span> <img style="height: 15px; width: 15px;" class="pb-1" src="{{URL::asset('storage/history/co.svg')}}" alt="">';
            } else {
              td1.innerHTML = (d.getMonth() + 1).toString();
              dist_km = totalSteps * {{$get_m_user_stride}} / 100000;
              td2.innerHTML = nfObject.format(totalSteps) + " (" + dist_km.toFixed(2) +  " km)";
              td3.innerHTML = parseInt((totalSteps/goal)*100) + '<span style="font-size:80%">%</span>';
            }
            tr.appendChild(td1);
            tr.appendChild(td2);
            tr.appendChild(td3);
            table_body.appendChild(tr);
          });

        });

        // Object.keys(dates).forEach((date, i) => {
        //   console.log("ddd",date);
        //   var day_symbol = "(曜)";
        //   var td1 = document.createElement("td");
        //   td1.className = "incomp_td text-left";
        //   var td2 = document.createElement("td");
        //   td2.className = "text-center";
        //   td2.style.color = "#2b63c6";
        //   var td3 = document.createElement("td");
        //   td3.className = "text-center";
        //   td3.style.color = "#2b63c6";
        //   var tr = document.createElement("tr");
        //   var totalSteps = 0;
        //   var d = new Date();
        //   // dates[date].forEach((item, i) => {
        //   //   totalSteps += item["steps"];
        //   //   var datee = item["step_actual_datetime"];
        //   //   var t = datee.split(/[- :]/);
        //   //   var dt = new Date(t[0], t[1]-1, t[2], t[3], t[4], t[5]);
        //   //   d = new Date(dt);
        //   // });
        //   console.log("date",d);
        //   console.log("day",d.getDate());
        //   console.log("day_name",d.getDay());
        //   console.log("mon", d.getMonth());
        //   console.log(totalSteps);
        //   // switch (d.getDay()) {
        //   //   case 0:
        //   //     day_symbol = " (月)";
        //   //     console.log(day_symbol);
        //   //     break;
        //   //   case 1:
        //   //     day_symbol = " (火)";
        //   //     console.log(day_symbol);
        //   //     break;
        //   //   case 2:
        //   //     day_symbol = " (水)";
        //   //     console.log(day_symbol);
        //   //     break;
        //   //   case 3:
        //   //     day_symbol = " (木)";
        //   //     console.log(day_symbol);
        //   //     break;
        //   //   case 4:
        //   //     day_symbol = " (金)";
        //   //     console.log(day_symbol);
        //   //     break;
        //   //   case 5:
        //   //     day_symbol = " (土)";
        //   //     console.log(day_symbol);
        //   //     break;
        //   //   case 6:
        //   //     day_symbol = " (日)";
        //   //     console.log(day_symbol);
        //   //     break;
        //   //   default:
        //   //
        //   // }
        //   if (totalSteps > goal) {
        //     tr.className = "comp";
        //     td1.className = "comp_td text-left";
        //     td1.innerHTML =(d.getMonth() + 1).toString();
        //     dist_km = totalSteps * {{$get_m_user_stride}} / 100000;
        //     td2.innerHTML = totalSteps + " (" + dist_km.toFixed(2) +  " km)";
        //     td3.innerHTML = parseInt((totalSteps/goal)*100) + '<span style="font-size:80%">%</span> <img style="height: 15px; width: 15px;" class="pb-1" src="{{URL::asset('storage/history/co.svg')}}" alt="">';
        //   } else {
        //     td1.innerHTML = (d.getMonth() + 1).toString();
        //     dist_km = totalSteps * {{$get_m_user_stride}} / 100000;
        //     td2.innerHTML = totalSteps + " (" + dist_km.toFixed(2) +  " km)";
        //     td3.innerHTML = parseInt((totalSteps/goal)*100) + '<span style="font-size:80%">%</span>';
        //   }
        //   tr.appendChild(td1);
        //   tr.appendChild(td2);
        //   tr.appendChild(td3);
        //   table_body.appendChild(tr);
        // });
      }
    } else {
      console.log("dates is null");
      var td1 = document.createElement("td");
      td1.className = "incomp_td w-25";
      var td2 = document.createElement("td");
      td2.className = "w-50";
      td2.style.color = "#2b63c6";
      td2.innerHTML = " <br>";
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
    function daysInThisMonth() {
      var now = new Date();
      return new Date(now.getFullYear(), now.getMonth()+1, 0).getDate();
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

  var firstRow = document.getElementById('row_top');
  var selected = 12;
  //var tab_year = 2020;
  var selectedyear = 2020;
  var tab_yearly_selectedyear = {{$y}};
  var monthsContainer = document.getElementById('monthsContainer');
  var yearsContainer = document.getElementById('yearsContainer');
  var yearnumber = document.getElementById('yearnumber');
  // if ({{$y}} > 2020) {
  //   var dif = {{$y}} - 2020;
  //   for (var i = 1; i <= dif; i++) {
  //     var col = document.createElement("col");
  //     var btn = document.createElement("button");
  //     btn.id = 2020+i;
  //     btn.className = "px-1 not_selected_month";
  //     btn.backgroundColor = "#fff";
  //     btn.onclick = "myFunc2(this.id);";
  //     btn.innerHTML = 2020+i;
  //     col.appendChild(btn);
  //     yearsContainer.appendChild(col);
  //   }
  // }
  var yyy = {!! json_encode($years) !!};
  var mmm = {!! json_encode($months) !!};
  var array_years = Object.keys(yyy).map(Number);
  var array_months = Object.keys(mmm).map(Number);
  var month_index = array_months.indexOf(selected);
  var year_index = array_years.indexOf(tab_yearly_selectedyear);
  console.log("month_index", month_index);
  console.log("year_index", year_index);
  if (array_years.length == 0) {
    var div_col = document.createElement("div");
    div_col.className = "col";
    var div_btn = document.createElement("button");
    // <button id="12" onclick="myFunc(this.id);" class="px-1 not_selected_month" style="background-color:#fff;">12</button>
    div_btn.id = {{$y}};
    div_btn.setAttribute('onclick', "getId(this.id)");
    div_btn.className = "px-1 not_selected_month";
    div_btn.style = "background-color:#fff;";
    div_btn.innerHTML = {{$y}};
    div_col.appendChild(div_btn);
    yearsContainer.appendChild(div_col);
  }
  for (var i = 0; i < array_years.length ; i++) {
    var div_col = document.createElement("div");
    div_col.className = "col";
    var div_btn = document.createElement("button");
    // <button id="12" onclick="myFunc(this.id);" class="px-1 not_selected_month" style="background-color:#fff;">12</button>
    div_btn.id = array_years[i];
    div_btn.setAttribute('onclick', "getId(this.id)");
    div_btn.className = "px-1 not_selected_month";
    div_btn.style = "background-color:#fff;";
    div_btn.innerHTML = array_years[i];
    div_col.appendChild(div_btn);
    yearsContainer.appendChild(div_col);
  }
  function getId(value) {
      var id = array_years.indexOf(parseInt(value));
      year_index = id;
      myFunc2(id);
  }
  document.getElementById(tab_yearly_selectedyear).className = "px-1 selected_month";
  document.getElementById(tab_yearly_selectedyear).scrollIntoView();
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
              sel.className = "px-1 not_selected_month";
              clicked.className = "px-1 selected_month";
              selected = parseInt(id);
              clicked.scrollIntoView();
              //row_top.scrollIntoView();
              $('html, body').animate({ scrollTop: 0 }, 'fast');
              console.log("inmyfun2", selected);
            }
            $('html, body').animate({ scrollTop: 0 }, 'fast');
        }
        var url = "{{ route('usermonthlyhistory', ['year']) }}";
        function myFunc2(id)
              {

                console.log("inmyfun2", selected);
                console.log("funId2",id);
                  //alert(id);
                  if (id >= array_years.length) {
                    year_index = array_years.indexOf(tab_yearly_selectedyear);
                    return;
                    //selectedyear+=1;
                    //console.log(selectedyear);
                  } else if (id < 0) {
                    year_index = array_years.indexOf(tab_yearly_selectedyear);
                    return;
                    //selectedyear-=1;
                    //console.log(selectedyear);
                  }
                    //var sel = document.getElementById(tab_yearly_selectedyear);
                    //var clicked = document.getElementById(id);
                    // sel.className = "px-1 not_selected_month";
                    // clicked.className = "px-1 selected_month";
                    //tab_yearly_selectedyear = parseInt(id);
                    //clicked.scrollIntoView();
                    //console.log("inmyfun2", tab_yearly_selectedyear);
                    url = url.replace('year',array_years[year_index]);
                    document.location = url;
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
  year_index+=1;
  myFunc2(year_index);
  }
  if (touchendX2 - touchstartX2 > 50 && (touchendY2 - touchstartY2 < 25 && touchendY2 - touchstartY2 > -25)) {
  //alert('swiped right!');
  console.log("inswiperight", tab_yearly_selectedyear);
  year_index-=1;
  myFunc2(year_index);
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
    function changeText() {
      var x = document.getElementById("bt1");
      if (x.innerHTML === "Monthly Data") {
        x.innerHTML = "Daily Data";
      } else {
        x.innerHTML = "Monthly Data";
      }
    }
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
