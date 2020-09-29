@extends('layouts.app')

@section('content')
<div class='container'>
<h1> Your collections </h1>
@if(! empty($my_collections))
Collection Title -:
{{ $my_collections->m_collections->collection_title }} 
<br/>
Collection Type-:
{{ $my_collections->m_collections->collection_category }}
<br/>
Collection earned date -:
{{ $my_collections->created_at }}

@else
<h1>Sorry! No collection exists!</h1>
@endif
</div>
@endsection