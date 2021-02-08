<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>WalkingApp</title>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- lazy load images -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js" integrity="sha512-jNDtFf7qgU0eH/+Z42FG4fw3w7DM/9zbgNPe3wfJlCylVDTT3IgKW5r92Vy9IHa6U50vyMz5gRByIu4YIXFtaQ==" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css'>

    <!-- Styles -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
    <div id="app">
    @guest
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style='top:28px;'>
            <div class="container">
                <a class="navbar-brand" href="{{ url('/padometerscreen') }}">
                    WalkingApp
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('custom.manuallogin') }}">{{ __('Login') }}</a>
                            </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('custom.register') }}">{{ __('Register') }}</a>
                                </li>



                    </ul>
                </div>
            </div>
        </nav>
        @endguest

        <main class="">

          <div class="container-fluid bg-white fixed-top py-0 my-0 px-3" style="height:28px !important; z-index:11; position:fixed; top: 0">
            <div class="d-flex flex-row justify-content-between">
              <div class="p-0">
                <img src="{{ asset('storage/mypage/ico_back.png') }}" alt="" onclick="goBack()" style="cursor: pointer;">
              </div>
              <div class="p-0">
                <p class="text-center" style="font-size: 120%"> ウォーキング </p>
              </div>
              <div class="p-0">
                <a href="/padometerscreen"><img src="{{ asset('storage/mypage/close.png') }}" alt=""></a>
              </div>
            </div>
          </div>
          <script>
          function goBack() {
            window.history.back();
          }
          </script>
            @yield('content')
        </main>
    </div>
</body>
</html>
