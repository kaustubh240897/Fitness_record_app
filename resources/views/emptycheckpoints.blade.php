@extends('layouts.app')

@section('content')
@if ($tours == null)
    <h3 class='text-center'> 申し訳ありませんが、ツアーは存在しません。 </h3>
@else
    <h3 class='text-center'> プロフィールの詳細を入力していません。詳細を入力してください<a href="/">profile </a> </h3>
@endif
@endsection
