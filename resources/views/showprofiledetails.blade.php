@extends('layouts.app')

@section('content')
<head>
@if (session('successMsg'))
  <div class="alert alert-success" role="alert">
    {{ session('successMsg') }}
  </div>
@endif

@if (session('dangerMsg'))
  <div class="alert alert-danger" role="alert">
    {{ session('dangerMsg') }}
  </div>
@endif

@if ($errors->any())
  @foreach ($errors->all() as $error)
    <div class='alert alert-danger' role='alert'>
    {{ $error }}
    </div>
  @endforeach
@endif

<style>
	  	
	  	.wrapper1{
	  		height:15rem;
	  		font-size: 15px;
	  		background-color: #2b63c6;
	  		
	  	}
	  	div.c {
		  text-align: right;
		} 
		.wid{
			width:100%;
			height: 100%;
		}
		.color{
				color:#ffcc00;
			}

		.button {
			  background-color:#2b63c6 ;
			  border: none;
			  color: white;
			  padding: 15px 100px;
			  text-align: center;
			  text-decoration: none;
			  display: inline-block;
			  margin: 4px 2px;
			  cursor: pointer;
			  border-radius: 30px;
			}
		.center {
			  display: block;
			  margin-left: auto;
			  margin-right: auto;
			  margin-top: 6rem;
			  margin-left: 42%;

			  position: relative;
			  z-index: 1;

			  
			}
			.top{
				margin-top: 15rem;
				background-color: white;
				z-index: 9;
				color: #2b63c6;
			}

			h6 {
			  /*font-size: 26px;*/
			  /*line-height: 34px;
			  font-weight: 100;*/
			  /*letter-spacing: 1px;*/
			 /* display: block;*/
			 /* background-color: white;*/
			  padding: 10px;
			  color: #2b63c6 !important;
			  border: 1px solid #e1eaea;
			  cursor: pointer;
			  border-radius: 2px;
			 /* border-color: black;*/

			}

			
			.center1 {
				  display: block;
				  margin-top: 0rem;
				  margin-left: 30%;
				  position: relative;
				  z-index: 1;
				}
			.wid1{
                width:30%;

			}

				/* On screens that are 992px or less, set the background color to blue */
				@media screen and (max-width: 992px) {
				  .center1 {
				  display: block;
				  margin-top: -1rem;
				  margin-left: 15%;
				  position: relative;
				  z-index: 1;
				  }
				  .wid1{
                width:60%;

			}
				}

				/* On screens that are 600px or less, set the background color to olive */
				@media screen and (max-width: 600px) {
				  .center1 {
				  display: block;
				  margin-top: -2rem;
				  margin-right: 50%;
				  margin-left: 2%;
				  z-index: 1;
				  }
				    .wid1{
                width:95%;
				}
            }
				@media screen and (max-width: 450px) {
				  .center1 {
				  display: block;
				  margin-top: -3rem;
				  margin-left: 0%;
				  z-index: 1;
				  }
				  .wid1{
                width:100%;

			      }

		        }



</style>

</head>

