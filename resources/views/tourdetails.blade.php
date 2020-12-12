@extends('layouts.app')

@section('content')
@if (session('successMsg'))
<div class='alert alert-success' roles='alert'>
 {{ session('successMsg') }}
</div>
@endif
<div class='container'>


 <style media="screen">
     .btn.btn-lg {
        background-color: #ccece8 !important;
       /* padding: 12px 32px !important; */
     }
     .btn.blue {
       background-color: #ccece8 !important;
      /* padding: 12px 32px !important; */
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
    left: -30px;
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
    left: -30px;
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
    left: -39px;
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
    left: -39px;
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
    text-align: right !important;
    }
    .right_t {
    line-height: 0.8;
    }

</style>


<div class="container-fluid mt-1">
   <a href="{{ url('/createtour') }}" > <button type="button" class="btn blue">ツアー選択へ戻る</button></a>

 <form action="{{ route('tourstore', $tours->id) }}" method="POST" >
      {{ csrf_field() }}
      {{ method_field('post') }}
      <button type="submit" class="btn btn-sm blue" style="font-size:70%"> Select this tour</button>
      </form>
    </div>

    <div class="container-fluid mt-3 pl-sm-4">
      <div class="row pl-2">
        <div class="col-4 col-sm-2 p-1 pl-2">
         @if(! empty($current_tour) && $current_tour->status == 'Done')
         <p> ツアーが完了しました別のツアーを選択してください。 </p>
         @elseif(! empty($current_tour) && $current_tour->status == 'Inprogress')
          <p style="font-size: 80%">{{ $current_tour->m_tours->tour_title }}</p>
          @else
          <p> ツアーを選択していません。</p>
          @endif
        </div>
        <div class="col col-sm-5 p-1">
          <p class="border border-dark text-break" style="font-size: 80%">{{ $tours->tour_title }} ({{ $total }}Km)</p>
        </div>
      </div>
    </div>
    <div class="container-fluid mt-3 pl-sm-4">
      <div class="row pl-2">
        <div class="col-4 col-sm-2 p-1 pl-2">
          <p style="font-size: 80%">ツアー概要</p>
        </div>
        <div class="col col-sm-5 p-1">
          <p class="border border-dark text-break" style="font-size: 80%">{{ $tours->tour_comment }}</p>
        </div>
      </div>
    </div>


   <div class="container">
      <div class="row pl-2">
        <div class="col-4 col-sm-2 p-1 pl-2">
        </div>
        <div class="col col-sm-5 p-1">
          <div class="d-flex flex-row justify-content-between pl-3">
            <div class="form-check form-check-inline pr-3">
              @if($value=='false')
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="1" checked>
              @else
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="1" >
              @endif

              <label class="form-check-label" for="inlineRadio1">通常の踏破</label>
            </div>
            <div class="form-check form-check-inline pl-3">
             @if($value == 'true')
             <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2" checked>
             @else
             <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
             @endif
              <label class="form-check-label" for="inlineRadio2">逆方向に踏破</label>
            </div>
          </div>
        </div>
      </div>





<!--
<div class="container-fluid">
@if(! empty($checkpoints))
<div class="row">
    <div class="col" id="checkPoint_name">

    </div>
    <div class="col pt-2">
      <ul class="StepProgress" id="progress_bar">

      </ul>
    </div>
    <div class="col" id="checkPoint_name2">

    </div>
  </div>

@else
<h4> 申し訳ありませんが、チェックポイントはありません。</h4>
@endif


</div> -->
@if(! empty($checkpoints))
<div class="container-fluid pt-3" id="progress_bar">

</div>
@else
<h4> 申し訳ありませんが、チェックポイントはありません。ツアーを選択してください。</h4>
@endif
@if(! empty($current_tour))
  @if($current_tour->status == 'Done')
    <h5> おめでとうございます！ツアーが完了しました。</h5>
  @else
    <h3>あなたがカバーした {{ $user_stride/100000 * $steps }} (Km) </h3>
  @endif
  @else
    <h4> ツアーを選択していません。ツアーを選択してください </h4>
@endif



<script type="text/javascript">

var steplist = document.getElementById("progress_bar");
var tr_count_id = 1;


if({{ $value }} === false){
  // var get_m_user_stride = {{ $user_stride }};
  // var steps = {{ $steps }};
  // var dist_walked = (get_m_user_stride * steps)/100000;
  // var flag1 = 0;
  //
  //
  //
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
  //   flexRowRev.style.maxWidth = "100px";
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
  var get_m_user_stride = {{ $user_stride }};
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

    if (item["checkpoint_category"]) {
      if (i == checkpoints.length - 1) {
          div_textRight_p.className = "py-0 my-0 pl-3 text-xs-left text-sm-center dd pb-0 mb-0 ";
          div_textRight_p.innerHTML = '<img  class = "pt-1 pb-0 mb-0" src="{{URL::asset('storage/mypage/flag.png')}}" alt="flag"/>' + item["checkpoint_category"].substring(0, 3);;
      } else {
        div_textRight_p.innerHTML = item["checkpoint_category"];
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
  var get_m_user_stride = {{ $user_stride }};
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
    div_textRight_p.style.width = '20%';
    div_textRight_p.style.color = "#2b63c6";
    div_textRight_p.style.fontWeight = "bold";

    if (item["checkpoint_category"]) {
      if (i == checkpoints.length - 1) {
          div_textRight_p.className = "py-0 my-0 pl-3 text-left dd";
          div_textRight_p.innerHTML = '<img  class = "pt-1" src="{{URL::asset('storage/mypage/flag.png')}}" alt="flag"/>' + item["checkpoint_category"].substring(0, 3);;
      } else {
        div_textRight_p.innerHTML = item["checkpoint_category"];
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
  //         if ({{ $total }}-item[key] < dist_walked) {
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
  //   var text2 = document.createTextNode({{ $total }}-item["distance"] + " " + item["checkpoint_category"]);
  //   name_p2.appendChild(text2);
  //   flexRowRev.appendChild(btnDiv2);
  //   flexRowRev.appendChild(name_p2);
  //   checkPoint_col2.appendChild(flexRowRev);
  //   console.log(item["checkpoint_category"]);
  // });

}

</script>
@endsection
