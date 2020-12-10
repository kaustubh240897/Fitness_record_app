@extends('layouts.app')

@section('content')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.1.9/p5.min.js" integrity="sha512-WIklPM6qPCIp6d3fSSr90j+1unQHUOoWDS4sdTiR8gxUTnyZ8S2Mr8e10sKKJ/bhJgpAa/qG068RDkg6fIlNFA==" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/domarrow.css') }}" />
    <script type="text/javascript" src="{{ URL::asset('js/domarrow.js') }}"></script>
<style media="screen">
.wrapper {
  height:50vh;
  font-size: 10px;
  border: 1px solid #CCC;
}
.btn.blue {
background-color: #ccece8 !important;
/* padding: 12px 32px !important; */
}

.btn.pink {
background-color: #f2dcdb !important;
/* padding: 12px 32px !important; */
}
.chartcenter{
  position: absolute;
  top: -100px;
  left: -200px;

  text-align: center;

  color: red;

}
/* .overlay-text2 {
  align-self: flex-start;
  transform: translateY(30%);
  z-index: 50
} */

.wrapper {
  width: 330px;
  font-family: 'Helvetica';
  font-size: 14px;
  border: 1px solid #CCC;
}

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
  left: -31px;
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
  left: -31px;
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
  left: -40.5px;
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
  left: -40.5px;
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
  left: -40px;
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
  left: -40px;
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


