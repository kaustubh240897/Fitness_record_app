@extends('layouts.app')

@section('content')
<div class='container'>
@if (session('successMsg'))
<div class='alert alert-success' roles='alert'>
 {{ session('successMsg') }}
</div>
@endif





 <style media="screen">
      .btn.blue {
          background-color: #ccece8 !important;
          /* padding: 12px 32px !important; */
      }
      .collectionsRow {
        cursor: pointer;
      }
    </style>


<div class="container-fluid mt-2">
      <div class="row justify-content-around">
        <div class="col-xs-3">
         <a href="{{ url('/mypage') }}" >  <button type="button" class="btn blue mr-1" style="font-size:70%">MyPage</button> </a>
        </div>
        <div class="col-xs-3">
         <a href="{{ url('/createtour') }}" >  <button type="button" class="btn blue mr-1" style="font-size:70%">Show Tours</button> </a>
        </div>
        <div class="col-xs-3">
        <a href="{{ url('/reversemycollection') }}"> <button type="button" class="btn blue mr-1" style="font-size:70%">Sort by latest</button> </a>
        </div>
        <div class="col-xs-3">
         <a href="{{ url('/mycollection') }}" > <button type="button" class="btn blue mr-1" style="font-size:70%">Sort by oldest</button> </a>
        </div>
      </div>
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
  @if(! empty($get_t_collections))
    <tbody>
   
  @foreach($get_t_collections as $get_t_collection)
  @if($get_t_collection->m_collections->collection_category == 'tour')
     <tr class="collectionsRow">
      <td style="font-size:70%">{{ $get_t_collection->m_collections->collection_category }}</td>
      <td style="font-size:70%"><a href="{{ route('collectiondetails', $get_t_collection->m_collections->id) }}">{{ $get_t_collection->m_collections->collection_title }} </a></td>
      <td style="font-size:70%"> {{ $get_t_collection->created_at }} </td>
      <td style="font-size:70%"> {{ $counter[$loop->iteration-1] }}*</td>
    </tr>
   
 
  @else
     <tr class="collectionsRow">
      <td style="font-size:70%">{{ $get_t_collection->m_collections->collection_category }}</td>
      <td style="font-size:70%"><a href="{{ route('collectiondetails', $get_t_collection->m_collections->id) }}">{{ $get_t_collection->m_collections->collection_title }}</a></td>
      <td style="font-size:70%"> {{ $get_t_collection->created_at }} </td>
      <td style="font-size:70%"> {{ $counter[$loop->iteration-1] }}*</td>
    </tr>
  @endif

  @endforeach

  </tbody>
  @else
  <h1> you don't have any collections yet! </h1>
  @endif
        </table>
  </div>
  <div class="toast" id="myToast">
    <div class="toast-body">
        It's been a long time since you visited us. We've something special for you.
    </div>
</div>
  <!-- <script>
  $(document).ready(function(){

  // code to read selected table row cell data (values).
  $("#collections_table").on('click','.collectionsRow',function(){
       // get the current row
       var currentRow=$(this).closest("tr");

       var col1=currentRow.find("td:eq(0)").text(); // get current row 1st TD value
       var col2=currentRow.find("td:eq(1)").text(); // get current row 2nd TD
       var col3=currentRow.find("td:eq(2)").text(); // get current row 3rd TD
       var data=col1+"\n"+col2+"\n"+col3;
       console.log(data);
       alert(data);
  });
});
</script> -->






@endsection