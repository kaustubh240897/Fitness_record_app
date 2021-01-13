@extends('layouts.app')

@section('content')

<!-- @if (session('successMsg'))
  <div class='alert alert-success' roles='alert'>
    {{ session('successMsg') }}
  </div>
@endif -->

<head>
<link rel="stylesheet" href="/css/style_mycollections.css">
 <style media="screen">

  </style>

</head>
<body style='background-color: white;'>
  <div class='container-fluid' style="margin-top: 28px">
    <div class="row d-flex fixed-top" style="border-bottom: 1px solid white; z-index: 10; background-color: #2b63c6; position: fixed; top:28px;">
      <div class=' p-2' style="color:white;"><div class="ml-4" style='color: white;'>私のコレクション</div> </div>
        <div class='ml-auto p-2 c'>
     <!-- <button class='button mr-4' style="color:white;">ツアーで並べ替え ↑↓ </button> -->
          <div class="dropdown p-1">
            <button class="text-center dropdown-toggle" type="" style="color: white; font-size: 80%; border-radius: 12px;
              border: solid 1px #ffffff;background-color: #2b63c6;" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              ツアーで並べ替え ↑↓
            </button>
            <div class="dropdown-menu speech-bubble dropdown-menu-right" aria-labelledby="dropdownMenu2">
              <label class="radio-inline pl-2 pb-2" for="group_by_tour_radio">
                <a id="group_by_tour" href="/bytourcollection" >
                  <input id="group_by_tour_radio" class="pt-3" type="radio" name="optradio" onclick="location.href='/bytourcollection'">
                  <span id="sort_newest_span" class="not_selected_sort pl-2 pb-2" style="font-size: 100%">実績の新しい順</span>
                </a>
              </label>
              <label class="radio-inline pl-2 pb-2" for="sort_oldest_radio">
                <a id="sort_oldest" href="/mycollection">
                  <input id="sort_oldest_radio" class="pt-3" type="radio" name="optradio" onclick="location.href='/mycollection'">
                  <span id="sort_oldest_span" class="not_selected_sort pl-2 pb-1" style="font-size: 100%">実績の古い順</span>
                </a>
              </label>
              <label class="radio-inline pl-2 pb-2" for="sort_newest_radio">
                <a id="sort_newest" href="/reversemycollection">
                  <input id="sort_newest_radio" class="pt-3" type="radio" name="optradio" onclick="location.href='/reversemycollection'">
                  <span id="sort_oldest_span" class="not_selected_sort pl-2 pb-1" style="font-size: 100%">実績の古い順</span>
                </a>
              </label>
            </div>
          </div>
        </div>
      </div>

      <div class="row wrapper1 fixed-top" style='z-index: 0;'>
        <div class='col-12'><img class='center' src='/storage/img/star_mycol.png'> </div>
      </div>

    @if(! empty($get_t_collections))
      <div class='row py-2' style='margin-top:15rem; z-index: 9; position: relative; background-color: white; padding-bottom: 0%;'>
        @foreach($get_t_collections as $get_t_collection)
          @if($get_t_collection->new_display_flag == 0)
            <div class='col-4 circle'>
              <span class="badge badge-pill badge-warning">New</span>
                <span> <img style='border: solid  #ffcc00;' src="{{ asset($get_t_collection->m_collections->path . $get_t_collection->m_collections->filename) }}" class="rounded-circle" alt="Cinque Terre" width="80" height="80"> </span>
            </div>
          @else
            <div class='col-4'>
              <img src="{{ asset($get_t_collection->m_collections->path . $get_t_collection->m_collections->filename) }}"  class=" rounded-circle" alt="Img" width="80" height="80">
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
  function navItemClick(id) {
    console.log(id);
  }
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
      url = "http://3.114.126.114/reversemycollection";
      document.location=url;
    } else if (id == "sort_oldest") {
      url = "http://3.114.126.114/mycollection";
      document.location=url;
    } else {
      url = "http://3.114.126.114/bytourcollection";
      document.location=url;
    }
  }
  </script>
  </script>

  <script type="text/javascript">
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
