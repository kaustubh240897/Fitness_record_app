@extends('layouts.app')

@section('content')
<head>
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/domarrow.css') }}" />
  <script type="text/javascript" src="{{ URL::asset('js/domarrow.js') }}"></script>
  <link rel="stylesheet" href="/css/style_mycollectionsdetails.css">
 <style>
 </style>
</head>
<body>
@if(! empty($my_collections))
<div class='container-fluid' style="margin-top:28px">


			  		 <div class="row d-flex fixed-top" style=" z-index:0; background-color: #2b63c6; position:fixed; top:28px">

						    <div class='col-10 p-2 mx-3' style="color:white;">@if($my_collections->m_collections->collection_category == 'tour') <span class="badge badge-pill badge-warning ml-2 mr-1">ツアー</span> @else <img class='mx-2' src="/storage/img/label-1.png">  @endif{{ $my_collections->m_collections->collection_title }}  </div>

					 </div>

					 <div class='c mx-2 my-2 fixed-top' style='z-index:0; margin-top:28px'><img  style='border: solid  #2b63c6;' src="{{ asset($my_collections->m_collections->path . $my_collections->m_collections->filename) }}" class= "rounded-circle mt-3" alt="Cinque Terre" width="
					 	80" height="80">
					 </div>

					 <div class='row fixed-top' style='position:relative;'>
					 	<div class='col-12 wrapper'>
             @if($my_collections->m_collections->collection_category == 'tour')
					 		<p class='ml-3 mt-3 color'><img class='mr-1' src='/storage/img/complete.png'>{{ $my_collections->m_collections->m__tours->tour_title }} </p>
               <p class='color'> <span class="badge badge-pill badge-warning ml-2 mr-1">ツアー</span>  {{ $my_collections->m_collections->collection_title }} </p>
               <div class='row d-flex wrapper1'>
						 		 <div class='col p-2 ml-5'> <img class='mr-2 mb-2' src='/storage/img/ico.png'> <font style='color:#ffcc00;'>430 Km </font></div>
						 		 <div class='col p-2 c' style='color:white;'><span class="fa fa-star checked mx-1 "></span> {{ $my_collections->m_collections->updated_at->format('Y/m/d') }}  </div>
					 		</div>
            @else
            <p class='ml-3 mt-3 color'>{{ $my_collections->m_collections->m__checkpoints->tours->tour_title }} </p>
            <p class='color'> <img class='ml-3' src='/storage/img/label-1.png'> {{ $my_collections->m_collections->collection_title }} </p>
            <div class='c' style='color:white;'><span class="fa fa-star checked mx-1"></span>{{ $my_collections->m_collections->updated_at->format('Y/m/d') }} </div>
            @endif


					 	</div>



  					</div>
            @if(! empty($my_collections))
            @if($my_collections->m_collections->collection_category == 'tour')
              <div class="container text-center" style='background-image: url("/storage/img/celebrate.png")'>
            @else
              <div class="container text-center">
            @endif
                <img class="img-fluid mx-auto" src="{{ asset($my_collections->m_collections->path . $my_collections->m_collections->filename) }}" alt="Sample">
              </div>
            @else
              <h4> 申し訳ありませんが存在しません。 </h4>
            @endif

	    </div>

	    <div class='container-fluid' style='background-color: #f2f2f2; bottom: 66px;'>
	               <img src='/storage/img/line@3x.png' class='wid my-2'>
	              <b>  <text class='hr my-1'> @if($my_collections->m_collections->collection_category == 'tour') {{ $my_collections->m_collections->m__tours->tour_comment }} @else {{ $my_collections->m_collections->m__checkpoints->comments }}  @endif</text></b>
	               <img src='/storage/img/lineDown.png' class='wid mt-2'>


                 @if($my_collections->m_collections->collection_category == 'tour')
                 <div id="progress_bar_tour" class="">

                 </div>
                 <script type="text/javascript">
                 function goToCheckpointPage(id) {
                   var url = "/checkpointdetails/" + id.toString();
                   document.location=url;
                 }
                 console.log("steps",{{$user_tour_steps}});
                 console.log("stide",{{$user_stride}});
                   var prog_id = "progress_bar_tour";
                   var dist_walked = {{$user_tour_steps}}*{{$user_stride}}/100000;
                   var checkpoints;
                   var value = {{$session_value}};
                   if (value == 0) {
                     checkpoints = {!! json_encode($checkpoints) !!};
                   }
                   if ( {!! json_encode($my_collections->m_collections->collection_category) !!} == 'checkpoint') {
                     prog_id = "progress_bar_col";
                     console.log("81","checkpoint");
                     var title = {!! json_encode($my_collections->m_collections->m__tours->tour_title) !!};
                     console.log("83",title);
                     // if (value == 0) {
                     //   checkpoints = {!! json_encode($checkpoints) !!};
                     //   checkpoints.forEach((item, i) => {
                     //     console.log("val_0_87",item["checkpoint_title"]);
                     //     if (item["checkpoint_title"] == title) {
                     //       dist_walked = item["distance"];
                     //       console.log("dw1_90",dist_walked);
                     //     }
                     //   });
                     // } else {
                     //   checkpoints = {!! json_encode($checkpointsr) !!};
                     //   checkpoints.forEach((item, i) => {
                     //     console.log("96",item["checkpoint_title"]);
                     //     if (item["checkpoint_title"] == title) {
                     //       dist_walked = {{$total}} - item["distance"];
                     //       console.log("dw2_99",dist_walked);
                     //     }
                     //   });
                     // }

                   }
                   var steplist = document.getElementById(prog_id);
                   var flag1 = 0;

                   var tr_count_id = 1;

                   if (value == 0) {
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
                         if (item["distance"] <= dist_walked) {
                             // tag.className = "StepProgress-item is-done";
                             var div_sp_li = document.createElement("li");
                             div_sp_li.className = "StepProgress-itemStart is-done";
                             var div_sp_li_p = document.createElement("p");
                             div_sp_li_p.className = "py-0 speech-bubble pl-2 w-100 pb-1 text-break";
                             div_sp_li_p.style.fontSize = "80%";
                             div_sp_li_p.innerHTML = item["checkpoint_title"];
                             div_sp_li_p.id = item["id"];
                             div_sp_li_p.setAttribute('onclick', "goToCheckpointPage(this.id)");
                             div_sp_li.appendChild(div_sp_li_p);
                             div_sp.appendChild(div_sp_li);
                           } else {
                             flag1 += 1;
                             if (flag1 == 1) {
                               // tag.className = "StepProgress-item current";
                               var div_sp_li = document.createElement("li");
                               div_sp_li.className = "StepProgress-itemStart";
                               var div_sp_li_p = document.createElement("p");
                               div_sp_li_p.className = "py-0 speech-bubbleSelected2 pl-2 pr-1 w-100 pb-1 text-break";
                               div_sp_li_p.style.fontSize = "80%";
                               div_sp_li_p.innerHTML = item["checkpoint_title"];
                               div_sp_li_p.id = item["id"];
                               div_sp_li_p.setAttribute('onclick', "goToCheckpointPage(this.id)");
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
                               div_sp_li_p.id = item["id"];
                               div_sp_li_p.setAttribute('onclick', "goToCheckpointPage(this.id)");
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
                             div_sp_li_p.id = item["id"];
                             div_sp_li_p.setAttribute('onclick', "goToCheckpointPage(this.id)");
                             div_sp_li.appendChild(div_sp_li_p);
                             div_sp.appendChild(div_sp_li);
                           } else {
                             flag1 += 1;
                             if (flag1 == 1) {
                               // tag.className = "StepProgress-item current";
                               var div_sp_li = document.createElement("li");
                               div_sp_li.className = "StepProgress-item2";
                               var div_sp_li_p = document.createElement("p");
                               div_sp_li_p.className = "py-0 speech-bubbleSelected2 pl-2 pr-1 w-100 pb-1 text-break";
                               div_sp_li_p.style.fontSize = "80%";
                               div_sp_li_p.innerHTML = item["checkpoint_title"];
                               div_sp_li_p.id = item["id"];
                               div_sp_li_p.setAttribute('onclick', "goToCheckpointPage(this.id)");
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
                               div_sp_li_p.id = item["id"];
                               div_sp_li_p.setAttribute('onclick', "goToCheckpointPage(this.id)");
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
                             div_sp_li_p.id = item["id"];
                             div_sp_li_p.setAttribute('onclick', "goToCheckpointPage(this.id)");
                             div_sp_li.appendChild(div_sp_li_p);
                             div_sp.appendChild(div_sp_li);
                           } else {
                             flag1 += 1;
                             if (flag1 == 1) {
                               // tag.className = "StepProgress-item current";
                               var div_sp_li = document.createElement("li");
                               div_sp_li.className = "StepProgress-item current";
                               var div_sp_li_p = document.createElement("p");
                               div_sp_li_p.className = "py-0 speech-bubbleSelected2 pl-2 pr-1 w-100 pb-1 text-break";
                               div_sp_li_p.style.fontSize = "80%";
                               div_sp_li_p.innerHTML = item["checkpoint_title"];
                               div_sp_li_p.id = item["id"];
                               div_sp_li_p.setAttribute('onclick', "goToCheckpointPage(this.id)");
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
                               div_sp_li_p.id = item["id"];
                               div_sp_li_p.setAttribute('onclick', "goToCheckpointPage(this.id)");
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
                   } else {
                     // var dist_walked = {{$total}} - dist_walked;
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
                         if ({{ $total }}-item["distance"] <= dist_walked) {
                             // tag.className = "StepProgress-item is-done";
                             var div_sp_li = document.createElement("li");
                             div_sp_li.className = "StepProgress-itemStart is-done";
                             var div_sp_li_p = document.createElement("p");
                             div_sp_li_p.className = "py-0 speech-bubble pl-2 w-100 pb-1 text-break";
                             div_sp_li_p.innerHTML = item["checkpoint_title"];
                             div_sp_li_p.id = item["id"];
                             div_sp_li_p.setAttribute('onclick', "goToCheckpointPage(this.id)");
                             div_sp_li.appendChild(div_sp_li_p);
                             div_sp.appendChild(div_sp_li);
                           } else {
                             flag1 += 1;
                             if (flag1 == 1) {
                               // tag.className = "StepProgress-item current";
                               var div_sp_li = document.createElement("li");
                               div_sp_li.className = "StepProgress-itemStart";
                               var div_sp_li_p = document.createElement("p");
                               div_sp_li_p.className = "py-0 speech-bubbleSelected2 pl-2 w-100 pb-1 text-break";
                               div_sp_li_p.innerHTML = item["checkpoint_title"];
                               div_sp_li_p.id = item["id"];
                               div_sp_li_p.setAttribute('onclick', "goToCheckpointPage(this.id)");
                               div_sp_li.appendChild(div_sp_li_p);
                               div_sp.appendChild(div_sp_li);
                             } else {
                               // tag.className = "StepProgress-item";
                               var div_sp_li = document.createElement("li");
                               div_sp_li.className = "StepProgress-itemStart";
                               var div_sp_li_p = document.createElement("p");
                               div_sp_li_p.className = "py-0 speech-bubble pl-2 w-100 pb-1 text-break";
                               div_sp_li_p.innerHTML = item["checkpoint_title"];
                               div_sp_li_p.id = item["id"];
                               div_sp_li_p.setAttribute('onclick', "goToCheckpointPage(this.id)");
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
                             div_sp_li_p.id = item["id"];
                             div_sp_li_p.setAttribute('onclick', "goToCheckpointPage(this.id)");
                             div_sp_li.appendChild(div_sp_li_p);
                             div_sp.appendChild(div_sp_li);
                           } else {
                             flag1 += 1;
                             if (flag1 == 1) {
                               // tag.className = "StepProgress-item current";
                               var div_sp_li = document.createElement("li");
                               div_sp_li.className = "StepProgress-item2";
                               var div_sp_li_p = document.createElement("p");
                               div_sp_li_p.className = "py-0 speech-bubbleSelected2 pl-2 w-100 pb-1 text-break";
                               div_sp_li_p.innerHTML = item["checkpoint_title"];
                               div_sp_li_p.id = item["id"];
                               div_sp_li_p.setAttribute('onclick', "goToCheckpointPage(this.id)");
                               div_sp_li.appendChild(div_sp_li_p);
                               div_sp.appendChild(div_sp_li);
                             } else {
                               // tag.className = "StepProgress-item";
                               var div_sp_li = document.createElement("li");
                               div_sp_li.className = "StepProgress-item2";
                               var div_sp_li_p = document.createElement("p");
                               div_sp_li_p.className = "py-0 speech-bubble pl-2 w-100 pb-1 text-break";
                               div_sp_li_p.innerHTML = item["checkpoint_title"];
                               div_sp_li_p.id = item["id"];
                               div_sp_li_p.setAttribute('onclick', "goToCheckpointPage(this.id)");
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
                             div_sp_li_p.id = item["id"];
                             div_sp_li_p.setAttribute('onclick', "goToCheckpointPage(this.id)");
                             div_sp_li.appendChild(div_sp_li_p);
                             div_sp.appendChild(div_sp_li);
                           } else {
                             flag1 += 1;
                             if (flag1 == 1) {
                               // tag.className = "StepProgress-item current";
                               var div_sp_li = document.createElement("li");
                               div_sp_li.className = "StepProgress-item current";
                               var div_sp_li_p = document.createElement("p");
                               div_sp_li_p.className = "py-0 speech-bubbleSelected2 pl-2 w-100 pb-1 text-break";
                               div_sp_li_p.innerHTML = item["checkpoint_title"];
                               div_sp_li_p.id = item["id"];
                               div_sp_li_p.setAttribute('onclick', "goToCheckpointPage(this.id)");
                               div_sp_li.appendChild(div_sp_li_p);
                               div_sp.appendChild(div_sp_li);
                             } else {
                               // tag.className = "StepProgress-item";
                               var div_sp_li = document.createElement("li");
                               div_sp_li.className = "StepProgress-item";
                               var div_sp_li_p = document.createElement("p");
                               div_sp_li_p.className = "py-0 speech-bubble pl-2 w-100 pb-1 text-break";
                               div_sp_li_p.innerHTML = item["checkpoint_title"];
                               div_sp_li_p.id = item["id"];
                               div_sp_li_p.setAttribute('onclick', "goToCheckpointPage(this.id)");
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
                   }

                   console.log(dist_walked);
                   console.log(checkpoints);
                 </script>
                 @else

                 <div id="progress_bar_col" class="">

                 </div>
                 <script type="text/javascript">
                 function goToCheckpointPage(id) {
                   var url = "/checkpointdetails/" + id.toString();
                   document.location=url;
                 }
                 console.log("steps",{{$user_tour_steps}});
                 console.log("stide",{{$user_stride}});
                   var prog_id = "progress_bar_tour";
                   var dist_walked = {{$user_tour_steps}}*{{$user_stride}}/100000;
                   var checkpoints;
                   var value = {{$session_value}};
                   if (value == 0) {
                     checkpoints = {!! json_encode($checkpoints) !!};
                   }
                   if ( {!! json_encode($my_collections->m_collections->collection_category) !!} == 'checkpoint') {
                     prog_id = "progress_bar_col";
                     console.log("checkpoint");
                     var title = {!! json_encode($my_collections->m_collections->m__checkpoints->checkpoint_title) !!};
                     console.log(title);
                     // if (value == 0) {
                     //   checkpoints = {!! json_encode($checkpoints) !!};
                     //   checkpoints.forEach((item, i) => {
                     //     console.log(item["checkpoint_title"]);
                     //     if (item["checkpoint_title"] == title) {
                     //       dist_walked = item["distance"];
                     //       console.log(dist_walked);
                     //     }
                     //   });
                     // } else {
                     //   checkpoints = {!! json_encode($checkpointsr) !!};
                     //   checkpoints.forEach((item, i) => {
                     //     console.log(item["checkpoint_title"]);
                     //     if (item["checkpoint_title"] == title) {
                     //       dist_walked = {{$total}} - item["distance"];
                     //       console.log(dist_walked);
                     //     }
                     //   });
                     // }

                   }
                   var steplist = document.getElementById(prog_id);
                   var flag1 = 0;

                   var tr_count_id = 1;

                   if (value == 0) {
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
                         if (item["distance"] <= dist_walked) {
                             // tag.className = "StepProgress-item is-done";
                             var div_sp_li = document.createElement("li");
                             div_sp_li.className = "StepProgress-itemStart is-done";
                             var div_sp_li_p = document.createElement("p");
                             div_sp_li_p.className = "py-0 speech-bubble pl-2 w-100 pb-1 text-break";
                             div_sp_li_p.style.fontSize = "80%";
                             div_sp_li_p.innerHTML = item["checkpoint_title"];
                             div_sp_li_p.id = item["id"];
                             div_sp_li_p.setAttribute('onclick', "goToCheckpointPage(this.id)");
                             div_sp_li.appendChild(div_sp_li_p);
                             div_sp.appendChild(div_sp_li);
                           } else {
                             flag1 += 1;
                             if (flag1 == 1) {
                               // tag.className = "StepProgress-item current";
                               var div_sp_li = document.createElement("li");
                               div_sp_li.className = "StepProgress-itemStart";
                               var div_sp_li_p = document.createElement("p");
                               div_sp_li_p.className = "py-0 speech-bubbleSelected2 pl-2 pr-1 w-100 pb-1 text-break";
                               div_sp_li_p.style.fontSize = "80%";
                               div_sp_li_p.innerHTML = item["checkpoint_title"];
                               div_sp_li_p.id = item["id"];
                               div_sp_li_p.setAttribute('onclick', "goToCheckpointPage(this.id)");
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
                               div_sp_li_p.id = item["id"];
                               div_sp_li_p.setAttribute('onclick', "goToCheckpointPage(this.id)");
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
                             div_sp_li_p.id = item["id"];
                             div_sp_li_p.setAttribute('onclick', "goToCheckpointPage(this.id)");
                             div_sp_li.appendChild(div_sp_li_p);
                             div_sp.appendChild(div_sp_li);
                           } else {
                             flag1 += 1;
                             if (flag1 == 1) {
                               // tag.className = "StepProgress-item current";
                               var div_sp_li = document.createElement("li");
                               div_sp_li.className = "StepProgress-item2";
                               var div_sp_li_p = document.createElement("p");
                               div_sp_li_p.className = "py-0 speech-bubbleSelected2 pl-2 pr-1 w-100 pb-1 text-break";
                               div_sp_li_p.style.fontSize = "80%";
                               div_sp_li_p.innerHTML = item["checkpoint_title"];
                               div_sp_li_p.id = item["id"];
                               div_sp_li_p.setAttribute('onclick', "goToCheckpointPage(this.id)");
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
                               div_sp_li_p.id = item["id"];
                               div_sp_li_p.setAttribute('onclick', "goToCheckpointPage(this.id)");
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
                             div_sp_li_p.id = item["id"];
                             div_sp_li_p.setAttribute('onclick', "goToCheckpointPage(this.id)");
                             div_sp_li.appendChild(div_sp_li_p);
                             div_sp.appendChild(div_sp_li);
                           } else {
                             flag1 += 1;
                             if (flag1 == 1) {
                               // tag.className = "StepProgress-item current";
                               var div_sp_li = document.createElement("li");
                               div_sp_li.className = "StepProgress-item current";
                               var div_sp_li_p = document.createElement("p");
                               div_sp_li_p.className = "py-0 speech-bubbleSelected2 pl-2 pr-1 w-100 pb-1 text-break";
                               div_sp_li_p.style.fontSize = "80%";
                               div_sp_li_p.innerHTML = item["checkpoint_title"];
                               div_sp_li_p.id = item["id"];
                               div_sp_li_p.setAttribute('onclick', "goToCheckpointPage(this.id)");
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
                               div_sp_li_p.id = item["id"];
                               div_sp_li_p.setAttribute('onclick', "goToCheckpointPage(this.id)");
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
                   } else {
                     // var dist_walked = {{$total}} - dist_walked;
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
                         if ({{ $total }}-item["distance"] <= dist_walked) {
                             // tag.className = "StepProgress-item is-done";
                             var div_sp_li = document.createElement("li");
                             div_sp_li.className = "StepProgress-itemStart is-done";
                             var div_sp_li_p = document.createElement("p");
                             div_sp_li_p.className = "py-0 speech-bubble pl-2 w-100 pb-1 text-break";
                             div_sp_li_p.innerHTML = item["checkpoint_title"];
                             div_sp_li_p.id = item["id"];
                             div_sp_li_p.setAttribute('onclick', "goToCheckpointPage(this.id)");
                             div_sp_li.appendChild(div_sp_li_p);
                             div_sp.appendChild(div_sp_li);
                           } else {
                             flag1 += 1;
                             if (flag1 == 1) {
                               // tag.className = "StepProgress-item current";
                               var div_sp_li = document.createElement("li");
                               div_sp_li.className = "StepProgress-itemStart";
                               var div_sp_li_p = document.createElement("p");
                               div_sp_li_p.className = "py-0 speech-bubbleSelected2 pl-2 w-100 pb-1 text-break";
                               div_sp_li_p.innerHTML = item["checkpoint_title"];
                               div_sp_li_p.id = item["id"];
                               div_sp_li_p.setAttribute('onclick', "goToCheckpointPage(this.id)");
                               div_sp_li.appendChild(div_sp_li_p);
                               div_sp.appendChild(div_sp_li);
                             } else {
                               // tag.className = "StepProgress-item";
                               var div_sp_li = document.createElement("li");
                               div_sp_li.className = "StepProgress-itemStart";
                               var div_sp_li_p = document.createElement("p");
                               div_sp_li_p.className = "py-0 speech-bubble pl-2 w-100 pb-1 text-break";
                               div_sp_li_p.innerHTML = item["checkpoint_title"];
                               div_sp_li_p.id = item["id"];
                               div_sp_li_p.setAttribute('onclick', "goToCheckpointPage(this.id)");
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
                             div_sp_li_p.id = item["id"];
                             div_sp_li_p.setAttribute('onclick', "goToCheckpointPage(this.id)");
                             div_sp_li.appendChild(div_sp_li_p);
                             div_sp.appendChild(div_sp_li);
                           } else {
                             flag1 += 1;
                             if (flag1 == 1) {
                               // tag.className = "StepProgress-item current";
                               var div_sp_li = document.createElement("li");
                               div_sp_li.className = "StepProgress-item2";
                               var div_sp_li_p = document.createElement("p");
                               div_sp_li_p.className = "py-0 speech-bubbleSelected2 pl-2 w-100 pb-1 text-break";
                               div_sp_li_p.innerHTML = item["checkpoint_title"];
                               div_sp_li_p.id = item["id"];
                               div_sp_li_p.setAttribute('onclick', "goToCheckpointPage(this.id)");
                               div_sp_li.appendChild(div_sp_li_p);
                               div_sp.appendChild(div_sp_li);
                             } else {
                               // tag.className = "StepProgress-item";
                               var div_sp_li = document.createElement("li");
                               div_sp_li.className = "StepProgress-item2";
                               var div_sp_li_p = document.createElement("p");
                               div_sp_li_p.className = "py-0 speech-bubble pl-2 w-100 pb-1 text-break";
                               div_sp_li_p.innerHTML = item["checkpoint_title"];
                               div_sp_li_p.id = item["id"];
                               div_sp_li_p.setAttribute('onclick', "goToCheckpointPage(this.id)");
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
                             div_sp_li_p.id = item["id"];
                             div_sp_li_p.setAttribute('onclick', "goToCheckpointPage(this.id)");
                             div_sp_li.appendChild(div_sp_li_p);
                             div_sp.appendChild(div_sp_li);
                           } else {
                             flag1 += 1;
                             if (flag1 == 1) {
                               // tag.className = "StepProgress-item current";
                               var div_sp_li = document.createElement("li");
                               div_sp_li.className = "StepProgress-item current";
                               var div_sp_li_p = document.createElement("p");
                               div_sp_li_p.className = "py-0 speech-bubbleSelected2 pl-2 w-100 pb-1 text-break";
                               div_sp_li_p.innerHTML = item["checkpoint_title"];
                               div_sp_li_p.id = item["id"];
                               div_sp_li_p.setAttribute('onclick', "goToCheckpointPage(this.id)");
                               div_sp_li.appendChild(div_sp_li_p);
                               div_sp.appendChild(div_sp_li);
                             } else {
                               // tag.className = "StepProgress-item";
                               var div_sp_li = document.createElement("li");
                               div_sp_li.className = "StepProgress-item";
                               var div_sp_li_p = document.createElement("p");
                               div_sp_li_p.className = "py-0 speech-bubble pl-2 w-100 pb-1 text-break";
                               div_sp_li_p.innerHTML = item["checkpoint_title"];
                               div_sp_li_p.id = item["id"];
                               div_sp_li_p.setAttribute('onclick', "goToCheckpointPage(this.id)");
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
                   }

                   console.log(dist_walked);
                   console.log(checkpoints);
                 </script>
                 @endif


		</div>



  @else
  <div class='text-center'>
    <h4 class='mt-5'> コレクションはありません。 </h4>
  </div>
  @endif
  <div class='d-flex flex-row' style='background-color: #eef4f6; position: relative; z-index: 5; '>
      <div class='col-12'>
      <img style='width: 100%; height: auto;' src='/storage/img/bg@3x.png'>
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

@endsection
