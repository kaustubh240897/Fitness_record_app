@extends('layouts.app')

@section('content')

 <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.1.9/p5.min.js" integrity="sha512-WIklPM6qPCIp6d3fSSr90j+1unQHUOoWDS4sdTiR8gxUTnyZ8S2Mr8e10sKKJ/bhJgpAa/qG068RDkg6fIlNFA==" crossorigin="anonymous"></script>

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
.overlay-text2 {
  align-self: flex-start;
  transform: translateY(30%);
  z-index: 50
}

.wrapper {
  width: 330px;
  font-family: 'Helvetica';
  font-size: 14px;
  border: 1px solid #CCC;
}
.StepProgress {
  position: relative;
  padding-left: 10px;
  list-style: none;
}
.StepProgress::before {
  display: inline-block;
  content: '';
  position: absolute;
  top: 0;
  left: 20px;
  width: 20px;
  height: 100%;
  border-left: 4px solid #CCC;
}
.StepProgress-item {
  position: relative;
  counter-increment: list;
}
.StepProgress-item:not(:last-child) {
  padding-bottom: 60px;
}
.StepProgress-item::before {
  display: inline-block;
  content: '';
  position: absolute;
  left: 10px;
  height: 100%;
  width: 24px;
}
.StepProgress-item::after {
  content: '';
  display: inline-block;
  position: absolute;
  top: 0;
  left: 0px;
  width: 24px;
  height: 18px;
  border: 1px solid #CCC;
  border-radius: 50%;
  background-color: #FFF;
}
.StepProgress-item:first-child::after {
  content: '';
  display: inline-block;
  position: absolute;
  top: 0;
  left: -4px;
  width: 32px;
  height: 18px;
  border: 1px solid #CCC;
  border-radius: 50%;
  background-color: #FFF;
}
.StepProgress-item.is-done::before {
  border-left: 4px solid green;
}
.StepProgress-item.is-done::after {
  content: "✔";
  font-size: 10px;
  color: #FFF;
  text-align: center;
  border: 2px solid green;
  background-color: green;
}
.StepProgress-item.current::before {
  border-left: 4px solid #CCC;
}
.StepProgress-item.current::after {
  /* content: counter(list); */
  padding-top: 1px;
  width: 24px;
  height: 18px;
  top: -4px;
  left: 0px;
  font-size: 14px;
  text-align: center;
  color: green;
  border: 1px solid green;
  background-color: white;
}
.StepProgress strong {
  display: block;
}

a {
color: #000000 !important;
text-decoration: none !important;
}

