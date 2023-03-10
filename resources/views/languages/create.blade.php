@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/languages/create-language.css') }}" >
@endsection

@section('content')
    {{-- @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}
    {{-- <section class="right-section">
        <div class="right-sectionChild">
            <div class="app">
                <div class="new_user">
                    <div class="create_user">
                        <h3>Ստեղծել նոր lezu</h3>
                    </div>
                    <form action="{{ route('languages.store')}}" method="post" class="user_form">

                        <div class="place flex">
                            <p>lezuner</p>@csrf
                            <select name="name" class="select" id="">
                                <option value="">lezuner</option>

                                <option value="en">English</option>
                                <option value="ru">RUseren</option>
                                <option value="fr">Franceren</option>
                                <option value="it">italy</option>



                            </select>
                        </div>

                        <div class="role flex">
                            <p>bajinner*</p>
                            <input type="text" name="new_section" value="">

                            @foreach ($sections as $section)

                                <input type="checkbox" name="sections[]" value="{{$section[0]->name}}">{{$section[0]->name}}

                            @endforeach
                        </div>


                        <div class="buttons">
                            <a class="button1">Չեղարկել</a>
                            <button class="button2">Պահպանել</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section> --}}

    <section class="right-section">
        <div class="right-sectionChild">
            <div class="title-link2 vehicleType_crumbs_container">
                <div>
                    <div class="title-linkChild vehicleType_crumbs_box1">
                        <a href="#" class="link-direction">Գլխավոր</a>
                        <div>></div>
                        <a href="./page.html" class="link-direction">Լեզուներ</a>
                        <div>></div>
                        <a href="./page.html" class="link-direction">Ստեղծել նոր լեզու</a>
                    </div>
                </div>
            </div>
            <div class="app">
                <div class="new_language">
                    <div class="create_language">
                        <h3>Ստեղծել նոր լեզու</h3>
                    </div>
                    <form action="{{ route('languages.store')}}" method="post" id="form" class="language_form">
                        @csrf
                        <div class="language_block">
                            <div class="selectLanguage">
                                <label for="" class="language">Լեզու*
                                    <div class="select @error('name') error_border @enderror">
                                        <div class="class="select_container"">
                                            <select id="standard-select" name="name">
                                                <option value="">Ընտրել լեզուն</option>
                                                <option value="hy">Հայերեն</option>
                                                <option value="ru">Русский</option>
                                                <option value="en">English</option>
                                            </select>
                                        </div>
                                        @error('name')
                                            <div class="error_message">{{ $message }}</div>
                                        @enderror
                                    </div>

                                </label>

                                <label for="" class="sections">Բաժիններ
                                    <input type="text" placeholder="Նոր բաժին" name="new_section" class="@error('name') error_border @enderror">
                                </label>
                                @error('new_section')
                                    <div class="error_message">{{ $message }}</div>
                                @enderror
                                <div class="input_checkbox">
                                    @foreach ($sections as $section)
                                        <label for=""><input type="checkbox" name="sections[]" value="{{$section[0]->name}}"> {{$section[0]->name}}</label>
                                    @endforeach
                                </div>
                                @error('sections')
                                    <div class="error_message">{{ $message }}</div>
                                @enderror
                                <div class="buttons">
                                    <input class="button2" type="submit" value="Պահպանել">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
