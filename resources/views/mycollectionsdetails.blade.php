@extends('layouts.app')

@section('content')
<head>

 <style>
    div.c {
		  text-align: right;
		} 

		.wrapper{
	  		height:9rem;
	  		font-size: 15px;
	  		z-index: 9;
	  		background-color: #2b63c6;	
	  	}

	  
        .hr {
		  border:none;
		  border-bottom:1px dashed #e9d0af;
		  color:black;
		  text-decoration-color: #cbaca3;
		  height:1px;
		  width:50%;
		}
	  	div.sticky {
			  position: -webkit-sticky; /* Safari */
			  position: sticky;
			  top: 0;
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
			
    /* .btn.btn-lg {
        background-color: #ccece8 !important;
        /* padding: 12px 32px !important; */
    /* }
    .collectionsRow {
      cursor: pointer;
    }
    @media only screen and (max-width: 768px) {
      .col-3 {width: 25%;}
    } 
     */

  </style>
</head>
<body>
@if(! empty($my_collections))
<div class='container-fluid'>

                    
			  		 <div class="row d-flex fixed-top" style=" z-index:0; background-color: #2b63c6; position: fixed; top:0px;">
				  		 	    
						    <div class='col-10 p-2 mx-3' style="color:white;">@if($my_collections->m_collections->collection_category == 'tour') <span class="badge badge-pill badge-warning ml-2 mr-1">ツアー</span> @else <img class='mx-2' src="/storage/img/label-1.png">  @endif{{ $my_collections->m_collections->collection_title }}  </div>
							   
					 </div>

					 <div class='c mx-2 my-2 fixed-top' style='z-index:0;'><img style='border: solid  #2b63c6;' src="{{ asset($my_collections->m_collections->path . $my_collections->m_collections->filename) }}" class= "rounded-circle" alt="Cinque Terre" width="
					 	80" height="80"> 
					 </div>

					 <div class='row fixed-top' style='position:relative;'>
					 	<div class='col-12 wrapper'>
             @if($my_collections->m_collections->collection_category == 'tour') 
					 		<p class='ml-3 mt-3 color'><img class='mr-1' src='/storage/img/complete.png'>{{ $my_collections->m_collections->m__tours->tour_title }} </p>
               <p class='color'> <span class="badge badge-pill badge-warning ml-2 mr-1">ツアー</span>  {{ $my_collections->m_collections->collection_title }} </p>
               <div class='row d-flex wrapper1'>
						 		 <div class='col p-2 ml-5'> <img class='mr-2 mb-2' src='/storage/img/ico.png'> <font style='color:#ffcc00;'>430 Km </font></div>
						 		 <div class='col p-2 c' style='color:white;'><span class="fa fa-star checked mx-1 "></span> {{ $my_collections->m_collections->updated_at->format('Y/m/d') }}  </div>
					 		</div>
            @else
            <p class='ml-3 mt-3 color'>{{ $my_collections->m_collections->m__checkpoints->tours->tour_title }} </p>
            <p class='color'> <img class='ml-3' src='/storage/img/label-1.png'> {{ $my_collections->m_collections->collection_title }} </p>
            <div class='c' style='color:white;'><span class="fa fa-star checked mx-1"></span>{{ $my_collections->m_collections->updated_at->format('Y/m/d') }} </div>
            @endif
					 	
					 		
					 	</div>



  					</div>
            @if(! empty($my_collections))
            @if($my_collections->m_collections->collection_category == 'tour') 
              <div class="container text-center" style='background-image: url("/storage/img/celebrate.png")'>
            @else
              <div class="container text-center">
            @endif
                <img class="img-fluid mx-auto" src="{{ asset($my_collections->m_collections->path . $my_collections->m_collections->filename) }}" alt="Sample">
              </div>
            @else
              <h4> 申し訳ありませんが存在しません。 </h4>
            @endif
			
	    </div>

	    <div class='container-fluid' style='background-color: #f2f2f2'>
	               <img src='/storage/img/line@3x.png' class='wid my-2'>
	              <b>  <text class='hr my-1'> @if($my_collections->m_collections->collection_category == 'tour') {{ $my_collections->m_collections->m__tours->tour_comment }} @else {{ $my_collections->m_collections->m__checkpoints->comments }}  @endif</text></b>
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
    <h4> コレクションはありません。 </h4>
  @endif
</body> 

@endsection