</style>

 <div class="container-fluid">
      <div class="row no-gutters">
        <div class="col">
          <div id="chart_div"></div>
        </div>
         @if(! empty($get_t_tour))
        <div class="col">
          <p class="mb-0" style="font-size:50%">Today's Goal:-</p>
          <p class="mb-0" style="font-size:50%">Steps = {{ $get_m_user_daily_goal }}  </p>
          <p class="mb-0" style="font-size:50%">Distance = {{ $get_m_user_daily_goal*$get_m_user_stride/100000 }} (km) </p>
          <p class="mb-0" style="font-size:50%">Remaining:-</p>
          <p class="mb-0" style="font-size:50%">Steps = @if($get_m_user_daily_goal <=  $today_data) 0  @else {{ $get_m_user_daily_goal-$today_data }} @endif</p>
          <p class="mb-0" style="font-size:50%">Distance = @if($get_m_user_daily_goal <=  $today_data) 0  @else {{ ($get_m_user_daily_goal-$today_data)*$get_m_user_stride/100000 }} @endif km</p>
        </div>
        <div class="col">
          <p class="mb-0" style="font-size:70%">Today's Steps travelled:-</p>
          <p class="mb-0" style="font-size:70%">Steps = {{ $today_data }}</p>
          <p class="mb-0" style="font-size:70%">Today's distance travelled:-</p>
          <p class="mb-0" style="font-size:70%">Steps = {{ $today_data*$get_m_user_stride/100000 }}Km</p>
        </div>
         @else
        <h6> You have not started tour yet! </h6>
        @endif
        <div class="col">
          <a href="{{ url('/mycollection') }}" >  <button type="button" class="btn blue mb-1">MyCollection</button> </a>
          @if(! empty($m__users_id))
          <a href="{{ route('edit', $m__users_id) }}">  <button type="button" class="btn blue mb-1">MyProfile</button></a>
          @else
          <a href="{{ url('/') }}"> <button type="button" class="btn blue mb-1">MyProfile</button> </a>
          @endif
          <a href="{{ url('/userdailyhistory') }}" > <button type="button" class="btn blue mb-1">MyHistory</button> </a>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="d-flex flex-row-reverse justify-content-end">
        <div class="col">
          <div class="container-fluid overlay-text2">
            <div class="row">
              <div class="col text-center">
                <p class="mb-0" style="font-size:50%">Completed this month:-</p>
                <p class="mb-0" style="font-size:50%">{{ $current_month_steps }}Steps({{ round(($current_month_steps*$get_m_user_stride/100000),2) }}Km)</p>
                 @if($get_m_user_monthly_goal <= $current_month_steps)
                <p class="mb-0 pb-3 pl-3" style="font-size:50%; color: red">Completed!</p>
                @else
                <p class="mb-0 pb-3" style="font-size:70%; color: red">Inprogress!</p>
                @endif
                <p class="mb-0" style="font-size:50%">Remaining this month:-</p>
                @if($get_m_user_monthly_goal <= $current_month_steps)
                <p class="mb-0" style="font-size:50%">0 steps</p>
                @else
                 <p class="mb-0" style="font-size:70%"> {{ $get_m_user_monthly_goal-$current_month_steps }} steps <br/>({{ round(($get_m_user_monthly_goal-$current_month_steps)*$get_m_user_stride/100000,2) }} Km) </p>
                @endif
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
          <p style="font-size: 80%">Current Tour:-</p>
        </div>
        <div class="">
          <button type="button" class="btn btn-danger btn-sm"></button>
        </div>
        <div class="p-1">
          <p style="font-size: 80%">TourName (Total travelled {{ $steps*$get_m_user_stride/100000 }} Km/ Remaining @if(($steps*$get_m_user_stride/100000) >= $total) 0 Km @else {{ $total-($steps*$get_m_user_stride/100000) }}Km @endif)</p>
        </div>
      </div>
    </div>

@if ( empty($m__users_id))
 <h2> Please create your profile first <a href="/">click here </a> </h2> <br/>
@endif

<div class="container-fluid">
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
 <h4> Sorry there are no checkpoints, Please select the tour.</h4>
 @endif
</div>

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
      ['A', comp],
      ['B', rem]
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
        // values increment
        percent += 1;
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
  var checkPoint_col = document.getElementById("checkPoint_name");
  var checkPoint_col2 = document.getElementById("checkPoint_name2");


