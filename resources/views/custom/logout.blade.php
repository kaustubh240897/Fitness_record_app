@extends('layouts.app')

@section('content')
@if (session('Status'))
<div class="alert alert-success" role="alert">
   {{ session('Status') }}
</div>
@endif
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>

<body>

    <div class='container'>
        <div class='row'>
            <div class='col-lg-offset-3 col-lg-6'>
            @if(! empty(Auth::id()) || ! empty(Auth::user()->name))
             <form class='form-horizontal' action="{{ route('logout') }}" method='post'>
                 {{ csrf_field() }}
                <div class="form-group row">
                        <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Logout</button>
                        </div>
                    </div>
                </form>
            @else
            You are already logged out!
            @endif
            </div>
        </div>
    </div>
</body>
</html>

@endsection