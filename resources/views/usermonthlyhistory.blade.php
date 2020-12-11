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

  </style>



<div class="container-fluid">
      <div class="row justify-content-around">
        <div class="col-xs-3">
         <a href="{{ url('/mypage') }}" > <button type="button" class="btn blue mr-1 mb-1">マイページへ戻る</button> </a>
        </div>
        <div class="col-xs-3">
         <a href="{{ route('userhistory', [now()->year,now()->month]) }}" >  <button type="button" class="btn blue mr-1 mb-1" onclick="changeText()" id="bt1">日別</button> </a>
        </div>
        <div class="dropdown">
          <button class="btn blue dropdown-toggle mb-1" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            成果の順序
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
          <a href="{{ url('/reverseusermonthlyhistory', [now()->year]) }}" >    <button class="btn blue dropdown-item mb-1" type="button">最新</button> </a>
          <a href="{{ route('usermonthlyhistory', [now()->year]) }}" >   <button class="btn blue dropdown-item" type="button">年代順</button> </a>
          </div>
        </div>
      </div>
    </div>

  
    @if(! empty($months))
    @foreach($months as $month => $steps)
    @php($total = 0)
    @foreach($steps as $step)
       @php($total += $step->steps)
    @endforeach
    <tr class="collectionsRow">
      <td style="font-size:70%">{{ date("Y-m-d ", strtotime($step->step_actual_datetime))  }} ({{ date("l", strtotime($step->step_actual_datetime))  }})</td>
      <td style="font-size:70%">{{ $total }} steps ( {{ $total*$get_m_user_stride/100000 }} km ) </td>
      <td style="font-size:70%">  @if($total > $get_m_user_monthly_goal ) Completed (goal {{ $get_m_user_monthly_goal }} steps) @else Incomplete(goal {{ $get_m_user_monthly_goal }} steps)  @endif </td>
      @php($perct =  $total/$get_m_user_monthly_goal *100)
      {{ $perct }} %
    </tr>
    <br>
    @endforeach
    @else
    <h4> 申し訳ありませんが、今まで歴史がありません！ </h4>
    @endif

 
  <script type="text/javascript">
    function changeText() {
      var x = document.getElementById("bt1");
      if (x.innerHTML === "Monthly Data") {
        x.innerHTML = "Daily Data";
      } else {
        x.innerHTML = "Monthly Data";
      }
    }
  </script>

@endsection