if({{ $session_value }} === false){
  var get_m_user_stride = {{ $get_m_user_stride }};
  var steps = {{ $steps }};
  var dist_walked = (get_m_user_stride * steps)/100000;
  var flag1 = 0;



  var checkpoints = {!! json_encode($checkpoints) !!};
  checkpoints.forEach((item, i) => {
    var tag = document.createElement("li");
    tag.className = "StepProgress-item";
    var name_p = document.createElement("p");
    name_p.style.fontSize = "70%";
    var name_p2 = document.createElement("p");
    name_p2.style.fontSize = "70%";
    Object.keys(item).forEach((key, i) => {
      if (key == "checkpoint_title") {
        // console.log(item[key]);
        var textnode = document.createTextNode(item[key]);
        name_p.appendChild(textnode);
      } else if (key == "distance") {
          if (item[key] < dist_walked) {
            tag.className = "StepProgress-item is-done";
          } else {
            flag1 += 1;
            if (flag1 == 1) {
              tag.className = "StepProgress-item current";
            } else {
              tag.className = "StepProgress-item";
            }
          }
       }

    });
    var flexRow = document.createElement("div");
    flexRow.className = "d-flex flex-row justify-content-start";
    flexRow.style.height = "60px";
    flexRow.style.width = "100px";
    var flexRowRev = document.createElement("div");
    flexRowRev.className = "d-flex flex-row-reverse justify-content-start";
    flexRowRev.style.height = "60px";
    flexRowRev.style.maxWidth = "100px"
    var btnDiv = document.createElement("div");
    // var pDiv = document.createElement("div");
    var btn = document.createElement("button");
    var btnDiv2 = document.createElement("div");
    // var pDiv = document.createElement("div");
    var btn2 = document.createElement("button");
    btn.className = "btn btn-danger btn-sm";
    btn2.className = "btn btn-danger btn-sm";
    btnDiv.appendChild(btn);
    btnDiv2.appendChild(btn2);


    flexRow.appendChild(btnDiv);
    flexRow.appendChild(name_p);
    checkPoint_col.appendChild(flexRow);
    steplist.appendChild(tag);

    var text2 = document.createTextNode(item["distance"] + " " + item["checkpoint_category"]);
    name_p2.appendChild(text2);
    flexRowRev.appendChild(btnDiv2);
    flexRowRev.appendChild(name_p2);
    checkPoint_col2.appendChild(flexRowRev);
    console.log(item["checkpoint_category"]);
  });

}
else{
   var get_m_user_stride = {{ $get_m_user_stride }};
  var steps = {{ $steps }};
  var dist_walked = (get_m_user_stride * steps)/100000;
  var flag1 = 0;



  var checkpoints = {!! json_encode($checkpointsr) !!};
  checkpoints.forEach((item, i) => {
    var tag = document.createElement("li");
    tag.className = "StepProgress-item";
    var name_p = document.createElement("p");
    name_p.style.fontSize = "70%";
    var name_p2 = document.createElement("p");
    name_p2.style.fontSize = "70%";
    Object.keys(item).forEach((key, i) => {
      if (key == "checkpoint_title") {
        // console.log(item[key]);
        var textnode = document.createTextNode(item[key]);
        name_p.appendChild(textnode);
      } else if (key == "distance") {
          if ({{ $total }}-item[key] <= dist_walked) {
            tag.className = "StepProgress-item is-done";
          } else {
            flag1 += 1;
            if (flag1 == 1) {
              tag.className = "StepProgress-item current";
            } else {
              tag.className = "StepProgress-item";
            }
          }
       }

    });
    var flexRow = document.createElement("div");
    flexRow.className = "d-flex flex-row justify-content-start";
    flexRow.style.height = "60px";
    flexRow.style.width = "100px";
    var flexRowRev = document.createElement("div");
    flexRowRev.className = "d-flex flex-row-reverse justify-content-start";
    flexRowRev.style.height = "60px";
    flexRowRev.style.maxWidth = "60px"
    var btnDiv = document.createElement("div");
    // var pDiv = document.createElement("div");
    var btn = document.createElement("button");
    var btnDiv2 = document.createElement("div");
    // var pDiv = document.createElement("div");
    var btn2 = document.createElement("button");
    btn.className = "btn btn-danger btn-sm";
    btn2.className = "btn btn-danger btn-sm";
    btnDiv.appendChild(btn);
    btnDiv2.appendChild(btn2);


    flexRow.appendChild(btnDiv);
    flexRow.appendChild(name_p);
    checkPoint_col.appendChild(flexRow);
    steplist.appendChild(tag);

    var text2 = document.createTextNode({{ $total }}-item["distance"] + " " + item["checkpoint_category"]);
    name_p2.appendChild(text2);
    flexRowRev.appendChild(btnDiv2);
    flexRowRev.appendChild(name_p2);
    checkPoint_col2.appendChild(flexRowRev);
    console.log(item["checkpoint_category"]);
  });

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

@endsection
