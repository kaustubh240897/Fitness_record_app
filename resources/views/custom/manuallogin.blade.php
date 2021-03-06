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

        <title>Custom login</title>


    </head>

    <body>

        <div class='container'>
            <div class='row mt-5'>
                <div class='col-lg-offset-3 col-lg-6'>
                    @if (count($errors) > 0)
                        @foreach ($errors->all() as $error)
                            <p class='alert alert-danger'>{{ $error }} </p>
                        @endforeach
                    @endif
                    @if (empty(Auth::id()) || empty(Auth::user()->name))

                        <form style='display:none;' class='form-horizontal' action="{{ route('custom.manuallogin1') }}" method='post'>
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for=""> Serial number </label>
                                <input type='text' class='form-control' placeholder='serial number' name='name'
                                    value="{{ $serial_number }}">
                            </div>
                            <div class="form-group">
                                <label style='display:none' for="exampleInputPassword1">Password</label>
                                <input style='display:none' type="password" class="form-control" id="exampleInputPassword1"
                                    name='password' placeholder="Password" value='kd123456' readonly>
                            </div>
                            <div class="form-group">
                                <label style='display:none' for="exampleInputPassword1">Password</label>
                                <input style='display:none' type="password" class="form-control" id="exampleInputPassword1"
                                    name='password_confirmation' placeholder="Password" value='kd123456' readonly>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" id="myBtn" class="btn btn-primary">Login</button>
                                </div>
                            </div>
                        </form>
                    @else
                        <h5> Serialnumber {{ Auth::user()->name }}, You are already logged in! </h5>


                        <form class='form-horizontal' action="{{ route('logout') }}" method='post'>
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Logout</button>
                                </div>
                            </div>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </body>
    <script>
    document.getElementById("myBtn").click();

    </script>

    </html>

@endsection