a {
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
/* .speech-bubble {
position: relative;
background: #dce0e3;
border-radius: .4em;
}

.speech-bubble:after {
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
} */

.overlay-text2 {
align-self: flex-start;
transform: translateY(50%);
z-index: 50
}
.overlay-text3 {
align-self: flex-start;
transform: translateY(-300%);
z-index: 50
}
.overlay-text4 {
align-self: flex-start;
transform: translateY(-42%);
z-index: 50
}
.overlay-tri {
align-self: flex-start;
transform: translateY(-90%);
z-index: 50
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
/* PB */
.dd {
  position: absolute;
}
.dist_t {
  text-align: right !important;
}
</style>

 <div class="container-fluid">
      <div class="row no-gutters">
        <div class="col">
          <div id="chart_div"></div>
        </div>
         @if(! empty($get_t_tour))
        <div class="col">
          <p class="mb-0" style="font-size:70%">1日の目標歩数</p>
          <p class="mb-0" style="font-size:70%">{{ $get_m_user_daily_goal }}歩</p>
          <p class="mb-0" style="font-size:70%">{{ $get_m_user_daily_goal*$get_m_user_stride/100000 }} (km)</p>
          <p class="mb-0" style="font-size:70%">目標まで</p>
          <p class="mb-0" style="font-size:70%">@if($get_m_user_daily_goal <=  $today_data) 0  @else {{ $get_m_user_daily_goal-$today_data }} @endif 残りのステップ。</p>
          <p class="mb-0" style="font-size:70%">@if($get_m_user_daily_goal <=  $today_data) 0  @else {{ ($get_m_user_daily_goal-$today_data)*$get_m_user_stride/100000 }} @endif km 左.</p>
        </div>
        <div class="col">
          <p class="mb-0" style="font-size:70%">コレクションに99件のアイ</p>
          <p class="mb-0" style="font-size:70%"></p>
          <p class="mb-0" style="font-size:70%">アイテムが追加されました。</p>
        </div>
         @else
        <h6> まだツアーを始めていません！ </h6>
        @endif
        <div class="col">
          <a href="{{ url('/mycollection') }}" >  <button type="button" class="btn blue mb-1" style="font-size: 50%">マイコレクション</button> </a>
          <!-- @if(! empty($m__users_id))
          <a href="{{ route('edit', $m__users_id) }}">  <button type="button" class="btn blue mb-1">MyProfile</button></a>
          @else
          <a href="{{ url('/') }}"> <button type="button" class="btn blue mb-1">MyProfile</button> </a>
          @endif -->
          <a href="{{ url('/userdailyhistory') }}" > <button type="button" class="btn blue mb-1" style="font-size: 50%">マイヒストリ</button> </a>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="d-flex flex-row-reverse justify-content-end">
        <div class="col">
          <div class="container-fluid overlay-text2">
            <div class="row">
              <div class="col border-right pl-3 text-center">
                <p class="mb-0 pl-3 pt-3" style="font-size:50%">月間累計</p> <!--Completed this month -->
                <p class="mb-0 pl-3 pt-3" style="font-size:50%">{{ $current_month_steps }}歩({{ $current_month_steps*$get_m_user_stride/100000 }}Km)</p>
              </div>
              <div class="col-6">
                <p class="mb-0" style="font-size:50%">今月の残り：-</p>
                @if($get_m_user_monthly_goal <= $current_month_steps)
                <p class="mb-0" style="font-size:50%">0 ステップ</p>
                @else
                 <p class="mb-0" style="font-size:50%"> {{ $get_m_user_monthly_goal-$current_month_steps }} ステップ <br/>({{ round(($get_m_user_monthly_goal-$current_month_steps)*$get_m_user_stride/100000,2) }} Km) </p>
                @endif
                @if($current_month_steps !=0)
                  @if($get_m_user_monthly_goal <= $current_month_steps)
                  <p class="mb-0 pb-3 pl-3" style="font-size:50%; color: red">完了しました！</p>
                  @else
                  <p class="mb-0 pb-3" style="font-size:50%; color: red">進行中！</p>
                  @endif
                @endif
                <p class="mb-0 pt-3" style="font-size:50%">月間目標</p>
                <p class="mb-0 pt-3" style="font-size:50%">{{ $get_m_user_monthly_goal}}歩</p>
              </div>
            </div>
          </div>
          <div class="d-flex flex-row justify-content-center">
              <div id="triangle_graph" class=""></div>
          </div>
          <script id="tri" type="text/javascript">
          var cnv;
            function setup() {
              cnv = createCanvas(150, 75);
              // var x = windowWidth / 2;
              // var y = windowHeight / 4;
              // cnv.position(x, y);
              cnv.parent('triangle_graph');
            }

            function draw() {
              fill('#ccece8');
              triangle(0, 75, 150, 75, 150, 0);
              fill('#7acdc4');
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
                var rem = 2000;
              }
              var k = (comp/(comp+rem));
              var x = 150*k;
              var y = 75 - 75*k;
              triangle(0, 75, x, y, x, 75);
            }
          </script>
        </div>
        <div class="col">
          <div id="barchart_div">
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="d-flex flex-row justify-content-start">
        <div class="p-1">
          <p style="font-size: 80%">現在の選択ツアー</p>
        </div>
        <div class="">
          <button type="button" class="btn btn-danger btn-sm"></button>
        </div>
        <div class="p-1">
          <p style="font-size: 80%">@if(! empty($get_t_tour)) {{ $get_t_tour->m_tours->tour_title }} @else ツアーは選択されていません。 @endif (総移動量 {{ $steps*$get_m_user_stride/100000 }} Km/ 残り @if(($steps*$get_m_user_stride/100000) >= $total) 0 Km @else {{ $total-($steps*$get_m_user_stride/100000) }}Km @endif)</p>
        </div>
      </div>
    </div>

@if ( empty($m__users_id))
 <h2> 最初にプロファイルを作成してください <a href="/" style="color:blue !important"> ここをクリック </a> </h2> <br/>
@endif

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
@if(! empty($checkpoints))
<div class="container-fluid pb-3" id="progress_bar">

</div>
@else
<h4> 申し訳ありませんが、チェックポイントはありません。ツアーを選択してください。</h4>
@endif
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
<script src="https://www.gstatic.com/charts/loader.js"></script>
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
</script>


<script type="text/javascript">

  var steplist = document.getElementById("progress_bar");
  var tr_count_id = 1;
  // var checkPoint_col = document.getElementById("checkPoint_name");
  // var checkPoint_col2 = document.getElementById("checkPoint_name2");


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
    div_dist_p.className = "text-right";
    div_dist_p.innerHTML = item["distance"].toString() + "km";
    div_dist.appendChild(div_dist_p);
    if (i == 0) {
      if (item["distance"] < dist_walked) {
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
      if (item["distance"] <= dist_walked) {
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
      if (item["distance"] <= dist_walked) {
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
    div_textRight_p.className = "py-0 my-0 pl-3 text-center dd";
    if (item["checkpoint_category"]) {
      div_textRight_p.innerHTML = item["checkpoint_category"];
      div_textRight_p.id = "ar"+tr_count_id.toString();
      console.log(div_textRight_p.id);
      if (tr_count_id > 1) {
        var id_to = "#" +"ar"+ tr_count_id.toString();
        var id_from = "#" +"ar"+ (tr_count_id-1).toString();
        console.log(id_to);
        console.log(id_from);
        var div_con = document.createElement("connection");
        // div_con.from = id_from;
        // div_con.to = id_to;
        // div_con.color = "#cadcf6";
        // div_con.fromX="0.7";
        // div_con.fromY="12";
        // div_con.toX="0.7";
        // div_con.toY="10";
        var con_html = '<connection from="'+id_from+'" to="'+id_to+'" color="#cadcf6" fromX="0.7" fromY="1" toX="0.7" toY="0" tail></connection>';
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





  // var checkpoints = {!! json_encode($checkpoints) !!};
  // checkpoints.forEach((item, i) => {
  //   var tag = document.createElement("li");
  //   tag.className = "StepProgress-item";
  //   var name_p = document.createElement("p");
  //   name_p.style.fontSize = "70%";
  //   var name_p2 = document.createElement("p");
  //   name_p2.style.fontSize = "70%";
  //   Object.keys(item).forEach((key, i) => {
  //     if (key == "checkpoint_title") {
  //       // console.log(item[key]);
  //       var textnode = document.createTextNode(item[key]);
  //       name_p.appendChild(textnode);
  //     } else if (key == "distance") {
  //         if (item[key] < dist_walked) {
  //           tag.className = "StepProgress-item is-done";
  //         } else {
  //           flag1 += 1;
  //           if (flag1 == 1) {
  //             tag.className = "StepProgress-item current";
  //           } else {
  //             tag.className = "StepProgress-item";
  //           }
  //         }
  //      }
  //
  //   });
  //   var flexRow = document.createElement("div");
  //   flexRow.className = "d-flex flex-row justify-content-start";
  //   flexRow.style.height = "60px";
  //   flexRow.style.width = "100px";
  //   var flexRowRev = document.createElement("div");
  //   flexRowRev.className = "d-flex flex-row-reverse justify-content-start";
  //   flexRowRev.style.height = "60px";
  //   flexRowRev.style.maxWidth = "100px"
  //   var btnDiv = document.createElement("div");
  //   // var pDiv = document.createElement("div");
  //   var btn = document.createElement("button");
  //   var btnDiv2 = document.createElement("div");
  //   // var pDiv = document.createElement("div");
  //   var btn2 = document.createElement("button");
  //   btn.className = "btn btn-danger btn-sm";
  //   btn2.className = "btn btn-danger btn-sm";
  //   btnDiv.appendChild(btn);
  //   btnDiv2.appendChild(btn2);
  //
  //
  //   flexRow.appendChild(btnDiv);
  //   flexRow.appendChild(name_p);
  //   checkPoint_col.appendChild(flexRow);
  //   steplist.appendChild(tag);
  //
  //   var text2 = document.createTextNode(item["distance"] + " " + item["checkpoint_category"]);
  //   name_p2.appendChild(text2);
  //   flexRowRev.appendChild(btnDiv2);
  //   flexRowRev.appendChild(name_p2);
  //   checkPoint_col2.appendChild(flexRowRev);
  //   console.log(item["checkpoint_category"]);
  // });

}
else{
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
    div_dist_p.className = "text-right";
    div_dist_p.innerHTML = item["distance"].toString() + "km";
    div_dist.appendChild(div_dist_p);
    if (i == 0) {
      if ({{ $total }}-item["distance"] <= dist_walked) {
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
      if ({{ $total }}-item["distance"] <= dist_walked) {
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
      if ({{ $total }}-item["distance"] <= dist_walked) {
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
    div_textRight_p.className = "py-0 my-0 pl-3 text-center dd";
    if (item["checkpoint_category"]) {
      div_textRight_p.innerHTML = item["checkpoint_category"];
      div_textRight_p.id = "ar"+tr_count_id.toString();
      console.log(div_textRight_p.id);
      if (tr_count_id > 1) {
        var id_to = "#" +"ar"+ tr_count_id.toString();
        var id_from = "#" +"ar"+ (tr_count_id-1).toString();
        console.log(id_to);
        console.log(id_from);
        var div_con = document.createElement("connection");
        // div_con.from = id_from;
        // div_con.to = id_to;
        // div_con.color = "#cadcf6";
        // div_con.fromX="0.7";
        // div_con.fromY="12";
        // div_con.toX="0.7";
        // div_con.toY="10";
        var con_html = '<connection from="'+id_from+'" to="'+id_to+'" color="#cadcf6" fromX="0.7" fromY="1" toX="0.7" toY="0" tail></connection>';
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




  // var checkpoints = {!! json_encode($checkpointsr) !!};
  // checkpoints.forEach((item, i) => {
  //   var tag = document.createElement("li");
  //   tag.className = "StepProgress-item";
  //   var name_p = document.createElement("p");
  //   name_p.style.fontSize = "70%";
  //   var name_p2 = document.createElement("p");
  //   name_p2.style.fontSize = "70%";
  //   Object.keys(item).forEach((key, i) => {
  //     if (key == "checkpoint_title") {
  //       // console.log(item[key]);
  //       var textnode = document.createTextNode(item[key]);
  //       name_p.appendChild(textnode);
  //     } else if (key == "distance") {
  //         if ({{ $total }}-item[key] <= dist_walked) {
  //           tag.className = "StepProgress-item is-done";
  //         } else {
  //           flag1 += 1;
  //           if (flag1 == 1) {
  //             tag.className = "StepProgress-item current";
  //           } else {
  //             tag.className = "StepProgress-item";
  //           }
  //         }
  //      }
  //
  //   });
  //   var flexRow = document.createElement("div");
  //   flexRow.className = "d-flex flex-row justify-content-start";
  //   flexRow.style.height = "60px";
  //   flexRow.style.width = "100px";
  //   var flexRowRev = document.createElement("div");
  //   flexRowRev.className = "d-flex flex-row-reverse justify-content-start";
  //   flexRowRev.style.height = "60px";
  //   flexRowRev.style.maxWidth = "60px"
  //   var btnDiv = document.createElement("div");
  //   // var pDiv = document.createElement("div");
  //   var btn = document.createElement("button");
  //   var btnDiv2 = document.createElement("div");
  //   // var pDiv = document.createElement("div");
  //   var btn2 = document.createElement("button");
  //   btn.className = "btn btn-danger btn-sm";
  //   btn2.className = "btn btn-danger btn-sm";
  //   btnDiv.appendChild(btn);
  //   btnDiv2.appendChild(btn2);
  //
  //
  //   flexRow.appendChild(btnDiv);
  //   flexRow.appendChild(name_p);
  //   checkPoint_col.appendChild(flexRow);
  //   steplist.appendChild(tag);
  //
  //   var text2 = document.createTextNode({{ $total }}-item["distance"] + " " + item["checkpoint_category"]);
  //   name_p2.appendChild(text2);
  //   flexRowRev.appendChild(btnDiv2);
  //   flexRowRev.appendChild(name_p2);
  //   checkPoint_col2.appendChild(flexRowRev);
  //   console.log(item["checkpoint_category"]);
  // });

}


</script>
<script type="text/javascript">
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
  </script>
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

@endsection
