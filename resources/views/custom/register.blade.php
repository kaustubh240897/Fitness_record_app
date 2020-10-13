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
    <title>Custom registration</title>
</head>

<body>

    <div class='container'>
        <div class='row'>
            <div class='col-lg-offset-3 col-lg-6'>
                @if(count($errors) >0)
                    @foreach($errors->all() as $error)
                        <p class='alert alert-danger'>{{ $error }} </p>
                    @endforeach
                @endif
                <form class='form-horizontal' action="{{ route('custom.register') }}" method='post'>
                 {{ csrf_field() }}
                    <div class="form-group">
                        <label for=""> Serial number </label>
                        <input type='text' class='form-control'  placeholder='serial number' name='name' value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                        <label style='display:none' for="exampleInputPassword1">Password</label>
                        <input style='display:none' type="password" class="form-control" id="exampleInputPassword1" name='password' placeholder="Password" value='kd123456' readonly>
                    </div>
                    <div class="form-group">
                        <label style='display:none' for="exampleInputPassword1">Confirm Password</label>
                        <input style='display:none' type="password" class="form-control" id="exampleInputPassword2" name='password_confirmation' placeholder="Password" value='kd123456' readonly>
                    </div>
                     <div class="form-group row">
                        <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Sign up</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

@endsection