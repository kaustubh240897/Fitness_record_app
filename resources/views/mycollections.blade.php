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

     
    <div class='col-12 mt-1' style='background-color: #eef4f6; position: relative; z-index: 11; margin-top:16rem !important;'>
      <img style='width: 100%;height: auto;' src='/storage/img/bg@3x.png'>
    </div>
    
  </div>

  
@else
    <h1> まだコレクションはありません！ </h1>
  @endif

</body>

 

@endsection
