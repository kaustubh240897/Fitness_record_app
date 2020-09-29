@extends('layouts.app')

@section('content')
<div class='container'>
@if (session('successMsg'))
<div class='alert alert-success' roles='alert'>
 {{ session('successMsg') }}
</div>
@endif

<br/>
@if($get_t_collections->count() !=0)
    @foreach($get_t_collections as $get_t_collection)
    @if($get_t_collection->m_collections->collection_category == 'tour')
    {{ $loop->iteration }}.     <b> <a href="{{ route('collectiondetails', $get_t_collection->m_collections->id) }}">{{ $get_t_collection->m_collections->collection_title }} </a> </b>   {{ $get_t_collection->created_at }} 
      
      *{{ $get_t_collection->m_collections->collection_category }}   <b> {{ $get_t_collection->m_collections->m__tours->tour_title }} </b>   {{ $counter[$loop->iteration-1] }} times completed.
    @else
      {{ $loop->iteration }}.   <b><a href="{{ route('collectiondetails', $get_t_collection->m_collections->id) }}"> {{ $get_t_collection->m_collections->collection_title }} </a> </b> {{ $get_t_collection->created_at }} 
      
      {{ $get_t_collection->m_collections->collection_category }} 
     
      <b> {{ $get_t_collection->m_collections->m__checkpoints->checkpoint_title }}</b> {{ $counter[$loop->iteration-1] }} times completed.
     
    @endif
      <br/>
    @endforeach

@else
<h1> you don't have any collections yet! </h1>
@endif



@endsection