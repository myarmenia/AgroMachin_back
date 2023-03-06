@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/users/users.css') }}" >
    <link rel="stylesheet" href="{{ asset('assets/css/users/media.css') }}" >
@endsection

@section('content')
    @if (count($errors) > 0)
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
                    <form action="{{ route('languages.store')}}" method="post" class="user_form">
                        @csrf
                        <div class="place flex">
                            <p>lezuner</p>
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
    </section>


@endsection
