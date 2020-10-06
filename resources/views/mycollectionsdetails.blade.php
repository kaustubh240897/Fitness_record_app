@extends('layouts.app')

@section('content')
<!-- <div class='container'>
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

<img src="{{ asset($my_collections->m_collections->path . $my_collections->m_collections->filename) }}" alt="Image" >
@else
<h1>Sorry! No collection exists!</h1>
@endif
</div>
 -->






 <style media="screen">
    .btn.btn-lg {
        background-color: #ccece8 !important;
        /* padding: 12px 32px !important; */
    }
    .collectionsRow {
      cursor: pointer;
    }
    @media only screen and (max-width: 768px) {
      .col-3 {width: 25%;}
    }
    </style>


 <div class="container-fluid mt-1">
     <a href="{{ url('/mypage') }}" >  <button type="button" class="btn btn-lg">My Page</button> </a>
    </div>
    <div class="table-responsive-sm mt-4">
    <table class="table table-hover" id="collections_table">
        <thead>
          <tr>
            <th scope="col">Type</th>
            <th scope="col">Name</th>
            <th scope="col">Earned Date</th>
            <th scope="col">Count</th>
          </tr>
        </thead>
        @if(! empty($my_collections))
        <tbody>
          <tr class="collectionsRow">
            <td style="font-size:70%">{{ $my_collections->m_collections->collection_category }}</td>
            <td style="font-size:70%">{{ $my_collections->m_collections->collection_title }} </td>
            <td style="font-size:70%">{{ $my_collections->created_at }}</td>
            <td style="font-size:70%">{{ $count }}*</td>
          </tr>
        </tbody>
        @else
        <h4>Sorry! No collection exists!</h4>
        @endif
    </table>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-3">
        <p style="font-size:70%">Comments:-</p>
      </div>
      <div class="col-9">
      @if(! empty($my_collections->m_collections->m__checkpoints->comments))
        <p class="text-break" style="font-size:70%">{{ $my_collections->m_collections->m__checkpoints->comments }}</p>
      @elseif(! empty($my_collections->m_collections->m__tours->tour_comment))
        <p class="text-break" style="font-size:70%">{{ $my_collections->m_collections->m__tours->tour_comment }}</p>
      @endif
      </div>
    </div>
  </div>
  @if(! empty($my_collections))
  <div class="container-fluid">
     <img class="img-fluid mx-auto" src="{{ asset($my_collections->m_collections->path . $my_collections->m_collections->filename) }}" alt="Sample">
  </div>
  @else
  <h4> Sorry not exist. </h4>
  @endif
@endsection