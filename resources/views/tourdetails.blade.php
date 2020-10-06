@extends('layouts.app')

@section('content')
<div class='container'>

<!-- @if(! empty($current_tour) && $current_tour->status == 'Done')
<h4> Your tour has been completed Please select another tour. </h4>
@elseif(! empty($current_tour) && $current_tour->status == 'Inprogress')
<h4> Your selected tour is {{ $current_tour->m_tours->tour_title }} </h4>
@else
<h4> You have not selected any tour.</h4>
@endif
 
 Tour title <h2>{{ $tours->tour_title }}  distance-: {{ $total }} Km</h2>
 Tour comment -: {{ $tours->tour_comment }}

 <h3>Checkpoints  </h3>
 @if($checkpoints->count() > 0)
 @if($value == 'false' || $value == 'null')
 Start

 @foreach ($checkpoints as $checkpoint)
   
     <h4>{{$loop->iteration}}. {{ $checkpoint->checkpoint_title }} {{ $checkpoint->checkpoint_category }}  {{ $checkpoint->distance }}Km</h4>
     @if($checkpoint->distance <  $user_stride/100000 * $steps )
     <h2 style='color:green'>Checked</h2>
     @endif
 @endforeach
 
 End
@elseif($value == 'true')
Start
@foreach ($checkpointsr as $checkpoint) 
   
     <h4>{{$loop->iteration}}. {{ $checkpoint->checkpoint_title }} {{ $checkpoint->checkpoint_category }}  {{ $total-$checkpoint->distance }}Km</h4>
      @if($total - $checkpoint->distance <  $user_stride/100000 * $steps )
     <h2 style='color:green'>Checked</h2>
     @endif
 @endforeach
 End
 
@endif
@else
<h4> Sorry there are no checkpoints.</h4>
@endif

 <h3> You covered {{ $user_stride/100000 * $steps }} (Km) </h3>




<fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Select path</legend>
      <div class="col-sm-10">
        <div class="form-check">
        @if($value=='false')
        
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="1" checked>
        
        @else
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="1" >

        @endif
          <label class="form-check-label" for="gridRadios1">
            Normal breakthrough
            
          </label>
        </div>
        <div class="form-check">
        @if($value == 'true')
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2" checked>
        
        @else
             <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">

        @endif
          <label class="form-check-label" for="gridRadios2">
            Reverse
           
          </label>
        </div>
        
      </div>
    </div>
  </fieldset>


</div>
 -->




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
      padding-left: 45px;
      list-style: none;
    }
    .StepProgress::before {
      display: inline-block;
      content: '';
      position: absolute;
      top: 0;
      left: 15px;
      width: 20px;
      height: 100%;
      border-left: 4px solid #CCC;
    }
    .StepProgress-item {
      position: relative;
      counter-increment: list;
    }
    .StepProgress-item:not(:last-child) {
      padding-bottom: 40px;
    }
    .StepProgress-item::before {
      display: inline-block;
      content: '';
      position: absolute;
      left: -30px;
      height: 100%;
      width: 24px;
    }
    .StepProgress-item::after {
      content: '';
      display: inline-block;
      position: absolute;
      top: 0;
      left: -40px;
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
      left: -44px;
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
      left: -40px;
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
   <a href="{{ url('/createtour') }}" > <button type="button" class="btn blue">Tour Selection Page</button></a>
    </div>
 
    <div class="container-fluid mt-3 pl-sm-4">
      <div class="row pl-2">
        <div class="col-4 col-sm-2 p-1 pl-2">
         @if(! empty($current_tour) && $current_tour->status == 'Done')
         <p> Your tour has been completed Please select another tour. </p>
         @elseif(! empty($current_tour) && $current_tour->status == 'Inprogress')
          <p style="font-size: 80%">{{ $current_tour->m_tours->tour_title }}</p>
          @else
          <p> You have not selected any tour.</p>
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
          <p style="font-size: 80%">Comments:-</p>
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
              
              <label class="form-check-label" for="inlineRadio1">Normal</label>
            </div>
            <div class="form-check form-check-inline pl-3">
             @if($value == 'true')
             <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2" checked>
             @else
             <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
             @endif
              <label class="form-check-label" for="inlineRadio2">Reverse</label>
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
<h4> Sorry there are no checkpoints.</h4>
@endif

 
</div>
@if(! empty($current_tour))
@if($current_tour->status == 'Done')
<h5> Congrats! Your tour has been completed. </h5>
@else
<h3> You covered {{ $user_stride/100000 * $steps }} (Km) </h3>
@endif
@else
<h4> you have not selected any tour. please select the tour </h4>
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
    var name_p2 = document.createElement("p");
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
    flexRow.className = "d-flex flex-row";
    var flexRowRev = document.createElement("div");
    flexRowRev.className = "d-flex flex-row-reverse";
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
    var name_p2 = document.createElement("p");
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
    flexRow.className = "d-flex flex-row";
    var flexRowRev = document.createElement("div");
    flexRowRev.className = "d-flex flex-row-reverse";
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