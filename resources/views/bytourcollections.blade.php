@extends('layouts.app')



@section('content')
<head>
<!-- @if (session('successMsg'))
  <div class='alert alert-success' roles='alert'>
    {{ session('successMsg') }}
  </div>
@endif -->
<link rel="stylesheet" href="/css/style_bytourcollections.css">
<style>
</style>
</head>

	<body>
		<div class='container-fluid'>
			<div class="row d-flex fixed-top justify-content-between" style="border-bottom: 1px solid white; z-index: 10; background-color: #2b63c6; position: fixed; top:28px;">
				<div class=' p-2' style="color:white;">
					<div class="" style='color: white;'>私のコレクション</div>
				</div>
				<div class='   p-1 '>
        <!-- <button class='button mr-1' style="color:white;">ツアーで並べ替え ↑↓ </button> -->
					<div class="dropdown p-1 ">
						<button class="text-center dropdown-toggle" type="" style="outline: none; width: 150px; height: 22px; color: white; font-size: 80%; border-radius: 12px;
							border: solid 1px #ffffff;background-color: #2b63c6;" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							並べ替え　コース ↑↓
						</button>
						<div class="dropdown-menu speech-bubble dropdown-menu-right" aria-labelledby="dropdownMenu2">
							<label class="radio-inline pl-2 pb-2" for="group_by_tour_radio">
								<a id="group_by_tour" href="/bytourcollection" >
									<input id="group_by_tour_radio" class="pt-3" type="radio" name="optradio" onclick="location.href='/bytourcollection'">
									<span id="sort_newest_span" class="not_selected_sort pl-2 pb-2" style="font-size: 100%">コース別</span>
								</a>
							</label>
							<label class="radio-inline pl-2 pb-2" for="sort_oldest_radio">
								<a id="sort_oldest" href="/mycollection">
									<input id="sort_oldest_radio" class="pt-3" type="radio" name="optradio" onclick="location.href='/mycollection'">
									<span id="sort_oldest_span" class="not_selected_sort pl-2 pb-1" style="font-size: 100%">取得の新しい順</span>
								</a>
							</label>
							<label class="radio-inline pl-2 pb-2" for="sort_newest_radio">
								<a id="sort_newest" href="/reversemycollection">
									<input id="sort_newest_radio" class="pt-3" type="radio" name="optradio" onclick="location.href='/reversemycollection'">
									<span id="sort_oldest_span" class="not_selected_sort pl-2 pb-1" style="font-size: 100%">取得の古い順	</span>
								</a>
							</label>
						</div>
					</div>
     		</div>

	    </div>


		<div class="row wrapper1 fixed-top" style='z-index: 0;'>
        	<div class='col-12'><img class='center' src='storage/img/star_mycol.png'> </div>
	    </div>

