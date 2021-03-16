@extends('layouts.app')

@section('content')
<head>
<!-- @if (session('successMsg'))
  <div class="alert alert-success" role="alert">
    {{ session('successMsg') }}
  </div>
@endif

@if (session('dangerMsg'))
  <div class="alert alert-danger" role="alert">
    {{ session('dangerMsg') }}
  </div>
@endif -->

@if ($errors->any())
  @foreach ($errors->all() as $error)
    <div class='alert alert-danger' role='alert'>
    {{ $error }}
    </div>
  @endforeach
@endif
<link rel="stylesheet" href="/css/style_showprofiledetails.css">
<style>


</style>

</head>
@if(! empty($m_users) && $m_users->users_id == Auth::id())
<body style='background-color: white;'>
	    	<div class='container-fluid' style="margin-top: 0px">
			    <div class="row d-flex fixed-top" style="border-bottom: 1px white; z-index: 10; background-color: #2b63c6; position: fixed; top:0px; box-shadow: 5px 2px #003366;">
				   <div class='col-12 p-2' style="color:white;"><div class="ml-4" style='color: white;'>設定</div>
				</div>
			</div>

            <div>
			    <div class="row wrapper1 fixed-top" style='z-index: 0;'>
				    <div class='col-12 center'>  <img src='/storage/img/ico.png'> <b class='color'>Lv.{{ $m_users->tour_level }} </b> </div>
				    	<div class='col-12 center1'><img class='wid1' src='/storage/img/text1@3x.png'> </div>
			    </div>
			    <div class='row'>
			    	<div class='col-12 top'> <div class='text-center mt-2'> <b>個人設定 </b> </div>
			    	   <div>
			               <img src='/storage/img/line@3x.png' class='wid'>
			            </div>
			            <div class='mt-2'> <img src='/storage/img/ico-7.png'><b> ステップあたりの距離 </b> <img style='width:100%; height: 100%;' src='/storage/img/line1.png'></div>
	                       <div class='row d-flex'>
	                       		<div class='col-6'>
	                       			<b>高さ </b>
								</div>
	                       		<div class='col-6 c'>
	                       			<b> {{ number_format($m_users->height, 2, '.', ',') }} cm </b>
								</div>
	                       </div>
	                       <hr/>
	                       <div class='row d-flex'>
	                       		<div class='col-6'>
	                       			<b>性別</b>
								</div>
	                       		<div class='col-6 c'>
	                       			<b> @if($m_users->gender == 0) 男性 @else  女性 @endif</b>
								</div>
	                       </div>
	                       <hr/>
	                    	<div class='row d-flex'>
	                       		<div class='col-8'>
	                       			<b>ステップあたりの距離</b>
								</div>
	                       		<div class='col-4 c'>
	                       			<b>{{ number_format($m_users->stride, 1, '.', ',') }} cm</b>
								</div>
	                       </div>
	                       <div class='mt-4'> <img src='/storage/img/ico-7.png'><b> 1日あたりの目標 </b> <img style='width:100%; height: 100%;' src='/storage/img/line1.png'></div>
	                       		<div class='row d-flex'>
	                       			<div class='col-8'>
	                       				<b>{{ number_format($m_users->step_goal_per_day) }} ステップ</b>
									</div>
	                       			<div class='col-4 c'>
	                       				<b>{{ number_format($m_users->step_goal_per_day*$m_users->stride/100000, 2, '.', ',') }}  km</b>
									</div>
	                       		</div>
	                        	<div class='mt-4'> <img src='/storage/img/ico-7.png'><b> 1か月あたりの目標 </b> <img style='width:100%; height: 100%;' src='/storage/img/line1.png'>
								</div>
	                        	<p><b>曜日ごとの目標距離</b></p>

	                        	<div class='row d-flex'>
									<div class='col-2 mx-1'>
									<b class='ml-2'>月</b> {{ number_format($m_users->step_monday*$m_users->stride/100000, 2, '.', ',') }} km</div>
									<div class='col-2 mx-1'>
									<b class='ml-2'>火</b> {{ number_format($m_users->step_tuesday*$m_users->stride/100000, 2, '.', ',') }} km</div>
									<div class='col-2 mx-1'>
									<b class='ml-2'>水</b> {{ number_format($m_users->step_wednesday*$m_users->stride/100000, 2, '.', ',') }} km</div>
									<div class='col-2 mx-1'>
									<b class='ml-2'>木 </b> {{ number_format($m_users->step_thursday*$m_users->stride/100000, 2, '.', ',') }} km</div>
									<div class='col-2 mx-2'>
									<b class='ml-2'>金</b> {{ number_format($m_users->step_friday*$m_users->stride/100000, 2, '.', ',') }} km</div>
									<div class='col-2 mx-1'>
									<b class='ml-2'>土</b> {{ number_format($m_users->step_saturday*$m_users->stride/100000, 2, '.', ',') }} km</div>
									<div class='col-2 mx-1'>
									<b class='ml-2' style='color:brown'>日</b> {{ number_format($m_users->step_sunday*$m_users->stride/100000, 2, '.', ',') }} km</div>
	                            </div>
	                            <hr/>

	                       <div class='row d-flex'>
	                       		<div class='col-8'>
	                       		<b>1か月あたりの目標距離</b></div>
	                       		<div class='col-4 c'>
	                       			<b>{{ number_format($m_users->step_goals_per_month*$m_users->stride/100000, 2 ,'.',',') }} km</b></div>
	                       </div>
	                       <br>
	                    	<div class='mt-2'> <img src='/storage/img/ico-7.png'><b> ステップあたりの距離 </b> <img style='width:100%; height: 100%;' src='/storage/img/line1.png'></div>
	                       		<div class='row d-flex'>
	                       			<div class='col-8'>
	                       				<b>アプリのモーション表示</b></div>
	                       			<div class='col-4 c'>
	                       				<p>@if($m_users->motion_app == '1' ) はい @else 無し  @endif </p></div>
	                       		</div>
	                       		<hr/>
	                       		<div class='row d-flex'>
	                       			<div class='col-8'>
	                       				<b>Webでのモーション表示</b></div>
	                       			<div class='col-4 c'>
	                       				<p> @if($m_users->motion_web == '0' ) 無し @else はい  @endif</p></div>

	                       	 <!-- 	<div class='col-12 my-2'><img style='margin-left: 33%' class='wid1' src='img/btn@3x.png'> </div> -->
								<div class='col-12 text-center'><a href="{{ route('edit', $m_users->id) }}"><button type='submit' class="button mt-2">登録内容の変更  ></button></a></div>
								<div class='col-12 mt-4'> <img style='width:100%; height: 100%;' src='/storage/img/bg-8@2x.png'></div>
								<div class='col-12 text-center mt-4'><b>現在選択されているコース</b></div>
								<div class='col-12'>
									<img src='/storage/img/line@3x.png' class='wid'>
								</div>
	                        </div>
	                       <br/>
						    @if(! empty($t_tour))
								@if($t_tour->status == 'Done')
								<h6><div class='row' ><div class='col-7' style='color: #2b63c6;'><a href="{{ route('collectiondetails', $t_tour->m_tours->m__collections->id) }}"> {{ $t_tour->m_tours->tour_title }} </a> </div> <div class='col-4 c' style='color:grey;'>@foreach($t_tour->m_tours->checkpoints as $checkpoint) @if($checkpoint->checkpoint_category =='終了') {{ $checkpoint->distance }} km @endif @endforeach </div> </div></h6>
								<div class='mt-4'> <img style='width:100%; height: auto;' src='/storage/img/error@3x.png'></div>
								@else
								<h6><div class='row' ><div class='col-7' style='color: #2b63c6;'> {{ $t_tour->m_tours->title_abbreviation }} </div> <div class='col-4 c' style='color:grey;'>@foreach($t_tour->m_tours->checkpoints as $checkpoint) @if($checkpoint->checkpoint_category =='終了') {{ $checkpoint->distance }} km @endif @endforeach </div> </div></h6>
								<div class='col-12 text-center'> <b class='color'>{{ number_format($m_users->stride*$steps/100000, 2, '.',',') }} km /@foreach($t_tour->m_tours->checkpoints as $checkpoint) @if($checkpoint->checkpoint_category =='終了') {{ $checkpoint->distance }} km  @endif @endforeach</b></div>
								@endif
							@else
								<div class='mt-4'> <img style='width:100%; height: auto;' src='/storage/img/error.svg'></div>
							@endif
                            <div class='row'>
	                          <div class='col-12 text-center my-3'><a href="/createtour"><button class="button mt-2">コースの設定 ></button></a></div>
	                        </div>
			           </div>
			        </div>
		        </div>
		    <div class='row' style='background-color: #eef4f6; position: relative; z-index: 10;'>
				<div class='col-12'>
					<img style='width: 100%;height: auto;' src='/storage/img/bg@3x.png'>
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
        <div class="col-3 padding-0 pt-2 navItem is-active" id="box4" onclick="navItemClick(this.id);">
          <a href="/showprofiledetails">
            <img id="box4_img" class="pb-0 mb-0" src="{{asset('storage/mypage/box4_sel.png')}}" alt="">
            <p id="box4_title" class="pt-0 mt-0" style="font-size: 60%; font-weight: bold;text-align: center;color: #fddb66;">設定</p>
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
@else
	<div class='text-center'>
	<h3 class='mt-5'> ごめんなさい！このページにアクセスする権限がありません。 </h3>
	</div>
@endif
@endsection
