@extends('layouts.app')

@section('content')


 <style media="screen">
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
    top: 140px;
    left:100px;

    text-align: center;

    color: red;

}
.overlay-text {
  align-self: flex-start;
  transform: translateX(-150%);
}
.overlay-text2 {
  align-self: flex-start;
  transform: translateY(70%);
}
    </style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.1.9/p5.min.js" integrity="sha512-WIklPM6qPCIp6d3fSSr90j+1unQHUOoWDS4sdTiR8gxUTnyZ8S2Mr8e10sKKJ/bhJgpAa/qG068RDkg6fIlNFA==" crossorigin="anonymous"></script>

<div class="container-fluid">
      <div class="row justify-content-around">
        <div class="col-xs-3">
         <a href="{{ url('/mypage') }}" >   <button type="button" class="btn blue mr-1 mb-1"
           id="btnMyPage" value="" onclick="mypage.performClick(this.value);">My page</button> </a>
        </div>
        <div class="col-xs-3">
         <a href="{{ url('/mycollection') }}" >   <button type="button" class="btn blue mr-1 mb-1"
           id="btnMyCollection" value="" onclick="mycollection.performClick(this.value);">My collection</button> </a>
        </div>
        <div class="col-xs-3">
         <a href="{{ url('/userdailyhistory') }}" >   <button type="button" class="btn blue mr-1 mb-1"
           id="btnMyHistory" value="" onclick="myhistory.performClick(this.value);">My history</button> </a>
        </div>
        <div class="col-xs-3">
          @if(! empty($m__users_id))
          <a href="{{ route('edit', $m__users_id) }}">  <button type="button" class="btn blue mr-1 mb-1"
           id="btnMyProfile" value="" onclick="myprofile.performClick(this.value);">My Profile</button> </a>
          @else
          <a href="{{ url('/') }}" >   <button type="button" class="btn blue mr-1 mb-1"
           id="btnMyProfile" value="" onclick="myprofile.performClick(this.value);">My Profile</button> </a>
          @endif
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-xs-6 mt-0">
          <div id="chart_div"></div>
        </div>
        @if(! empty($today_data))
        <div class="col-xs-6 mt-3 pt-3">
        @if($get_m_user_daily_goal <=  $today_data)
          <p class="mb-0 overlay-text pt-3" style="font-size:70%; color: red">Completed!</p>
        @else
           <p class="mb-0 overlay-text pt-3" style="font-size:70%; color: red">Inprogress!</p>
        @endif
          <p class="mb-0" style="font-size:70%">Today's Goal:-</p>
          <p class="mb-0" style="font-size:70%">Steps =  {{ $get_m_user_daily_goal }}</p>
          <p class="mb-0" style="font-size:70%">Distance =  {{ $get_m_user_daily_goal*$get_m_user_stride/100000 }} (km)</p>
          <p class="mb-0" style="font-size:70%">Remaining:-</p>
          <p class="mb-0" style="font-size:70%">Steps = @if($get_m_user_daily_goal <=  $today_data) 0  @else {{ $get_m_user_daily_goal-$today_data }} @endif</p>
          <p class="mb-0" style="font-size:70%">Distance = @if($get_m_user_daily_goal <=  $today_data) 0  @else {{ ($get_m_user_daily_goal-$today_data)*$get_m_user_stride/100000 }} @endif km</p>
        </div>
         @else
        <h6> You have not started tour yet! </h6>
        @endif
      </div>
    </div>
    <div class="container-fluid">
      <div class="float-xs-right"><div id="barchart_div"></div></div>
    </div>
    <div class="container-fluid overlay-text2">
      <div class="d-flex flex-row justify-content-center">
        <div class="pl-3">
          <p class="mb-0" style="font-size:70%">Completed this month:-</p>
          <p class="mb-0" style="font-size:70%">{{ $current_month_steps }}Steps({{ $current_month_steps*$get_m_user_stride/100000 }}Km)</p>
          @if($get_m_user_monthly_goal <= $current_month_steps)
          <p class="mb-0 pb-3" style="font-size:70%; color: red">Completed!</p>
          @else
          <p class="mb-0 pb-3" style="font-size:70%; color: red">Inprogress!</p>
          @endif
          <p class="mb-0 pt-3" style="font-size:70%">Remaining this month:-</p>
          @if($get_m_user_monthly_goal <= $current_month_steps)
          <p class="mb-0" style="font-size:70%">0 steps</p>
          @else
          <p class="mb-0" style="font-size:70%">{{ $get_m_user_monthly_goal-$current_month_steps }}({{ ($get_m_user_monthly_goal-$current_month_steps)*$get_m_user_stride/100000 }} Km</p>
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
          cnv = createCanvas(300, 150);
          cnv.parent('triangle_graph');
        }

        function draw() {
          fill('#ccece8');
          triangle(30, 150, 280, 150, 280, 0);
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
          var x = 30 + 250*k;
          var y = 150 - 150*k;
          triangle(30, 150, x, y, x, 150);
        }
        </script>

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
        width: 256,
        height:256,
        colors: ['#7acdc4', '#ccece8'],
        pieSliceText:'none',
        pieHole: 0.70,
        legend: 'none',
        tooltip: {
          text: 'percentage'
        },
        tooltip: {
          textStyle: {
            fontSize: 12
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
              centerText('#chart_div', 0, 100, 140);
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
  rem = 100;
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
  var current_week_datas = {!! json_encode($current_week_datas) !!};

  Object.keys(current_week_datas).forEach((single_day_data, i) => {
    //console.log(current_week_datas[single_day_data]);
    var total = 0;
    current_week_datas[single_day_data].forEach((item, i) => {
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
