@extends('layouts.app')

@section('content')
<div class='container'>
@if (session('successMsg'))
<div class='alert alert-success' roles='alert'>
 {{ session('successMsg') }}
</div>
@endif




<br/>

@foreach($get_t_collections as $get_t_collection)
@if($get_t_collection->m_collections->collection_category == 'tour')
{{ $loop->iteration }}.   {{ $get_t_collection->created_at }} 
  
  *{{ $get_t_collection->m_collections->collection_category }}  @foreach($get_t_collection->m_collections->m__tours as $m_tour) <b> {{ $m_tour->tour_title }}</b> {{ $counter[$loop->iteration-1] }} @endforeach
@else
  {{ $loop->iteration }}.   {{ $get_t_collection->created_at }} 
  
  {{ $get_t_collection->m_collections->collection_category }} 
  @foreach($get_t_collection->m_collections->m__checkpoints as $m_checkpoint)
  <b> {{ $m_checkpoint->checkpoint_title }}</b> {{ $counter[$loop->parent->iteration-1] }}
  @endforeach
@endif
  <br/>
@endforeach





@endsection