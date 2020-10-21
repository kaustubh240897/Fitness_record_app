@extends('layouts.app')

@section('content')

 <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.1.9/p5.min.js" integrity="sha512-WIklPM6qPCIp6d3fSSr90j+1unQHUOoWDS4sdTiR8gxUTnyZ8S2Mr8e10sKKJ/bhJgpAa/qG068RDkg6fIlNFA==" crossorigin="anonymous"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
.speech-bubble {
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
}

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

</style>

@if ( empty($m__users_id))
 <h2> Please create your profile first <a href="/" style="color: blue !important">click here </a> </h2> <br/>
@else
<div class="container pt-3" style="color:#FFFFFF; border-radius: 15px;">
      <div class="row justify-content-center">
        <div class="col col-sm-9 pt-1 text-center">
          <p class="font-weight-bold pr-3 py-2" style="background: white; color:#3476ea; border: 2px solid white; border-radius: 15px;">2020# 10# 15# *#*# </p>
        </div>
        <div class="col-xs-1 overlay-btn1">
          <i class="fa fa-refresh fa-3x blackiconcolor overlay-btn1 shadow" aria-hidden="true"></i>
          <p class="nopadding overlay-text3 text-center" style="font-size: 60%;color:#3476ea">#-#</p>
          <p class="nopadding overlay-text3 text-center" style="font-size: 60%;color:#3476ea">##</p>
        </div>
        <!-- <p class="pt-2" style="color:#3476ea;">text</p> -->
      </div>
    </div>
    <div class="container pt-3">
      <div class="row justify-content-around">
        <div class="col-5 col-sm-4 text-center" style="background: white; border: 2px solid white; border-radius: 15px;">
            <a href="#" style="color:#ff9327 !important; font-size: 80%">レシピ</a>
            <img style="background: white; border: 1px solid white; border-radius: 15px;" src="recipe.jpg" alt="" class="card-img pb-2">
        </div>
        <div class="col-5 col-sm-4 text-center" style="background: white; border: 2px solid white; border-radius: 15px;">
            <a href="#" style="color: blue !important; font-size: 80%">日めくりカレンダ</a>
            <img style="background: white; border: 1px solid white; border-radius: 15px;" src="recipe.jpg" alt="" class="card-img pb-2">
        </div>
      </div>
    </div>
    <div class="container text-center pt-3">
      <p class="font-weight-bold" style="color:#3476ea;">TEXT##</p>
    </div>
    <div class="container w-75 pb-3">
      <div class="speech-bubble text-center">
        <p class="mb-0 font-weight-bold" style="font-size:90%; color:#3476ea;">月間累計 {{ $current_month_steps }}歩 {{ $current_month_steps*$get_m_user_stride/100000 }} Km!</p>
      </div>
    </div>
    <div class="container pt-3">
      <div class="relative w-100 h-50">
    <canvas id="myChart"></canvas>
    <div class="absolute-center text-center">
      <p class="mb-0 p-0" style="font-size:70%; color:#3476ea;"> {{ ($today_data)*$get_m_user_stride/100000 }} km</p>
      <p class="font-weight-bold mb-0 p-0 text-wrap" style="color:#3476ea;">{{ $today_data }}歩</p>
      <p class="mb-0 mt-0 p-0" style="font-size:70%;">________________</p>
      <p class="font-weight-bold mb-0 mt-0">{{ $get_m_user_daily_goal }}歩</p>
      <p class="mb-0" style="font-size:70%;">{{ $get_m_user_daily_goal*$get_m_user_stride/100000 }} (km)</p>
    </div>
  </div>
    </div>
    <div class="container pt-3 mt-3">
      <canvas id="ctx"></canvas>
    </div>
    @if(empty($get_t_tour))
    <h6> You have not started tour yet! </h6>
    @endif
    <div class="container text-center pt-3">
      <p class="font-weight-bold" style="color:#3476ea;">TEXT##</p>
    </div>
    <!-- <div class="container overlay-text2">
      <div class="row">
        <div class="col">
          <br>
          <br>
          <br>
          <div class="d-flex flex-row-reverse justify-content-center pl-3">
            <div class="speech-bubble text-center">
              <p class="mb-0 font-weight-bold" style="font-size:70%; color:#3476ea;">### 2,567# (1.69km) #### !</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="d-flex flex-row justify-content-center pr-3">
            <div class="speech-bubble text-center">
              <p class="mb-0 font-weight-bold" style="font-size:70%; color:#3476ea;">### 2,967# (1.69km) #### !</p>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-sm-3">

        </div>
        <div class="col col-sm-5 text-center">
          <div class="d-flex flex-row-reverse pl-3 pb-3 mb-3">
            <div class="text-center">
              <p class="mb-0 font-weight-bold p-1 pr-sm-3" style="background: #dce0e3; font-size:70%; color:#3476ea; border: 2px solid #dce0e3; border-radius: 15px;">Remain @if($get_m_user_monthly_goal <= $current_month_steps) 0 @else {{ $get_m_user_monthly_goal-$current_month_steps }}歩 {{ round(($get_m_user_monthly_goal-$current_month_steps)*$get_m_user_stride/100000,2) }} @endif Km!</p>
              <div class="d-flex flex-row-reverse">
                <div class="col text-right border-left border-primary">
                  <p style="font-size:95%"><br><br><br><br></p>
                </div>
                <div class="col">

                </div>
              </div>
            </div>
          </div>
          <div class="d-flex flex-row pr-3 overlay-text4">
            <div class="text-center">
              <p class="mb-0 font-weight-bold p-1 pl-sm-2 pl-md-3 ml-sm-4" style="background: #dce0e3; font-size:70%; color:#3476ea; border: 2px solid #dce0e3; border-radius: 15px;">月間累計 {{ $current_month_steps }}歩 {{ $current_month_steps*$get_m_user_stride/100000 }} Km!</p>
              <div class="row justify-content-center">
                <div class="col border-right border-primary">
                  <p style="font-size:100%"><br><br></p>
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

          <div class="container overlay-tri">
            <div class="d-flex flex-row justify-content-center">
                <div id="triangle_graph" class=""></div>
            </div>
            <div class="container pt-3">
              <p class="text-center" style="background: blue; color:#FFFFFF; border: 2px solid blue; border-radius: 15px;">###### 215,000# (20.0km) ##</p>

            </div>
            </div>
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
              fill('#dce0e3');
              triangle(0, 150, 300, 150, 300, 0);
              fill('#3476ea');
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
              var x = 300*k;
              var y = 150 - 150*k;
              triangle(0, 150, x, y, x, 150);
            }
          </script>

  <script type="text/javascript">
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
var stepsData = [1,1,1,1,1,1,1];

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
</script>
@endif
@endsection
