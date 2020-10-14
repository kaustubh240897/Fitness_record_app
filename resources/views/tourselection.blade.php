@extends('layouts.app')

@section('content')
<div class='container'>
@if (session('successMsg'))
<div class='alert alert-success' roles='alert'>
 {{ session('successMsg') }}
</div>
@endif


 <style media="screen">
      .btn.btn-lg {
        background-color: #ccece8 !important;
       /* padding: 12px 32px !important; */
     }
     .btn.blue {
       background-color: #ccece8 !important;
      /* padding: 12px 32px !important; */
    }
    </style>
 <div class="container-fluid mt-1">
    @if(! empty($m__users_id))
          <a href="{{ route('edit', $m__users_id) }}">  <button type="button" class="btn blue">個人設定へ戻る</button></a>
          @else
          <a href="{{ url('/') }}"> <button type="button" class="btn blue mb-1">個人設定へ戻る</button> </a>
    @endif
    </div>
    <div class="container-fluid mt-3 pl-sm-4">
      <div class="row pl-2">
        <div class="col-4 col-sm-2 p-1 pl-2">
          <p style="font-size: 80%">現在の選択ツアー</p>
        </div>
        <div class="col col-sm-5 p-1">
        @if(! empty($current_tour))
          <p class="border border-dark text-break" style="font-size: 80%"> {{ $current_tour->m_tours->tour_title }} (Total travelled {{ $steps * $get_m_user_stride/100000 }}KM/ Remaining @if($total <= $steps * $get_m_user_stride/100000) 0 Km @else {{ $total-$steps * $get_m_user_stride/100000 }}KM @endif)</p>
        @else
        <p> You have not selected any tour please select a tour. </p>
        @endif
        @if(! empty($current_tour) && $current_tour->status == 'Done')
        <p> Your tour has been completed Please select another tour. </p>
        @endif
        </div>
      </div>
    </div>

 <div class="table-responsive-sm mt-4 mx-sm-3">
        <table class="table table-hover" id="collections_table">
            <thead>
              <tr>
                <td colspan="4">選択が可能なツアー</td>
              </tr>
            </thead>
            <tbody>
    @foreach($tours as $tour)
    <tr class="collectionsRow">
      <td><button type="button" class="btn btn-sm blue" style="font-size:70%"><a href="{{ route('tourdetails', $tour->id) }}"> 詳細 </a></button></td>
      <td style="font-size:70%"><b>{{ $tour->tour_title }} (@if(! empty($tour->checkpoints)) @foreach($tour->checkpoints as $checkpoint) @if($checkpoint->checkpoint_category == 'endpoint')  {{ $checkpoint->distance }}Km @endif  @endforeach @else 0Km @endif) </b></td>
      <td style="font-size:70%">@foreach($all_t_Tours as $all_t_Tour) @if($tour->id == $all_t_Tour->m__tours_id)  @if($all_t_Tour->status == 'Done') * @break @else @continue  @endif @endif @endforeach </td>
      <td> <form action="{{ route('tourstore', $tour->id) }}" method="POST" >
      {{ csrf_field() }}
      {{ method_field('post') }}
      <button type="submit" class="btn btn-sm blue" style="font-size:70%">選択中</button>
      </form>
      </td>
    </tr>
    @endforeach
  </tbody>
        </table>
  </div>


<div class="container-fluid mt-3 pl-sm-4">
    <div class="row pl-2">
      <div class="col-4 col-sm-2 p-1 pl-2">
        <p style="font-size: 80%">今回選択するツアー</p>
      </div>
      <div class="col col-sm-5 p-1">
      @if(! empty($current_tour))
        <p class="border border-dark text-break" style="font-size: 80%">{{ $current_tour->m_tours->tour_title }} ({{ $total }}KM)</p>
      @else
        <p> You have not selected any tour please select a tour. </p>
      @endif
      @if(! empty($current_tour) && $current_tour->status == 'Done')
        <p> Your tour has been completed Please select another tour. </p>
      @endif
      </div>
    </div>
  </div>
  <div class="container">
  <form action="{{ route('index') }}" method="POST" >
  {{ csrf_field() }}
    <div class="row justify-content-center px-3">
      <div class="col">
        <div class="form-check form-check-inline">
         <?php $value = Session::get('reverse','false'); ?>
          @if($value == 'false')
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="3" checked>
          @else
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="3">
          @endif

        <label class="form-check-label" for="inlineRadio1">通常の踏破</label>
      </div>
      </div>
      <div class="col">
        <div class="form-check form-check-inline">
          @if($value == 'true')
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="4" checked>
          @else
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="4">
          @endif
          <label class="form-check-label" for="inlineRadio2">逆方向に踏破</label>
        </div>
      </div>
      <div class="col">
        <button type="submit" class="btn blue">ツアーを決定</button>
      </div>

    </div>
    </form>
  </div>

 <div class="container mt-3 pt-sm-3">
    <p><注意事項(ツアー踏破ルール)></p>
    <p>現在選択中のツアーに対する踏破実績(歩数)は破棄されます。</p>
    <p>新しいツアーの踏破は翌日以降の歩数実勢から適用が行われます。</p>
    <p>再度、同一ツアーを選択する場合、踏破は最初から開始となります。</p>
    <p>ただし、今回のツアー踏破中に得たコレクションは保持されます。</p>
  </div>


@endsection
