@extends('layouts.app')

@section('content')


<style media="screen">
    .btn.blue {
      background-color: #ccece8 !important;
      /* padding: 12px 32px !important; */
    }
    .dropdown-menu.blue {
      background-color: #ccece8 !important;
    }
    @media only screen and (max-width: 768px) {
      #monthinput {
        max-width: 25%;

      }
      #yearinput {
        max-width: 35%;
      }
      #dayinput{
        max-width: 25%;
      }
    }
    @media only screen and (min-width: 768px) {
      #monthinput {
        max-width: 10%;

      }
      #yearinput {
        max-width: 20%;
      }
      #dayinput {
        max-width:10%;
      }
    }
    </style>



<div class="container-fluid">
      <div class="row justify-content-around">
        <div class="col-xs-3">
         <a href="{{ url('/mypage') }}" > <button type="button" class="btn blue mr-1">マイページへ戻る</button> </a>
        </div>
        <div class="col-xs-3">
         <a href="{{ url('/usermonthlyhistory') }}" >  <button type="button" class="btn blue mr-1" onclick="changeText()" id="bt1">月別</button> </a>
        </div>
        <div class="dropdown">
          <button class="btn blue dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            成果の順序
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
          <a href="{{ url('/reverseuserdailyhistory') }}" >    <button class="btn blue dropdown-item mb-1" type="button">最新</button> </a>
          <a href="{{ url('/userdailyhistory') }}" >   <button class="btn blue dropdown-item" type="button">年代順</button> </a>
          </div>
        </div>
      </div>
    </div>

     <div class="container-fluid mt-2 mb-2 pb-4">
        <div class="row float-right">
          <div class="col float-right mx-0">
          <form action='/search' method="get">
            <div class="input-group mx-0">

              <input type="number" name='year' placeholder='yyyy' required='true' class="form-control mx-0" min="2020" id="yearinput">
              <input type="number" name='day' placeholder='dd' required='true' class="form-control mx-0" min="1" max='31' id="dayinput">
              <input type="number" name='month' placeholder='mm' required='true' class="form-control mx-0" min="1" max="12" id="monthinput">
              <span class='input-group-prepend'>
                   <button type='submit' class='btn btn-primary'> Search
                   </button>
                </span>
            </div>
          </form>
          </div>
        </div>
    </div>

 <div class="table-responsive-sm mt-4 mx-sm-3">
        <table class="table table-hover" id="collections_table">
            <thead>
              <tr>
                <th scope="col">実績年月日</th>
                <th scope="col">歩数</th>
                <th scope="col">距離換算<br/>(1歩あたり{{ $get_m_user_stride }} cm)</th>
                <th scope="col">日目標達成 ({{ $get_m_user_daily_goal }}歩)</th>
              </tr>
            </thead>
            <tbody>
    @if(! empty($current_week_datas))
    @foreach($current_week_datas as $current_week_data => $steps)
    @php($total = 0)
    @foreach($steps as $step)
       @php($total += $step->steps)
    @endforeach
    <tr class="collectionsRow">
      <td style="font-size:70%">{{ date("Y-m-d ", strtotime($step->step_actual_datetime))  }}</td>
      <td style="font-size:70%">{{ $total }}  </td>
      <td style="font-size:70%"> {{ $total*$get_m_user_stride/100000 }} km  </td>
      <td style="font-size:70%">  @if($total > $get_m_user_daily_goal ) * (goal {{ $get_m_user_daily_goal }} steps)  @endif</td>
    </tr>
    @endforeach
    @else
    <h4> Sorry you don't have history till now! </h4>
    @endif
  </tbody>
</table>
</div>
  <script type="text/javascript">
    function changeText() {
      var x = document.getElementById("bt1");
      if (x.innerHTML === "月別") {
        x.innerHTML = "毎日";
      } else {
        x.innerHTML = "月別";
      }
    }
  </script>


@endsection
