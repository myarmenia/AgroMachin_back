<div class="sidebar close">
    <div class="logo-details">
        <img src="{{ asset('assets/images/sidebarIcon/logo.svg') }}" />
    </div>
    <ul class="nav-links">
        <li>
            <a href="{{ route('users.index') }}">
                <img src="{{ asset('assets/images/sidebarIcon/user.svg') }}" class="bx bx-grid-alt" >
                <span class="link_name">Օգտատերեր</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="{{ route('roles.index') }}">Օգտատերեր </a></li>
            </ul>
        </li>
        <li>
            <a href="{{ route('roles.index') }}">
              <img src="{{ asset('assets/images/sidebarIcon/role.svg') }}" class="bx bx-grid-alt">
              <span class="link_name">Դեր</span>
            </a>
            <ul class="sub-menu blank">
              <li><a class="link_name" href="{{ route('roles.index') }}">Դեր </a></li>
            </ul>
        </li>
        <li>
            <a href="#">
                <img src="{{ asset('assets/images/sidebarIcon/car.svg') }}" class="bx bx-grid-alt">
                <span class="link_name">Տրանսպորտային միջոցի տեսակ</span>
            </a>
            <ul class="sub-menu blank">
                <li>
                    <a class="link_name" href="#">Տրանսպորտային միջոցի տեսակ </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{ route('equiment-type.index') }}">
                <img src="{{ asset('assets/images/sidebarIcon/techtype.svg') }}" class="bx bx-grid-alt" >
                <span class="link_name">Տեխնիկայի սարքինության տեսակ</span>
            </a>
            <ul class="sub-menu blank">
                <li>
                    <a class="link_name" href="{{ route('equiment-type.index') }}">Տեխնիկայի սարքինության տեսակ</a>
                </li>
            </ul>
        </li>
        <li>
            <div class="iocn-link">
                <a href="#">
                    <img src="{{ asset('assets/images/sidebarIcon/4img.svg') }}" class="bx bx-grid-alt">
                    <span class="link_name">Տեխնիկայի հաշվառում</span>
                </a>
                <i class="bx bxs-chevron-down arrow"></i>
            </div>
            <div class="menu-panel">
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Տեխնիկայի հաշվառում</a></li>
                    <li><a href="{{route('countingplaces.index')}}">Հաշվառման վայրեր</a></li>
                    <li><a href="#">Հաշվառման հայտ</a></li>
                    <li><a href="#">Տեխնիկայի հաշվառումից հանել</a></li>
                </ul>
            </div>
        </li>
        <li>
            <a href="#">
                <img src="{{ asset('assets/images/sidebarIcon/5img.svg') }}" class="bx bx-grid-alt">
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
                        <img src="{{ asset('assets/images/sidebarIcon/6img.svg') }}" class="bx bx-grid-alt">
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
                        <img src="{{ asset('assets/images/sidebarIcon/7img.svg') }}" class="bx bx-grid-alt">
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
                <a href="{{ route('dictionary.index') }}">
                    <img src="{{ asset('assets/images/sidebarIcon/8img.svg') }}" class="bx bx-grid-alt">
                    <span class="link_name">Բառարան</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="{{ route('dictionary.index') }}">Բառարան</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ route('languages.index') }}">
                    <img src="{{ asset('assets/images/sidebarIcon/9img.svg') }}" class="bx bx-grid-alt">
                    <span class="link_name">Լեզուներ</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="{{ route('languages.index') }}">Լեզուներ</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <img src="{{ asset('assets/images/sidebarIcon/10img.svg') }}" class="bx bx-grid-alt">
                    <span class="link_name">Հաշվետվություններ</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Հաշվետվություններ</a></li>
                </ul>
            </li>
    </ul>
</div>