<body style='background-color: white;'>

	    	<div class='container-fluid'>
			    <div class="row d-flex fixed-top" style="border-bottom: 1px white; z-index: 10; background-color: #2b63c6; position: fixed; top:0px; box-shadow: 5px 2px #003366;">
				   <div class='col-12 p-2' style="color:white;"><div class="ml-4" style='color: white;'>構成 </div> </div>
				  
			    </div> 

            <div>
			    <div class="row wrapper1 fixed-top" style='z-index: 0;'>	
				    <div class='col-12 center'>  <img src='/storage/img/ico.png'> <b class='color'>Lv.1 </b> </div>

				    <div class='col-12 center1'><img class='wid1' src='/storage/img/text@3x.png'> </div>
				   
				    
			    </div> 
			    <div class='row'>

			    	<div class='col-12 top'> <div class='text-center mt-2'> <b>個人設定 </b> </div>
			    	   <div>
			               <img src='/storage/img/line@3x.png' class='wid'>
			               </div>
			               <div class='mt-2'> <img src='/storage/img/ico-7.png'><b> ステップあたりの距離 </b> <img style='width:100%; height: 100%;' src='/storage/img/line1.png'></div>

	                       <div class='row d-flex'>
	                       <div class='col-6'>
	                       	<b>高さ </b></div>
	                       	<div class='col-6 c'>
	                       	<b> 175.5 cm </b></div>

	                       </div>
	                       <hr/>
	                       <div class='row d-flex'>
	                       <div class='col-6'>
	                       	<b>性別</b></div>
	                       	<div class='col-6 c'>
	                       	<b> 男性</b></div>

	                       </div>
	                       <hr/>
	                      
	                        <div class='row d-flex'>
	                       <div class='col-8'>
	                       	<b>ステップあたりの距離</b></div>
	                       	<div class='col-4 c'>
	                       	<b>65.0 cm</b></div>

	                       </div>
	                       
	                       <div class='mt-4'> <img src='/storage/img/ico-7.png'><b> 1日あたりの目標 </b> <img style='width:100%; height: 100%;' src='/storage/img/line1.png'></div>
	                       <div class='row d-flex'>
	                       <div class='col-8'>
	                       	<b>6,000 ステップ</b></div>
	                       	<div class='col-4 c'>
	                       	<b>3.6 km</b></div>

	                       </div>

	                        <div class='mt-4'> <img src='/storage/img/ico-7.png'><b> 1か月あたりの目標 </b> <img style='width:100%; height: 100%;' src='/storage/img/line1.png'></div>
	                        <p><b>曜日ごとの目標距離</b></p>

	                        <div class='row d-flex'>
		                        <div class='col-2 mx-1'>
		                       	  <b class='ml-2'>月</b> 3.6km</div>
		                       	<div class='col-2 mx-1'>
		                       	  <b class='ml-2'>火</b> 3.6km</div>
		                         <div class='col-2 mx-1'>
		                       	  <b class='ml-2'>水</b> 3.6km</div>
		                       	 <div class='col-2 mx-1'>
		                       	  <b class='ml-2'>木 </b> 3.6km</div>
		                       	 <div class='col-2 mx-2'>
		                       	  <b class='ml-2'>金</b> 3.6km</div>
		                       	 <div class='col-2 mx-1'>
		                       	  <b class='ml-2'>土</b> 3.6km</div>
		                       	 <div class='col-2 mx-1'>
		                       	  <b class='ml-2' style='color:brown'>日</b> 3.6km</div>
		                       	  
	                        </div>
	                        <hr/>
                
	                       <div class='row d-flex'>
	                       <div class='col-8'>
	                       	<b>1か月あたりの目標距離</b></div>
	                       	<div class='col-4 c'>
	                       	<b>86.4 km</b></div>
	                       </div>
	                       <br>

	                        <div class='mt-2'> <img src='/storage/img/ico-7.png'><b> ステップあたりの距離 </b> <img style='width:100%; height: 100%;' src='/storage/img/line1.png'></div>

	                       <div class='row d-flex'>
	                       <div class='col-8'>
	                       	<b>アプリのモーション表示</b></div>
	                       	<div class='col-4 c'>
	                       	<p> はい </p></div>

	                       </div>
	                       <hr/>
	                       
	                       <div class='row d-flex'>
	                       <div class='col-8'>
	                       	<b>Webでのモーション表示</b></div>
	                       	<div class='col-4 c'>
	                       	<p> 番号</p></div>

	                       <!-- 	<div class='col-12 my-2'><img style='margin-left: 33%' class='wid1' src='img/btn@3x.png'> </div> -->
                            <div class='col-12 text-center'><button class="button mt-2">登録内容の変更  ></button></div>

                            <div class='col-12 mt-4'> <img style='width:100%; height: 100%;' src='/storage/img/bg-8@2x.png'></div>

                             <div class='col-12 text-center mt-4'><b>現在選択されているツアー </b></div>
                              <div class='col-12'>
			               		<img src='/storage/img/line@3x.png' class='wid'>
			                  </div>



	                       </div>
	                       <br/>
	                        <h6><div class='row' ><div class='col-7' style='color: #2b63c6;'> Tour1 mmm </div> <div class='col-4 c' style='color:grey;'>0000 Km </div> </div></h6> 

	                        <div class='col-12 text-center'> <b class='color'>189km / 200km</b></div> 

	                         <div class='mt-4'> <img style='width:100%; height: auto;' src='/storage/img/error-1@3x.png'></div>

	                          <div class='mt-4'> <img style='width:100%; height: auto;' src='/storage/img/error@3x.png'></div>
                             <div class='row'>
	                          <div class='col-12 text-center my-3'><button class="button mt-2">登録内容の変更  ></button></div>
	                      </div>

				
			    </div>  
			</div>
		</div>
		<div class='row' style='background-color: #eef4f6; position: relative; z-index: 10;'>
				<div class='col-12'>
				<img style='width: 100%;height: auto;' src='/storage/img/bg@3x.png'>
			    </div>

		</div>
         

    	</body>
@endsection

