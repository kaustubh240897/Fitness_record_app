@extends('layouts.app')

@section('content')

<!-- @if (session('successMsg'))
  <div class='alert alert-success' roles='alert'>
    {{ session('successMsg') }}
  </div>
@endif -->

<head>
 <style media="screen">
      .btn.blue {
          background-color: #ccece8 !important;
          /* padding: 12px 32px !important; */
      }
      .collectionsRow {
        cursor: pointer;
      }


      .button {
		  background-color: #2b63c6;
		  color: white;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  cursor: pointer;
		  border-radius: 16px;
		  border: 1px solid white;
      outline: none !important
		}

		body {

		  overflow-x:hidden;
		}

		div.c {
		  text-align: right;
		}

		.wrapper1{
	  		height:13rem;
	  		font-size: 15px;
	  		background-color: #2b63c6;

	  	}
	  	.center {
			  display: block;
			  margin-left: auto;
			  margin-right: auto;
			  margin-top: 3rem;

			  position: relative;
			  z-index: 1;


			}
		  .circle {

			  color: white;
			  text-decoration: none;
			  display: inline-block;
			  border-radius: 2px;
			}

			.circle .badge {
			  position: absolute;
			  color: black;
			}
			.checked {
			  color: #ffcc00;
			}

			.border {
				border: 1px solid grey;
			}
      .navfix {
        position: fixed;
        bottom: 0;
        left: 0;
        z-index: 10;
      }
      .navItem {
          height: 66px;
      }

      .navItem.is-active {
          margin-top: -10px;
          /* margin-bottom: -10px; */
          height: 76px;
          background-color: #174493;
           border-radius: 5px
      }
      .selected_sort {
        color: #2b63c6;
        font-weight: bold;
      }
      .not_selected_sort {
        color: #000;
        font-weight: normal;
      }
      .dropdown-toggle::after {
          display:none !important;
      }
      .dropdown-menu {
         /* min-width: 6rem; */
         z-index: 10 !important;
         margin-top: 10px !important;
         border-radius: 18px !important;
     }
     .speech-bubble {
     	position: relative;
     	background: #fff;
     	border-radius: .4em;
       padding-left: 10px;
     }

     .speech-bubble:after {
     	content: '';
     	position: absolute;
     	bottom: 80%;
     	right: 20%;
     	width: 0;
     	height: 0;
     	border: 6px solid transparent;
       border-bottom:20px solid #fff;
     	margin-left: 0px;
       margin-right: 20px;
       margin-top: 0px;
     	margin-bottom: 20px;
     }
  </style>

</head>
<body style='background-color: white;'>
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
  <div class="row d-flex" style="border-bottom: 1px solid white; z-index: 10; background-color: #2b63c6; ">
   <div class=' p-2' style="color:white;"><div class="ml-4" style='color: white;'>私のコレクション</div> </div>
   <div class='ml-auto p-2 c'>
     <!-- <button class='button mr-4' style="color:white;">ツアーで並べ替え ↑↓ </button> -->
     <div class="dropdown p-1">
<button class="text-center dropdown-toggle" type="" style="color: white; font-size: 80%; border-radius: 12px;
border: solid 1px #ffffff;
background-color: #2b63c6;" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
ツアーで並べ替え ↑↓
</button>
<div class="dropdown-menu speech-bubble dropdown-menu-right" aria-labelledby="dropdownMenu2">
<a id="group_by_tour" onclick="sortHistory(this.id);" >  <label class="radio-inline pl-2 pb-2">
<input id="group_by_tour_radio" class="pt-3" type="radio" name="optradio"><span id="sort_newest_span" class="not_selected_sort pl-2 pb-2" style="font-size: 100%">実績の新しい順</span>
</label></a>
<a id="sort_oldest" onclick="sortHistory(this.id);">   <label class="radio-inline pl-2 pb-2">
<input id="sort_oldest_radio" class="pt-3" type="radio" name="optradio"><span id="sort_oldest_span" class="not_selected_sort pl-2 pb-1" style="font-size: 100%">実績の古い順</span>
</label> </a>
<a id="sort_newest" onclick="sortHistory(this.id);">   <label class="radio-inline pl-2 pb-2">
<input id="sort_newest_radio" class="pt-3" type="radio" name="optradio"><span id="sort_oldest_span" class="not_selected_sort pl-2 pb-1" style="font-size: 100%">実績の古い順2</span>
</label> </a>
</div>
</div>
   </div>

  </div>



  <div class="row wrapper1 " style='z-index: 0;'>

    <div class='col-12'><img class='center' src='/storage/img/star_mycol.png'> </div>


  </div>
