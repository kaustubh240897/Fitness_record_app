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

</style>


<div class="container-fluid mt-1">
   <a href="{{ url('/createtour') }}" > <button type="button" class="btn blue">ツアー選択へ戻る</button></a>
   
 <form action="{{ route('tourstore', $tours->id) }}" method="POST" >
      {{ csrf_field() }}
      {{ method_field('post') }}
      <button type="submit" class="btn btn-sm blue" style="font-size:70%"> Tour selection</button>
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


</div>
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
  var checkPoint_col = document.getElementById("checkPoint_name");
  var checkPoint_col2 = document.getElementById("checkPoint_name2");


if({{ $value }} === false){
  var get_m_user_stride = {{ $user_stride }};
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
    flexRowRev.style.maxWidth = "100px";
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
  var get_m_user_stride = {{ $user_stride }};
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
          if ({{ $total }}-item[key] < dist_walked) {
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

    var text2 = document.createTextNode({{ $total }}-item["distance"] + " " + item["checkpoint_category"]);
    name_p2.appendChild(text2);
    flexRowRev.appendChild(btnDiv2);
    flexRowRev.appendChild(name_p2);
    checkPoint_col2.appendChild(flexRowRev);
    console.log(item["checkpoint_category"]);
  });

}

</script>
@endsection
