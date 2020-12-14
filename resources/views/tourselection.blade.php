@extends('layouts.app')

@section('content')

@if (session('successMsg'))
<div class='alert alert-success' style='margin-top:5rem;' roles='alert'>
 {{ session('successMsg') }}
</div>
@endif


<style media="screen">
    
    .text-color{
	  		color: #2b63c6;
	  	}
	  	.top{
	  		margin-top: 5rem;
	  	}
	  	.wid{
			width:100%;
			height: 100%;
		}
		i.fa{

			font-size: 1.5rem;
			color: #2b63c6;
		
		}
		div.c {
		  text-align: right;
		  color: grey;
		} 
		.color{
				color:#ffcc00;
			}
		.border{
			border: solid 1px grey ;
		}
</style>
 

  <body style='background-color:#fffdfa;'>
  		<div class='container-fluid'>
			    <div class="row d-flex fixed-top" style="border-bottom: 1px white; z-index: 10; background-color: #2b63c6; position: fixed; top:0px; box-shadow: 5px 2px white;">
			    	 
				   <div class='col-12 p-2' style="color:white;"><div class="ml-4" style='color: white;'>設定 &nbsp <i style='color:white !important;' class="fa fa-angle-right"></i> &nbsp ツアーの変更 </div>
				    </div>
				  
			    </div> 

   

			    <div class='row'>

			    	<div class='col-12 text-center text-color top'><h5><b>現在選択されているツアー</b></h5></div>
			    </div>
			    <div>
			        <img src='/storage/img/line@3x.png' class='wid'>
			    </div>

			    <div class='container mt-4'>
          
        @if(! empty($current_tour))
					@if($current_tour->status == 'Done')                
			    	<div class='row border py-2'>
			    		
			    		<div class='col-1'><img class='mr-1' src='/storage/img/complete.png'></div><div class='col-5 mx-1' style='color: #2b63c6;'>{{ $current_tour->m_tours->tour_title }} </div><div class='col-5 c' style='color:grey;'>{{ $total }} Km &nbsp <i class="fa fa-angle-right" aria-hidden="true"></i> </div>
			    	</div>
            <div class='mt-4'> <img style='width:100%; height: auto;' src='/storage/img/error@3x.png'></div>	
			    	
			    @else
          <div class='row border py-2'>	
          <div class='col-5' style='color: #2b63c6;'>{{ $current_tour->m_tours->tour_title }} </div><div class='col-6 c' style='color:grey;'>{{ $total }}Km &nbsp <i class="fa fa-angle-right" aria-hidden="true"></i> </div>
          </div>
          <div class='col-12 text-center mt-4'> <b class='color'>{{ $steps * $get_m_user_stride/100000 }}km/{{ $total }}km</b></div> 
          @endif
        @else
        <div class='mt-4'> <img style='width:100%; height: auto;' src='/storage/img/error-1@3x.png'></div>
        @endif



			    	<div class='row'>

			    	<div class='col-12 text-center text-color mt-5'><h5><b>選択可能なツアー</b></h5></div>
			        </div>
			    </div>
			    <div>
			        <img src='/storage/img/line@3x.png' class='wid'>
			    </div>
			    <div class='container mt-4'>
            @foreach($tours as $tour)
            <a href="{{ route('tourdetails', $tour->id) }}" style="text-decoration: none;">
              <div class='row border py-2'>
                
                @foreach($all_t_Tours as $all_t_Tour) @if($tour->id == $all_t_Tour->m__tours_id)  @if($all_t_Tour->status == 'Done') <div class='col-1'> <img class='mr-1' src='/storage/img/complete.png'> </div> @break @else @continue  @endif @endif @endforeach<div class='col-5 mx-1' style='color: #2b63c6;'>{{ $tour->tour_title }}</div> <div class='col-5 c' style='color:grey;'>@if(! empty($tour->checkpoints)) @foreach($tour->checkpoints as $checkpoint) @if($checkpoint->checkpoint_category == 'endpoint')  {{ $checkpoint->distance }}Km @endif  @endforeach @else 0Km @endif  &nbsp <i class="fa fa-angle-right" aria-hidden="true"></i> </div>
                
              </div>
            </a>
              <br>
            @endforeach
			    
			    </div>
			    
			    <div class='mt-5 text-center'>
			        <img src='/storage/img/tour-change.png' style='width:55%;'>
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
			   <div class='row mt-4' style='background-color: #eef4f6; position: relative; z-index: 11;'>
				<div class='col-12 mt-3'>
				<img style='width: 100%;height: auto;' src='/storage/img/bg@3x.png'>
			    </div>
			</div>
		</div>
  	</body>


@endsection