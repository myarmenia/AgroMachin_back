@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/table.css') }}" >
    <link rel="stylesheet" href="{{ asset('assets/css/modal.css') }}" >
    <link rel="stylesheet" href="{{ asset('assets/css/equiment-type/equiment-type.css') }}" >

@endsection

@section('content')
    <section class="right-section">
    <div class="right-sectionChild">
        <div class="title-link2 vehicleType_crumbs_container">
            <div>
                <div class="title-linkChild vehicleType_crumbs_box1">
                    <a href="#" class="link-direction">Գլխավոր</a>
                    <div>></div>
                    <a href="#" class="link-direction"
                    >Տեխնիկայի սարքինության տեսակ</a
                    >
                </div>
                <button class="main-btn" id="new_record">
                    Ստեղծել գրառում
                </button>
            </div>
        </div>
        <div class="vehicleType_main_container">
            <div class="tableContainer">
                <div class="table-title">
                    <div class="vehicleType_table_head">
                        <span> Տեխնիկայի սարքինության տեսակ</span>
                        <div>
                            <div class="main-input-search-box">
                                <form action="{{ route('equiment-type.index') }}" method="get" class="table-input-search-box">
                                    <input placeholder="Որոնել" class="main-input" name="search_inp" value="{{ request()->input('search_inp') }}" id="search_inp"/>
                                    <button><img src="../../assets/table/inp-search.svg" alt=""/></button>
                                </form>
                            </div>
                            <!-- <button class="addPage" id="new_record">
                              Ստեղծել գրառում
                            </button> -->
                        </div>
                    </div>
                    <!-- <button class="addPage" id="addPage">+ Նոր օգտատեր</button> -->
                </div>
                <div class="vehicleType_table_container">
                    <table data-delete="equiment-type" id="table-route">
                        <thead>
                        <tr class="vehicleType_thead">
                            <td>№</td>
                            <td>Անուն</td>
                            <td>Ջնջել</td>
                            <td>Փոփոխել</td>
                        </tr>
                        </thead>
                        <tbody class="search_content">
                        @foreach($equiment_types as $type)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $type->name }}</td>
                                <td>
                                    <div>
                                        <img src="{{ asset('assets/images/table/Trash.svg') }}" alt="" class="trashbin" data-id="{{ $type->id }}">
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <img
                                            src="{{ asset('assets/images/table/pen.svg') }}"
                                            alt=""
                                            id="change_record"
                                            data-name="{{ $type->name }}"
                                            data-id="{{ $type->id }}"
                                            data-route="/equiment-type/"
                                        />
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="new_vehicle {{ session('create_errror') ?  'new_vehicle_show' : '' }}">
                <div class="table-title">
                    <div class="table-title-text">
                        Ստեղծել տեխնիկայի սարքինության տեսակ
                    </div>
                </div>
                <form class="new_vehicle_content" action="{{ route('equiment-type.store') }}" method="post">
                    @csrf
                    <div class="new_vehicle_fieldset">
                        <label for="car">Անուն*</label>
                        <div class="input_error">
                            <input id="car" placeholder="Տեքստ" class="main-input @error('name') error_border @enderror" name="name">
                            @error('name')
                                <div class="error_message">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <button class="addPage">Պահպանել</button>
                </form>
            </div>

            <div class="new_vehicle2 {{ session('update_errror') ?  'new_vehicle_show2' : '' }}">
                <div class="table-title">
                    <div class="table-title-text">
                        Փոփոխել տեխնիկայի սարքինության տեսակը
                    </div>
                </div>
                <form class="new_vehicle_content" action="/equiment-type/{{ session('update_errror') }}" method="post" id="update_form">
                    @csrf
                    @method('PATCH')
                    <div class="new_vehicle_fieldset">
                        <label for="car">Անուն*</label>

                        <div class="input_error">
                            <input id="car" placeholder="լրացված տեսակը" class="main-input @error('name') error_border @enderror" name="name" />

                            @error('name')
                                <div class="error_message">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>


                    <button class="addPage">Պահպանել</button>
                </form>
            </div>
        </div>
    </div>
    <!-- ------------------------------------------------------- -->
    <!-- Pagination -->
    <!-- ------------------------------------------------------- -->
        {{ $equiment_types->links() }}
    <!-- ======================================================= -->
    <!-- ======================================================= -->
    <!-- ======================================================= -->


        @include('layouts.modal')

</section>

    @section('script')
        <script src="{{ asset('assets/js/equiment-type/equiment-type.js') }}"></script>
        <script src="{{ asset('assets/js/modal.js') }}"></script>
    @endsection

@endsection
