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
         <a href="{{ url('/mypage') }}" > <button type="button" class="btn blue mr-1 mb-1">My Page</button> </a>
        </div>
        <div class="col-xs-3">
         <a href="{{ url('/userdailyhistory') }}" >  <button type="button" class="btn blue mr-1 mb-1" onclick="changeText()" id="bt1">Daily Data</button> </a>
        </div>
        <div class="dropdown">
          <button class="btn blue dropdown-toggle mb-1" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Sort by
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
          <a href="{{ url('/reverseusermonthlyhistory') }}" >    <button class="btn blue dropdown-item mb-1" type="button">Latest</button> </a>
          <a href="{{ url('/usermonthlyhistory') }}" >   <button class="btn blue dropdown-item" type="button">Oldest</button> </a>
          </div>
        </div>
      </div>
    </div>



 <div class="table-responsive-sm mt-4 mx-sm-3">
        <table class="table table-hover" id="collections_table">
            <thead>
              <tr>
                <th scope="col">Date</th>
                <th scope="col">Steps</th>
                <th scope="col">Est. dist.(km)<br/>(Stride {{ $get_m_user_stride }} cm)</th>
                <th scope="col">Target ({{ $get_m_user_monthly_goal }}steps)</th>
              </tr>
            </thead>
            <tbody>
    @if(! empty($current_month_datas))
    @foreach($current_month_datas as $current_month_data => $steps)
    @php($total = 0)
    @foreach($steps as $step)
       @php($total += $step->steps)
    @endforeach
    <tr class="collectionsRow">
      <td style="font-size:70%">{{ date("Y-m ", strtotime($step->step_actual_datetime))  }}</td>
      <td style="font-size:70%">{{ $total }}  </td>
      <td style="font-size:70%"> {{ $total*$get_m_user_stride/100000 }} km  </td>
      <td style="font-size:70%">  @if($total > $get_m_user_monthly_goal ) * (goal {{ $get_m_user_monthly_goal }} steps)  @endif</td>
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
      if (x.innerHTML === "Monthly Data") {
        x.innerHTML = "Daily Data";
      } else {
        x.innerHTML = "Monthly Data";
      }
    }
  </script>




@endsection