@if(! empty($get_t_collections->count()))
	<div class='row'>
		<div class='col-12'>
			<main class="main row-full" >
			<div  style='background-color:#fffdfa; padding-bottom:16rem;'>
			<div class="accordion" >
				@foreach($tours as $tour)
					@foreach($tour->checkpoints as $checkpoint)
						@if(in_array($checkpoint->id, $unseen_checkpoint_array))
							<div class="accordion-item" style='background-color:white !important; z-index:9; position:relative; background-color: #ffffcc !important; border: 1px solid #e6e600;'>  <h3 class="title" style=' margin-bottom: 1rem; padding: 0.5rem 0rem 0rem 0.5rem;  '><div>
								<img src='storage/img/point.png'>
									@php
										break;
									@endphp
						@elseif($loop->iteration == $tour->checkpoints->count())
							<div class="accordion-item" style='background-color:white !important; z-index:9; position:relative;'>
								<h3 class="title" style=' margin-bottom: 1rem; padding: 0.5rem 0rem 0rem 0.5rem;'>
								<div>

						@endif
					@endforeach
							@if($tour_status[$loop->iteration-1] == 'Done' ) <img src='storage/img/complete.png'>  @endif<span style='color:#2b63c6;'>@if($tour_status[$loop->iteration-1] == 'Done' )<a href="{{ route('collectiondetails', $tour->m__collections->id) }}">{{ $tour->tour_title }} </a> @else {{ $tour->tour_title }}  @endif </span></div>
								<div class='c col-5' style='color:grey;'>{{ $tours_distance[$loop->iteration-1] }} km &nbsp <i style='color:#2b63c6' class="fas fa-chevron-down"></i></div>
								</h3>

							@foreach($tour->checkpoints as $checkpoint)
								@if( $counter[$checkpoint->m__collection_id] >0)
									<div class='paragraph'>
										<div class='row'>
											@if(in_array($checkpoint->id, $unseen_checkpoint_array))
												<div class='col-4 circle'> <span class="badge badge-pill badge-warning">New</span> <span> <a href="{{ route('collectiondetails', $checkpoint->m_collections->id) }}"><img style='border: solid  #ffcc00;' src="{{ asset($checkpoint->m_collections->path . $checkpoint->m_collections->filename) }}" class="rounded-circle" alt="image" width="80" height="80"></a> </span> </div>
											@else
												<div class='col-4 circle'><span> <a href="{{ route('collectiondetails', $checkpoint->m_collections->id) }}"> <img src="{{ asset($checkpoint->m_collections->path . $checkpoint->m_collections->filename) }}" class="rounded-circle" alt="image" width="80" height="80"> </a> </span> </div>
											@endif
												<div class='col-6'> <img src='storage/img/label-1.png'><br><a href="{{ route('collectiondetails', $checkpoint->m_collections->id) }}">{{ $checkpoint->m_collections->collection_title }}  </a></div>
													<div class='col-4'> </div>
														<div class='col-8 c checked'> @if($counter[$checkpoint->m__collection_id] >5)+@endif @for($i=0; $i<$counter[$checkpoint->m__collection_id]; $i++) @if($i <=5)<img src='storage/img/star.png'>@endif @endfor<font style='color:#cbaca3;'> {{ $latest_date[$checkpoint->m__collection_id] }} </font>
														</div>
												</div>
											</div>

								@endif
							@endforeach
						</div>
							<br>
				@endforeach
				</div>


			</div>
			<div class='row' style='background-color: #eef4f6; position: relative; z-index: 10;'>
					<div class='col-12'>
						<img style='width: 100%; height: auto;' src='/storage/img/bg@3x.png'>
					</div>

			</div>
		</div>
		</main>

	</div>
    </div>
@else
	<div class='text-center' style='margin-top:15rem; z-index:10;'>
		<h1 style='color:black !important;'> まだコレクションはありません！ </h1>
	</div>
@endif

		<script>
			const accordionItem = document.querySelectorAll(".accordion-item");
			accordionItem.forEach((el) =>
			el.addEventListener("click", () => {
				if (el.classList.contains("active")) {
				el.classList.remove("active");
				} else {
				accordionItem.forEach((el2) => el2.classList.remove("active"));
				el.classList.add("active");
				}
			})
			);
		</script>

	<script type="text/javascript">
	console.log("index", {{$index}});
  if ({{$index}} == 0) {
		document.getElementById("group_by_tour_radio").checked = true;
    document.getElementById("dropdownMenu2").innerHTML = "並べ替え　コース ↑↓";
	} else if ({{$index}} == 1) {
		document.getElementById("sort_oldest_radio").checked = true;
    document.getElementById("dropdownMenu2").innerHTML = "並べ替え　新着順 ↑↓";
	} else if ({{$index}} == 2) {
		document.getElementById("sort_newest_radio").checked = true;
    document.getElementById("dropdownMenu2").innerHTML = "並べ替え　取得順 ↑↓";
	}
	</script>
</body>

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
@endsection
