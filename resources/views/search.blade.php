@extends('layouts.app')

@section('content')


<div class="table-responsive-sm mt-4 mx-sm-3">
     @if(! empty($search_data)) 
        <table class="table table-hover" id="collections_table">
            <thead>
              <tr>
                <th scope="col">Date</th>
                <th scope="col">Steps</th>
                <th scope="col">Est. dist.(km)<br/>(Stride {{ $get_m_user_stride }} cm)</th>
                <th scope="col">Target ({{ $get_m_user_daily_goal }}steps)</th>
              </tr>
            </thead>
            <tbody>
   
   
    <tr class="collectionsRow">
      <td style="font-size:70%">{{ $search }}</td>
      <td style="font-size:70%">{{ $search_data }}  </td>
      <td style="font-size:70%"> {{ $search_data*$get_m_user_stride/100000 }} km  </td>
      <td style="font-size:70%">  @if($search_data > $get_m_user_daily_goal ) * (goal {{ $get_m_user_daily_goal }} steps)  @endif</td>
    </tr>
  </tbody>
</table>
@else
    <h4> Oops You have no data on this date! </h4>
@endif
</div>


@endsection