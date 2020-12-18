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

    <style>
        body {

            font-family: Lato, sans-serif;
        }




        .loader .loading_1 {
            position: relative;
            width: 100%;
            height: 10px;
            border: 1px solid green;
            border-radius: 10px;
            animation: turn 4s linear 1.75s infinite;
        }

        .loader .loading_1:before {
            content: "";
            display: block;
            position: absolute;
            width: 0;
            height: 100%;
            background-color: green;
            box-shadow: 10px 0px 15px 0px green;
            animation: load 2s linear infinite;
        }

        .loader .loading_2 {
            position: absolute;
            width: 100%;
            top: 10px;
            color: green;
            font-size: 22px;
            text-align: center;
            animation: bounce 2s linear infinite;
        }

        @keyframes load {
            0% {
                width: 0%;
            }

            87.5% {
                width: 100%;
            }
        }

        @keyframes turn {
            0% {
                transform: rotateY(0deg);
            }

            6.25%,
            50% {
                transform: rotateY(180deg);
            }

            56.25%,
            100% {
                transform: rotateY(360deg);
            }
        }

        @keyframes bounce {

            0%,
            100% {
                top: 10px;
            }

            12.5% {
                top: 30px;
            }
        }

    </style>
</head>

<body>

    <div class='container'>
        @if (empty(Auth::id()) || empty(Auth::user()->name))
            <div class='row'>
                <div class='col-12'>
                    <div class="loader">
                        <div class="loading_1"></div>
                        <div class="loading_2">Loading...</div>
                    </div>
                </div>
            </div>
        @endif
        <div class='row'>
            <div class='col-lg-offset-3 col-lg-6'>
                @if (count($errors) > 0)
                    @foreach ($errors->all() as $error)
                        <p class='alert alert-danger'>{{ $error }} </p>
                    @endforeach
                @endif

                <form style='display:none;' class='form-horizontal'
                    action="{{ route('custom.login', ['serialnumber' => $serial_number]) }}" method='post'>
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

            </div>
        </div>
    </div>
</body>
<script>
    document.getElementById("myBtn").click();

</script>

</html>
