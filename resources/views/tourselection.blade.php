@extends('layouts.app')

@section('content')

<!-- @if (session('successMsg'))
<div class='alert alert-success' style='margin-top:5rem;' roles='alert'>
 {{ session('successMsg') }}
</div>
@endif -->
<link rel="stylesheet" href="/css/style_tourselection.css">

<style media="screen">


</style>
  <body style='background-color:#fffdfa;'>
    <div class="fixed-top">
      <!-- <div class="container-fluid bg-white  py-0 my-0 px-3" style="height:28px !important;">
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
      </script> -->
      <div class="row d-flex " style="border-bottom: 1px white; z-index: 10; background-color: #2b63c6;  box-shadow: 5px 2px white;">
        <div class='col-12 p-2' style="color:white;"><div class="ml-4" style='color: white;'>設定 &nbsp <i style='color:white !important;' class="fa fa-angle-right"></i> &nbsp コースの設定 </div>
      </div>
    </div>
  </div>
  	<div class='container-fluid'>
			<div class='row'>
			  <div class='col-12 text-center text-color top'><h5><b>現在参加中のコース</b></h5></div>
			</div>
			<div>
			  <img src='/storage/img/line@3x.png' class='wid'>
			</div>
			<div class='container mt-4'>
          @if(! empty($current_tour))
			      <a href="{{ route('tourdetails', $current_tour->m_tours->id) }}" style="text-decoration: none;">
					  @if($current_tour->status == 'Done')
			    	  <div class='row border py-2'>
			    		  <div class='col-1'><img class='mr-1' src='/storage/img/complete.png'></div><div class='col-5 mx-1' style='color: #2b63c6;'>{{ $current_tour->m_tours->title_abbreviation }} </div><div class='col-5 c' style='color:grey;'>{{ $total }} Km &nbsp <i class="fa fa-angle-right" aria-hidden="true"></i> </div>
			    	  </div>
            		<div class='mt-4'> <img style='width:100%; height: auto;' src='/storage/img/error@3x.png'></div>

		        @else
						  <div class='row border py-2'>
						    <div class='col-5' style='color: #2b63c6;'>{{ $current_tour->m_tours->title_abbreviation }} </div><div class='col-6 c' style='color:grey;'>{{ $total }}Km &nbsp <i class="fa fa-angle-right" aria-hidden="true"></i> </div>
						  </div>
						  <div class='col-12 text-center mt-4'> <b class='color'>{{ number_format($steps * $get_m_user_stride/100000,2,'.','') }}km/{{ $total }}km</b></div>
          	@endif
				    </a>
          @else
        	  <div class='mt-4'> <img style='width:100%; height: auto;' src='/storage/img/error.svg'></div>
          @endif
			    <div class='row'>
			    	<div class='col-12 text-center text-color mt-5'><h5><b>選択可能なコース</b></h5></div>
			    </div>
			  </div>
			  <div>
			    <img src='/storage/img/line@3x.png' class='wid'>
			  </div>
			    <div class='container mt-4'>
            @foreach($tours as $tour)
              <a href="{{ route('tourdetails', $tour->id) }}" style="text-decoration: none;">
                <div class='row border py-2'>
                  @foreach($all_t_Tours as $all_t_Tour) @if($tour->id == $all_t_Tour->m__tours_id)  @if($all_t_Tour->status == 'Done') <div class='col-1'> <img class='mr-1' src='/storage/img/complete.png'> </div> @break @else @continue  @endif @endif @endforeach<div class='col-5 mx-1' style='color: #2b63c6;'>{{ $tour->title_abbreviation }}</div> <div class='col-5 c' style='color:grey;'>@if(! empty($tour->checkpoints)) @foreach($tour->checkpoints as $checkpoint) @if($checkpoint->checkpoint_category == '終了')  {{ $checkpoint->distance }}Km @endif  @endforeach @else 0Km @endif  &nbsp <i class="fa fa-angle-right" aria-hidden="true"></i> </div>
                </div>
              </a>
              <br>
            @endforeach
			    </div>
			    <div class="container mt-5">
            <div class='d-flex flex-row justify-content-center'>
  			        <!-- <img src='/storage/img/tour-change1.png' style='width:55%;'> -->
                <div class="col-1 text-right">
                  <img src={{ asset('storage/img/ico_caution.svg') }}>
                </div>
                <div class="col-xs-8 col-md-4 col-8 text-left">
                  <p style="color: #2b63c6; font-weight: bold;">コース設定の注意点</p>
                </div>
  			    </div>
          </div>
			    <div>
			        <img src='/storage/img/line@3x.png' class='wid'>
			    </div>
			    <div class='container mt-5'>
						@foreach($constant_data as $c)
						  <div class='row py-2' style='background-color: #fdf2e3;' >
						    <div class='col-1'> <img class='mr-2' src='/storage/img/point.png'></div><div class='col-10'> {{ $c }}
						    </div>
					    </div>
						@endforeach
			    </div>
			    <div class='row mt-4' style='background-color: #eef4f6; position: relative; z-index: 10;'>
				    <div class='col-12 mt-3'>
				      <img style='width: 100%;height: auto;' src='/storage/img/bg@3x.png'>
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

  </body>

@endsection
