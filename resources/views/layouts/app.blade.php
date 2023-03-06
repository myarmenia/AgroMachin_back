<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">

    @yield('style')

    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    <!-- Scripts -->
    @yield('head_style')
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
</head>

<body>
    <div id="app">
        {{-- <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Laravel 9 User Roles and Permissions - ItSolutionStuff.com
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto"></ul>


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li><a class="nav-link" href="{{ route('users.index') }}">Manage Users</a></li>
                            <li><a class="nav-link" href="{{ route('roles.index') }}">Manage Role</a></li>
                            <li><a class="nav-link" href="{{ route('products.index') }}">Manage Product</a></li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>


                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}


        {{-- <main class="py-4">
            <div class="container">
            @yield('content')
            </div>
        </main> --}}
        <!-- sidebar start -->


        {{-- <div class="sidebar close">
            <div class="logo-details">
                <img src="../../assets/sidebarIcon/logo.svg" />
            </div>
            <ul class="nav-links">
                <li>
                    <a href="#">
                        <img src="../../assets/sidebarIcon/user.svg" class="bx bx-grid-alt" >
                        <span class="link_name">Օգտատերեր</span>
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="#">Օգտատերեր </a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <img src="../../assets/sidebarIcon/car.svg" class="bx bx-grid-alt">
                        <span class="link_name">Տրանսպորտային միջոցի տեսակ</span>
                    </a>
                    <ul class="sub-menu blank">
                        <li>
                            <a class="link_name" href="#">Տրանսպորտային միջոցի տեսակ </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <img src="../../assets/sidebarIcon/techtype.svg" class="bx bx-grid-alt" >
                        <span class="link_name">Տեխնիկայի սարքինության տեսակ</span>
                    </a>
                    <ul class="sub-menu blank">
                        <li>
                            <a class="link_name" href="#">Տեխնիկայի սարքինության տեսակ</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <div class="iocn-link">
                        <a href="#">
                            <img src="../../assets/sidebarIcon/4img.svg" class="bx bx-grid-alt">
                            <span class="link_name">Տեխնիկայի հաշվառում</span>
                        </a>
                        <i class="bx bxs-chevron-down arrow"></i>
                    </div>
                    <div class="menu-panel">
                        <ul class="sub-menu">
                            <li><a class="link_name" href="#">Տեխնիկայի հաշվառում</a></li>
                            <li><a href="#">Հաշվառման վայրեր</a></li>
                            <li><a href="#">Հաշվառման հայտ</a></li>
                            <li><a href="#">Տեխնիկայի հաշվառումից հանել</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#">
                        <img src="../../assets/sidebarIcon/5img.svg" class="bx bx-grid-alt">
                    <span class="link_name">Տեխնիկայի սահմանափակումներ</span>
                    </a>
                        <ul class="sub-menu blank">
                            <li>
                                <a class="link_name" href="#">Տեխնիկայի սահմանափակումներ</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <div class="iocn-link">
                            <a href="#">
                                <img src="../../assets/sidebarIcon/6img.svg" class="bx bx-grid-alt">
                                <span class="link_name">Վարման իրավունքի Խմբեր</span>
                            </a>
                            <i class="bx bxs-chevron-down arrow"></i>
                        </div>
                        <div class="menu-panel">
                            <ul class="sub-menu">
                                <li>
                                    <a class="link_name" href="#">Վարման իրավունքի Խմբեր</a>
                                </li>
                                <li><a href="#">Վարման իրավունքի Խմբերի դասակարգում</a></li>
                                <li><a href="#">Վարման իրավունքի վկայականի տրամադրում</a></li>
                                <li><a href="#">Վարման իրավունքի հարցաշար</a></li>
                                <li>
                                    <a href="#">Վարման իրավունքի կարգի փոփոխություն,փոխանակում և կրկնօրինակի տրամադրում</a>
                                </li>
                                <li>
                                    <a href="#">Վարման իրավունքի փաստաթղթեր</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="iocn-link">
                            <a href="#">
                                <img src="../../assets/sidebarIcon/7img.svg" class="bx bx-grid-alt">
                                <span class="link_name">Տրված համարանիշներ</span>
                            </a>
                            <i class="bx bxs-chevron-down arrow"></i>
                        </div>
                        <div class="menu-panel">
                            <ul class="sub-menu">
                                <li><a class="link_name" href="#">Տրված համարանիշներ</a></li>
                                <li>
                                    <a href="#">Տեխնիկայի վկայագրի կամ համարանիշի կրկնօրինակի տրամադրում</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#">
                            <img src="../../assets/sidebarIcon/8img.svg" class="bx bx-grid-alt">
                            <span class="link_name">Բառարան</span>
                        </a>
                        <ul class="sub-menu blank">
                            <li><a class="link_name" href="#">Բառարան</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <img src="../../assets/sidebarIcon/9img.svg" class="bx bx-grid-alt">
                            <span class="link_name">Լեզուներ</span>
                        </a>
                        <ul class="sub-menu blank">
                            <li><a class="link_name" href="#">Լեզուներ</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <img src="../../assets/sidebarIcon/10img.svg" class="bx bx-grid-alt">
                            <span class="link_name">Հաշվետվություններ</span>
                        </a>
                        <ul class="sub-menu blank">
                            <li><a class="link_name" href="#">Հաշվետվություններ</a></li>
                        </ul>
                    </li>
            </ul>
        </div> --}}
        @include('layouts.menu')
        <!-- sidebar end -->
        <main class="home-section">
            <!-- header start -->
            <div class="header-blocking-div"></div>
            <header class="main-header">
                <div class="home-content">
                    <img src="{{ asset('assets/images/sideBarIcon/menuIcon.svg') }}" class="bx bx-menu">
                </div>

                <div class="home-content2">
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
                    <img src="{{ asset('assets/images/sideBarIcon/headerUser.svg') }}" class="bx bxs-user signOutBtn" />
                    <div class="userSignOut">
                    <a href="">
                        <img
                        src="{{ asset('assets/images/sideBarIcon/headerUser.svg') }}"
                        class="bx bxs-user"
                        />Անձնական էջ
                    </a>
                    <a href="">
                        <img
                        src="{{ asset('assets/images/sideBarIcon/signout.svg') }}"
                        class="bx bxs-user"
                        />Դուրս գալ
                    </a>
                    </div>
                </div>
            </header>
            <!-- header end -->
            <!-- right section start-->

            @yield('content')
            {{-- <section class="right-section">
                <div class="right-sectionChild">
                    <div class="app">
                    <div class="new_user">
                        <div class="create_user">
                        <h3>Ստեղծել նոր օգտատեր</h3>
                        </div>
                        <form action="" class="user_form">
                        <div class="place flex">
                            <p>Հաշվառման վայր</p>
                            <select name="" class="select" id="">
                            <option value="">Երևան</option>
                            <option value="">Շիրակի մարզ</option>
                            <option value="">Լոռու մարզ</option>
                            <option value="">Տավուշի մարզ</option>
                            <option value="">Արագածոտնի մարզ</option>
                            <option value="">Արարատի մարզ</option>
                            <option value="">Գեղարքունիքի մարզ</option>
                            <option value="">Վայոց Ձորի մարզ</option>
                            <option value="">Կոտայքի մարզ</option>
                            <option value="">Արմավիրի մարզ</option>
                            <option value="">Սյունիքի մարզ</option>
                            </select>
                        </div>
                        <div class="name flex">
                            <p>Անուն*</p>
                            <input type="text" placeholder="Անուն" />
                        </div>
                        <div class="surname flex">
                            <p>Ազգանուն*</p>
                            <input type="text" placeholder="Ազգանուն" />
                        </div>
                        <div class="fatherland flex">
                            <p>Հայրանուն*</p>
                            <input type="text" placeholder="Հայրանուն" />
                        </div>
                        <div class="email flex">
                            <p>Էլ. հասցե*</p>
                            <input type="email" />
                        </div>
                        <div class="password flex">
                            <p>Գաղտնաբառ*</p>
                            <input type="password" />
                        </div>
                        <div class="confirm_password flex">
                            <p>Գաղտնաբառի հաստատում*</p>
                            <input type="password" />
                        </div>
                        <div class="role flex">
                            <p>Դեր*</p>
                            <select name="" id="">
                            <option value="">Օգտատեր</option>
                            </select>
                        </div>
                        <div class="language flex">
                            <p>Լեզու*</p>
                            <select name="" id="">
                            <option value="">Հայերեն</option>
                            <option value="">Ռուսերեն</option>
                            <option value="">Անգլերեն</option>
                            </select>
                        </div>
                        <div class="status flex">
                            <p>Կարգավիճակ*</p>
                            <label class="toggle">
                            <input class="toggle-checkbox" type="checkbox" />
                            <div class="toggle-switch"></div>
                            </label>
                        </div>
                        <div class="buttons">
                            <button class="button1">Չեղարկել</button>
                            <button class="button2">Պահպանել</button>
                        </div>
                        </form>
                    </div>
                    </div>
                </div>
            </section> --}}
            <!-- right section end-->
        </main>
    </div>

    @yield('script')
    <script src="{{ asset('assets/js/index.js') }}"></script>
</body>

</html>
