<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Police</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/login/style.css') }}" />
    <link rel="stylesheet" href="{{asset('assets/css/login/media.css') }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app" >
        <div class="background">

            <div class="language">
                <div class="navbar">
                    <div class="dropdown">
                        <button class="dropbtn">
                            <div id="drop-title">Հայերեն</div>
                            <svg width="19" height="18" viewBox="0 0 19 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.4514 15.0405L12.6276 7.39282L8.80371 15.0405" stroke="#575757"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M9.89551 12.8555H15.3582" stroke="#575757" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M6.61816 2.47644V4.11523" stroke="#575757" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M2.24805 4.11523H10.9883" stroke="#575757" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M8.80322 4.11523C8.80322 5.85378 8.11259 7.52111 6.88326 8.75044C5.65392 9.97978 3.98659 10.6704 2.24805 10.6704"
                                        stroke="#575757" stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M4.80859 6.30029C5.26041 7.57823 6.09728 8.68469 7.20397 9.46732C8.31066 10.25 9.63275 10.6703 10.9882 10.6704"
                                        stroke="#575757" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                        </button>
                        <div class="dropdown-content myDropdown">
                            <div class="option">Անգլերեն</div>
                            <div class="option">Հայերեն</div>
                            <div class="option">Ռուսերեն</div>
                        </div>
                    </div>
                </div>
            </div>

            @yield('content')

        </div>
    </div>

    <script src="{{asset('assets/ls/login/script.js') }}"></script>
</body>
</html>
