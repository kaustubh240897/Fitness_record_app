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


    </style>
</head>

<body>

    <div class='container'>
        
        <div class='row'>
            <div class='col-lg-offset-3 col-lg-6'>
                @if (count($errors) > 0)
                    @foreach ($errors->all() as $error)
                        <p class='alert alert-danger'>{{ $error }} </p>
                    @endforeach
                @endif

                <form style='display:none;' class='form-horizontal'
                    action="{{ route('custom.login1', ['serialnumber' => $serial_number]) }}" method='post'>
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
