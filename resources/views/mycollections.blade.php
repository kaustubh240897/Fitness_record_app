@extends('layouts.app')

@section('content')

@if (session('successMsg'))
  <div class='alert alert-success' roles='alert'>
    {{ session('successMsg') }}
  </div>
@endif

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
			  margin-top: 4rem;

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

  </style>

</head>
<body style='background-color: white;'>

<div class='container-fluid' >
  <div class="row d-flex fixed-top" style="border-bottom: 1px solid white; z-index: 10; background-color: #2b63c6; position: fixed; top:0px;">
   <div class=' p-2' style="color:white;"><div class="ml-4" style='color: white;'>私のコレクション</div> </div>
   <div class='ml-auto p-2 c'>  <button class='button mr-4' style="color:white;">ツアーで並べ替え ↑↓ </button></div>

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
         <span> <img style='border: solid  #ffcc00'; src="{{ asset($get_t_collection->m_collections->path . $get_t_collection->m_collections->filename) }}" class="rounded-circle" alt="Cinque Terre" width="80" height="80"> </span>
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
    <div class="d-flex flex-row" style="position: absolute; bottom: 0; left: 0; background-color: #eef4f6;">
      <img class="w-100" src='/storage/img/bg@3x.png'>
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
</body>



@endsection
