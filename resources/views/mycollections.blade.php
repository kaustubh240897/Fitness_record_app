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
         <a href="{{ url('/mypage') }}" >  <button type="button" class="btn blue mr-1 mb-1" style="font-size:70%">マイページへ戻る</button> </a>
        </div>
        <div class="col-xs-3">
         <a href="{{ url('/createtour') }}" >  <button type="button" class="btn blue mr-1 mb-1" style="font-size:70%">ツアー別表示</button> </a>
        </div>
        <div class="col-xs-3">
        <a href="{{ url('/reversemycollection') }}"> <button type="button" class="btn blue mr-1 mb-1" style="font-size:70%">取得の新しい順</button> </a>
        </div>
        <div class="col-xs-3">
         <a href="{{ url('/mycollection') }}" > <button type="button" class="btn blue mr-1 mb-1" style="font-size:70%">取得の古い順</button> </a>
        </div>
      </div>
    </div>

<div class="table-responsive-sm mt-4">
        <table class="table table-hover" id="collections_table">
            <thead>
              <tr>
                <th scope="col">アイテムの種類</th>
                <th scope="col">アイテムの名前</th>
                <th scope="col">取得年月日</th>
                <th scope="col">取得回数</th>
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





@endsection
