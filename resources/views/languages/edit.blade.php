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
    @endif
    <section class="right-section">
        <div class="right-sectionChild">
            <div class="app">
                <div class="new_user">
                    <div class="create_user">
                        <h3>Ստեղծել նոր lezu</h3>
                    </div>
                    <form action="{{ route('languages.update', $language->id)}}" method="post" class="user_form">
                        @csrf
                        @method('patch')
                        <div class="place flex">
                            <p>lezuner</p>
                            {{$language->name}}

                        </div>

                        <div class="role flex">
                            <p>bajinner*</p>
                            <input type="text" name="new_section" value="">

                            @foreach ($sections as $key => $section)

                                <input type="checkbox" name="sections[]" value="{{$key}}" {{in_array($key, $language_sections) ? 'checked' : ''}}>{{$key}}

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
                        <a href="./page.html" class="link-direction">Փոփոխել լեզու</a>
                    </div>
                </div>
            </div>
            <div class="app">
                <div class="new_language">
                    <div class="create_language">
                        <h3>Փոփոխել լեզու</h3>
                    </div>
                    <form action="{{ route('languages.update', $language->id)}}" method="post" id="form" class="language_form">
                        @csrf
                        @method('patch')
                        <div class="language_block">
                            <div class="selectLanguage">
                                {{-- <label for="" class="language">Լեզու*
                                    <div class="select">
                                        <select id="standard-select">
                                            <option value="" selected disabled>{{$language->name}}</option>
                                        </select>
                                    </div>
                                </label> --}}
                                <label for="" class="sections">Բաժիններ
                                    <input type="text" value="{{$language->name}}" disabled>
                                </label>
                                <label for="" class="sections">Բաժիններ
                                    <input type="text" placeholder="Նոր բաժին" name="new_section">
                                </label>
                                @error('new_section')
                                    <div class="error_message">{{ $message }}</div>
                                @enderror
                                <div class="input_checkbox">
                                    @foreach ($sections as $key => $section)
                                        <label for="">
                                            <input type="checkbox" name="sections[]" value="{{$key}}" {{in_array($key, $language_sections) ? 'checked' : ''}}> {{$key}}
                                        </label>
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
