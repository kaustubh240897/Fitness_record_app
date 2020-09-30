@extends('layouts.app')

@section('content')
<div class='container'>

<h1> Your data on {{ $search }}</h1>

{{ $search }} {{ $search_data }}  {{ $search_data*$get_m_user_stride/100000 }}(km)  @if($search_data > $get_m_user_daily_goal ) * (goal {{ $get_m_user_daily_goal }} steps daily)  @endif



</div>


@endsection