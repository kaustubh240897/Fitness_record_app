@extends('layouts.app')

@section('content')
<head>
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/domarrow.css') }}" />
  <script type="text/javascript" src="{{ URL::asset('js/domarrow.js') }}"></script>
 <style>
    div.c {
		  text-align: right;
		}

		.wrapper{
	  		height:9rem;
	  		font-size: 15px;
	  		z-index: 9;
	  		background-color: #2b63c6;
	  	}


        .hr {
		  border:none;
		  border-bottom:1px dashed #e9d0af;
		  color:black;
		  text-decoration-color: #cbaca3;
		  height:1px;
		  width:50%;
		}
	  	div.sticky {
			  position: -webkit-sticky; /* Safari */
			  position: sticky;
			  top: 0;
			}

		.wid{
			width: 100%;
			height: 100%;

		}
		p.color{
			color:white;
		}
		.checked {
			  color: orange;
			}

    /* .btn.btn-lg {
        background-color: #ccece8 !important;
        /* padding: 12px 32px !important; */
    /* }
    .collectionsRow {
      cursor: pointer;
    }
    @media only screen and (max-width: 768px) {
      .col-3 {width: 25%;}
    }
     */
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
</head>
<body>
@if(! empty($my_collections))
<div class='container-fluid'>


			  		 <div class="row d-flex fixed-top" style=" z-index:0; background-color: #2b63c6; position: fixed; top:0px;">

						    <div class='col-10 p-2 mx-3' style="color:white;">@if($my_collections->m_collections->collection_category == 'tour') <span class="badge badge-pill badge-warning ml-2 mr-1">ツアー</span> @else <img class='mx-2' src="/storage/img/label-1.png">  @endif{{ $my_collections->m_collections->collection_title }}  </div>

					 </div>

					 <div class='c mx-2 my-2 fixed-top' style='z-index:0;'><img style='border: solid  #2b63c6;' src="{{ asset($my_collections->m_collections->path . $my_collections->m_collections->filename) }}" class= "rounded-circle" alt="Cinque Terre" width="
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

	    <div class='container-fluid' style='background-color: #f2f2f2'>
	               <img src='/storage/img/line@3x.png' class='wid my-2'>
	              <b>  <text class='hr my-1'> @if($my_collections->m_collections->collection_category == 'tour') {{ $my_collections->m_collections->m__tours->tour_comment }} @else {{ $my_collections->m_collections->m__checkpoints->comments }}  @endif</text></b>
	               <img src='/storage/img/lineDown.png' class='wid mt-2'>

	               <div class='col-12 my-2' style='color: #2b63c6;'>
                    <h6> A relaxing trip to herokiku mountains.</h6>
                    0km
	               </div>
                 @if($my_collections->m_collections->collection_category == 'tour')
                 <div id="progress_bar_tour" class="">

                 </div>
                 @else
                 <div id="progress_bar_col" class="">

                 </div>
                 @endif

		    <div class='row mt-2' style='background-color: #eef4f6;'>
		    	<br>
		    	<br>
				<div class='col-12'>
				<img class='wid' src='/storage/img/bg@3x.png'>
			    </div>
			</div>
		</div>
  @else
    <h4> コレクションはありません。 </h4>
  @endif

  <script type="text/javascript">
    var prog_id = "progress_bar_tour";
    var dist_walked = {{$total}};
    if ( {!! json_encode($my_collections->m_collections->collection_category) !!} == 'checkpoint') {
      prog_id = "progress_bar_col";

    }
    var steplist = document.getElementById(prog_id);
    var flag1 = 0;
    var value = false;
    var tr_count_id = 1;

    if (value) {
      var checkpoints = {!! json_encode($checkpoints) !!};
      if ( {!! json_encode($my_collections->m_collections->collection_category) !!} == 'checkpoint') {
        prog_id = "progress_bar_col";
        var title = {!! json_encode( $my_collections->m_collections->m__checkpoints->checkpoint_title) !!};
        console.log(title);
        checkpoints.forEach((item, i) => {
        //  {{ $my_collections->m_collections->m__checkpoints->checkpoint_title }}
          console.log(item["checkpoint_title"]);
          if (item["checkpoint_title"] == title) {
            dist_walked = item["distance"];
            console.log(dist_walked);
          }
        });
      }
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
    } else {
      // var dist_walked = {{$total}} - dist_walked;
      var flag1 = 0;
      var checkpoints = {!! json_encode($checkpointsr) !!};
      if ( {!! json_encode($my_collections->m_collections->collection_category) !!} == 'checkpoint') {
        prog_id = "progress_bar_col";
        var title = {!! json_encode( $my_collections->m_collections->m__checkpoints->checkpoint_title) !!};
        console.log(title);
        checkpoints.forEach((item, i) => {
        //  {{ $my_collections->m_collections->m__checkpoints->checkpoint_title }}
          console.log(item["checkpoint_title"]);
          if (item["checkpoint_title"] == title) {
            dist_walked = item["distance"];
            console.log(dist_walked);
          }
        });
      }
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
    }

    console.log(dist_walked);
    console.log(checkpoints);
  </script>
</body>

@endsection
