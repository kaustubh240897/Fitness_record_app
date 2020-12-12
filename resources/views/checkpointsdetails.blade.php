@extends('layouts.app')

@section('content')
<head>
@if (session('successMsg'))
  <div class='alert alert-success' roles='alert'>
    {{ session('successMsg') }}
  </div>
@endif
<style>

		div.c {
		  text-align: right;
		} 

		.wrapper{
	  		height:8rem;
	  		font-size: 15px;
	  		z-index: 9;
	  		background-color: #2b63c6;	
	  	}
	  	div.sticky {
			  position: -webkit-sticky; /* Safari */
			  position: sticky;
			  top: 0;
			}
		.hr {
		  border:none;
		  border-bottom:1px dashed #e9d0af;
		  color:black;
		  text-decoration-color: #f5e9dd;
		  height:1px;
		  width:50%;
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
			
	  	
	</style>
</head>

<body>
@if(! empty($my_checkpoint))
  		<div class='container-fluid'>

                    
		   <div class="row d-flex fixed-top" style=" z-index:0; background-color: #2b63c6; position: fixed; top:0px;">
				  		 	    
				<div class='col-10 p-2 mx-3' style="color:white;"><img class='mx-2' src='/storage/img/label-1.png'>{{ $my_checkpoint->m_collections->collection_title }} </div>
							   
			</div>

					 

			<div class='row fixed-top' style='position: relative;'>
				<div class='col-12 wrapper'>
					<p class='ml-3 mt-3 color'>{{ $my_checkpoint->tours->tour_title }} </p>
					<p class='color'> <img class='ml-3' src='/storage/img/label-1.png'> {{ $my_checkpoint->m_collections->collection_title }} </p>
					 		
			    </div>
            </div>

	    </div>
	    
	    <div>
		    <img style='z-index: -1;' src='/storage/img/img@3x.png' class='wid'>
		</div>
				
			

	    <div class='container-fluid' style='background-color: #f2f2f2'>
	        <img src='/storage/img/line@3x.png' class='wid my-2'>
	        <b>  <text class='hr my-1'>{{ $my_checkpoint->comments }} </text></b>
	        <img src='/storage/img/lineDown.png' class='wid mt-2'>

	        <div class='col-12 my-2' style='color: #2b63c6;'>
                <h6> A relaxing trip to herokiku mountains.</h6>
                0km
	        </div>

		    <div class='row mt-2' style='background-color: #eef4f6;'>
		    	<br>
		    	<br>
				<div class='col-12'>
				<img class='wid' src='/storage/img/bg@3x.png'>
			    </div>
			</div>
		</div>
		
@else
    <h4> チェックポイントはありません。 </h4>
@endif
</body>
@endsection

 