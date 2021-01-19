@extends('layouts.app')

@section('content')

<head>
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/domarrow.css') }}" />
  <script type="text/javascript" src="{{ URL::asset('js/domarrow.js') }}"></script>
  <link rel="stylesheet" href="/css/style_tourdetails.css">
   <style media="screen">



  </style>
</head>

<body style='background-color: #f2f2f2'>
  <div class="fixed-top">
    <div class="container-fluid bg-white  py-0 my-0 px-3" style="height:28px !important;">
      <div class="d-flex flex-row justify-content-between">
        <div class="p-0">
          <img src="{{ asset('storage/mypage/ico_back.png') }}" alt="" onclick="goBack()" style="cursor: pointer;">
        </div>
        <div class="p-0">
          <p class="text-center" style="font-size: 120%">ウォーキング</p>
        </div>
        <div class="p-0">
          <a href="/padometerscreen"><img src="{{ asset('storage/mypage/close.png') }}" alt=""></a>
        </div>
      </div>
    </div>
    <script>
      function goBack() {
      window.history.back();
      }
    </script>
    <div class=" row flex-row" style=" z-index:0; background-color: #2b63c6;">
      <div class='col-10 p-2 mx-3' style="color:white;">{{ $tours->tour_title }} </div>
        <div class='col-12 '> <img class='mx-2 mb-2' src='/storage/img/ico.png'> <font style='color:#ffcc00;'>{{ $total }} Km </font></div>
    <div>
</div>
</div>
</div>
<div class='container-fluid'>

</div>
<!-- @if (session('successMsg'))
<div class='alert alert-success' style='margin-top:5rem;' roles='alert'>
 {{ session('successMsg') }}
</div>
@endif -->
<div class='container-fluid' style='background-color: #f2f2f2; margin-top: 28px'>
           <img src='/storage/img/line@3x.png' class='wid' style='margin-top: 6rem;'>
              <b>  <text class='hr my-1'>{{ $tours->tour_comment }}</text></b>
            <img src='/storage/img/lineDown.png' class='wid mt-4'>

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

            <div class='row'>
              <div class='col-12 text-center my-3' style='margin-bottom:25% !important;'><a href='/createtour'> <p class="mb-4  text-center" style="border: solid 1px #2b63c6; border-radius: 15px;"><  リストに戻る</p> </a></div>
                <div class='col-12 text-center'>
                  <form action="{{ route('tourstore', $tours->id) }}" method="POST" >
                            {{ csrf_field() }}
                            {{ method_field('post') }}
                            <!-- Button trigger modal -->
                            <div class="d-flex flex-row justify-content-center my-2">
                              <button type='button' class="button1 w-100 refBtn text-center " data-toggle="modal" data-target="#exampleModalCenter"> このコースを選択する  </button>
                            </div>


                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" style='color:#2b63c6;' id="exampleModalLongTitle">コースの方向を選択してください</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                <div class="modal-body">
                                  <div class="container">

                                    <div class="row justify-content-center px-3">
                                      <div class="col">
                                        <div class="form-check form-check-inline">
    
                                          @if($value == 0)
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="3" checked>
                                          @else
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="3">
                                          @endif
                                          <label class="form-check-label" style='color:#2b63c6;' for="inlineRadio1">通常の踏破</label>
                                        </div>
                                          <!-- </div> -->
                                          <br>
                                          <!-- <div class="col"> -->
                                        <div class="form-check form-check-inline">
                                          @if($value == 1)
                                            <input class="form-check-input ml-3" type="radio" name="gridRadios" id="gridRadios2" value="4" checked>
                                          @else
                                            <input class="form-check-input ml-3" type="radio" name="gridRadios" id="gridRadios2" value="4">
                                          @endif
                                          <label class="form-check-label" style='color:#2b63c6;' for="inlineRadio2">逆方向に踏破</label>
                                        </div>
                                      </div>
                                    </div>
                                    <hr/>
                                    <img class='mr-1' style='width:100%; height:auto;' src='/storage/img/tour-change1.png'>
                                    <div class='container mt-5'>
                                      @foreach($constant_data as $c)
                                        <div class='row py-2' style='background-color: #fdf2e3;' >
                                          <div class='col-1'> <img class='mr-2' src='/storage/img/point.png'></div><div class='col-10'> {{ $c }}
                                          </div>
                                        </div>
                                      @endforeach
                                    </div>
                                </div>
                                  <div class="modal-footer">
                                    <div class='row'>
                                      <div class='col-12 text-center mr-2'><button type="submit" class="button" style='background-color:#2b63c6 ; color:white'>コースの変更</button></div>
                                    <div class='col-12 text-center mr-2'><button type="button" class='button mt-2' style='background-color:white;' data-dismiss="modal">閉じる</button></div>
                                  </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </form>
                </div>
              </div>
          </div>

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
          <p id="box2_title" class="pt-0 mt-0" style="font-size: 60%; font-weight: normal;text-align: center;color: #fff;">コレクション</p>
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
</body>

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

var steplist = document.getElementById("progress_bar");
var tr_count_id = 1;


if({{ $value }} == 0){
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
    div_dist_p.className = "text-right dist_t_p";
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
          div_textRight_p.innerHTML = '<img  class = "pt-1 pb-0 mb-0" src="{{URL::asset('storage/mypage/flag.png')}}" alt="flag"/>' + item["prefectures"].substring(0, 5);;
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
    div_dist_p.className = "text-right dist_t_p";
    div_dist_p.innerHTML = item["distance"].toString() + "km";
    div_dist.appendChild(div_dist_p);
    if (i == 0) {
      if ({{ $total }}-item["distance"] < dist_walked) {
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

    if (item["prefectures"]) {
      if (i == checkpoints.length - 1) {
          div_textRight_p.className = "py-0 my-0 pl-3 text-left dd";
          div_textRight_p.innerHTML = '<img  class = "pt-1" src="{{URL::asset('storage/mypage/flag.png')}}" alt="flag"/>' + item["prefectures"].substring(0, 5);;
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