</div>
<div class='container-fluid' >

  @if(! empty($get_t_collections))
  <div class='row py-2' style='margin-top:18rem; z-index: 9; position: relative; background-color: white; padding-bottom: 0%;'>
  @foreach($get_t_collections as $get_t_collection)
    @if($get_t_collection->new_display_flag == 0)
      <div class='col-4 circle'>
        <span class="badge badge-pill badge-warning">New</span>
         <span> <img style='border: solid  #ffcc00;' src="{{ asset($get_t_collection->m_collections->path . $get_t_collection->m_collections->filename) }}" class="rounded-circle" alt="Cinque Terre" width="80" height="80"> </span>
      </div>
    @else
    <div class='col-4'>
        <img src="{{ asset($get_t_collection->m_collections->path . $get_t_collection->m_collections->filename) }}"  class=" rounded-circle" alt="Cinque Terre" width="80" height="80">
      </div>
    @endif
        <div class='col-8'> <img src='/storage/img/label-1.png'><br><a href="{{ route('collectiondetails', $get_t_collection->m_collections->id) }}">{{ $get_t_collection->m_collections->collection_title }} </a></div>
      <div class='col-4'> </div>
      <div class='col-8 c checked'> @if($counter[$loop->iteration-1] >5)+@endif  @for($i=0; $i<$counter[$loop->iteration-1]; $i++) @if($i <=5)<img src='storage/img/star.png'>@endif @endfor
        <font style='color:#cbaca3;'> {{ $get_t_collection->created_at->format('Y-m-d') }} </font>
      </div>


                <br/>
    @endforeach

  </div>

  <div class='row' style='background-color: #eef4f6; position: relative; z-index: 10;'>
				<div class='col-12'>
				<img style='width: 100%; height: auto;' src='/storage/img/bg@3x.png'>
	</div>

  </div>


@else
    <h1> まだコレクションはありません！ </h1>
  @endif
  <div class="container-fluid navfix" style="background-color: #2b63c6;">
    <div class="row d-flex text-center">
      <div class="col-3 padding-0 pt-2 navItem" style="border-right: 2px solid #113a83;" id="box1" onclick="navItemClick(this.id);">
        <a href='/mypage'>
          <img id="box1_img" class="pb-0 mb-0" src="{{asset('storage/mypage/box1.png')}}" alt="">
          <p id="box1_title" class="pt-0 mt-0" style="font-size: 60%; font-weight: normal;text-align: center;color: #fff;">マイページ</p>
      </a>
      </div>
      <div class="col-3 padding-0 pt-2 navItem is-active" style="border-right: 2px solid #113a83;" id="box2" onclick="navItemClick(this.id);">
        <a href='/mycollection'>
          <img id="box2_img" class="pb-0 mb-0" src="{{asset('storage/mypage/box2_sel.png')}}" alt="">
          <p id="box2_title" class="pt-0 mt-0" style="font-size: 60%; font-weight: bold;text-align: center;color: #fddb66;">コレクション</p>
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

  <script type="text/javascript">
  if ({{$index}} == 0) {
		document.getElementById("group_by_tour_radio").checked = true;
	} else if ({{$index}} == 1) {
		document.getElementById("sort_oldest_radio").checked = true;
	} else if ({{$index}} == 2) {
		document.getElementById("sort_newest_radio").checked = true;
	}
  function sortHistory(id) {
    console.log("yes");
    var url = "";
    if (id == "sort_newest") {
      url = "/reversemycollection";
      location.reload();location.href=url;
    } else if (id == "sort_oldest") {
      url = "/mycollection";
      location.reload();location.href=url;
    } else {
      url = "/bytourcollection";
      location.reload();location.href=url;
    }
  }
  </script>
  </script>
</body>



@endsection
