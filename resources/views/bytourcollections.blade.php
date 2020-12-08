@extends('layouts.app')

@section('content')
<head>
@if (session('successMsg'))
  <div class='alert alert-success' roles='alert'>
    {{ session('successMsg') }}
  </div>
@endif
<style>

	  	.wrapper{
	  		height:50px;
	  		font-size: 15px;
	  		background-color: #2b63c6;
	  		position: fixed !important;
	  		 border-bottom: 1px solid white;
			 /* border-bottom-color: white;*/
			  box-shadow: 5px white !important;
		  		
	  	}
		  .container-fluid {
			padding-right:1px;
			padding-left:1px;
			margin-right:0px;
			margin-left:0px;
		}
		.row
		{
		margin-right: -1px;
		margin-left: -1px;
		}
	  	.wrapper1{
	  		height:13rem;
	  		font-size: 15px;
	  		background-color: #2b63c6;
	  		
	  	}
	  	.top{
				margin-top: 8rem;
				margin-left: 0rem;
				background-color: #fffdfa !important;
				z-index: 9;
				
			}
	  
	  	.shadow {
		  border-bottom: 1px solid ;
		 /* border-bottom-color: white;*/
		  box-shadow: 5px white !important;
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
		
		
		*,
		*::after,
		*::before {
		padding: 0;
		margin: 0;
		box-sizing: border-box;
		list-style: none;
		list-style-type: none;
		text-decoration: none;
		text-rendering: optimizeLegibility;
		}

		div.sticky {
				position: -webkit-sticky; /* Safari */
				position: sticky;
				top: 0;
			}
			.checked {
				color: #ffcc00;
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
			.color{
				background-color:white !important;
			}
					

		body {
		font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
		font-size: 1rem;
		font-weight: normal;
		line-height: 1.5;
		color: #454545;
		background: #fffdfa;
		z-index:9;
		position: relative;
		}
		div.c {
			text-align: right;
			} 



		.main .accordion {
		max-width: 100%;
		height: auto;
		/* margin: 0 auto; */
		/* padding: 4rem 0 2rem 0; */
		margin-top: 13rem;
		}
		.main .accordion-item {
		/* padding: 0.5rem 0; */
		margin: 0;
		overflow: hidden;
		border: none;
		outline: none;
		border: 1.3px solid #d4d4d4;
		}
		.main .accordion-item .title {
		display: -webkit-box;
		display: flex;
		-webkit-box-pack: justify;
				justify-content: space-between;
		-webkit-box-align: center;
				align-items: center;
		font-family: inherit;
		font-size: 1rem;
		font-weight: 600;
		line-height: inherit;
		cursor: pointer;
		color: #454545;
		}
		.main .accordion-item .title i.fas {
		font-size: 0.9rem;
		color: #454545;
		-webkit-transform: translateX(-50%) rotate(0);
				transform: translateX(-50%) rotate(0);
		-webkit-transition: -webkit-transform 0.15s ease;
		transition: -webkit-transform 0.15s ease;
		transition: transform 0.15s ease;
		transition: transform 0.15s ease, -webkit-transform 0.15s ease;
		}
		.main .accordion-item .paragraph {
		font-family: inherit;
		font-size: 1rem;
		background-color:white !important;
		font-weight: normal;
		line-height: inherit;
		color: #454545;
		display: none;
		padding: 1rem 0;
		/* border: solid grey 1px; */
		}
		.main .accordion-item.active .title i.fas {
		color: #1a9de1;
		-webkit-transform: translateX(-50%) rotate(180deg);
				transform: translateX(-50%) rotate(180deg);
		}
		.main .accordion-item.active .paragraph {
		display: block;
		}


		@media only screen and (max-width: 768px) {
		.main .accordion {
			/* max-width: 100%; */
			height: auto;
			/* margin: 0 auto; */
			margin-top: 13rem;
		}
		}

				

						
	</style>
</head>
@if(! empty($get_t_collections))
	<body>
	<div class='container-fluid'>
		<div class="row d-flex fixed-top" style="border-bottom: 1px solid white; z-index: 10; background-color: #2b63c6; position: fixed; top:0px;">
			<div class='col-5 p-2' style="color:white;"><div class="ml-3" style='color: white;'>私のコレクション</div> </div>
			<div class='col-7 p-2 c'>  <button class='button mr-4' style="color:white;">ツアーで並べ替え ↑↓ </button></div>

	    </div> 

				
		<div class="row wrapper1 fixed-top" style='z-index: 0;'>	

			<div class='col-12'><img class='center' src='storage/img/star_mycol.png'> </div>
	    </div> 
				


	<!-- partial:index.partial.html -->

	<div class='row'>
		<div class='col-12'>

		<main class="main" >

			<div  style='background-color:#fffdfa;'>  
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
				<div class="accordion-item" style='background-color:white !important; z-index:9; position:relative;'> <h3 class="title" style=' margin-bottom: 1rem; padding: 0.5rem 0rem 0rem 0.5rem;  '><div> 
					
				@endif 
				@endforeach
				
				
					@if($tour_status[$loop->iteration-1] == 'Done' ) <img src='storage/img/complete.png'>  @endif<span style='color:#2b63c6;'>@if($tour_status[$loop->iteration-1] == 'Done' )<a href="{{ route('collectiondetails', $tour->m__collections->id) }}">{{ $tour->tour_title }} </a> @else {{ $tour->tour_title }}  @endif </span></div>
					<div class='c col-5' style='color:grey;'>{{ $tours_distance[$loop->iteration-1] }} km &nbsp <i class="fas fa-chevron-down"></i></div>
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
					<div class='col-6'> <img src='storage/img/label-1.png'><br><a href="{{ route('collectiondetails', $checkpoint->m_collections->id) }}">{{ $checkpoint->checkpoint_title }}  </a></div> 
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
			</div>


	</main>

	</div>
    </div>

	<!-- partial -->
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

	</body>
@else
	<div style='margin-top:10rem; z-index:10;'>
		<h1 style='color:black !important;'> まだコレクションはありません！ </h1>
	</div>
@endif 
@endsection
