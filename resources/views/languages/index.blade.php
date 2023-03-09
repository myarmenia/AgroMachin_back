@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/table.css') }}" >
    <link rel="stylesheet" href="{{ asset('assets/css/languages/index.css') }}" >
@endsection

@section('content')

    <section class="right-section">
        <div class="right-sectionChild">
            <div class="title-link2">
                <div class="title-linkChild">
                    <a href="#" class="link-direction">Գլխավոր</a>
                    <div>></div>
                    <a href="./page.html" class="link-direction">Լեզուներ</a>
                </div>
                <a href="{{ route('languages.create') }}" class="addPage" id="addPage">Ստեղծել նոր լեզու</a>
            </div>

            <div class="tableContainer">
                <div class="table-title">
                    <div class="page">Լեզուներ</div>
                    <div class="table-input-search-box">
                        <input placeholder="Որոնել" class="table-input" />
                        <img src="{{asset('assets/images/table/inp-search.svg') }}" alt="" />
                    </div>
                    <div class="dropdown-container">
                        <div class="navbar">
                        <div class="dropdown">
                            <button class="dropbtn">
                            <div id="drop-title">Սորտավորել</div>
                            <img src="{{asset('assets/images/table/greyArrow.svg') }}" alt="" />
                            </button>
                            <div class="dropdown-content myDropdown">
                            <div class="option">Աճման կարգով</div>
                            <div class="option">Նվազման կարգով</div>
                            <div class="option">Այբբենական կարգով</div>
                            </div>
                        </div>
                        </div>
                        <div class="navbar">
                        <div class="dropdown">
                            <button class="dropbtn">
                            <div id="drop-title">Ֆիլտրել</div>
                            <img src="{{ asset('assets/images/table/greyArrow.svg') }}" alt="" />
                            </button>
                            <div class="dropdown-content myDropdown">
                            <div class="option">ըստ անվան</div>
                            <div class="option">ըստ ID</div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="tableChild">
                    <table>
                        <tr class="firstLine">
                            <td>№</td>
                            <td>Լեզվի բանալի</td>
                            <td width="37%">Անուն</td>
                            <td width="17%">Լեզվի ID</td>
                            <td>Կարգավիճակ</td>
                            <td>Ջնջել</td>
                            <td>Փոփոխել</td>
                        </tr>
                        @if ($languages->total() > 0)
                            @foreach ($languages as $language)
                                <tr>
                                    <td>{{++$i}}</td>
                                    <td>{{$language->name}}</td>
                                    <td>Հայերեն</td>
                                    <td>{{$language->id}}</td>
                                    <td>
                                        <label class="toggle">
                                            <input class="toggle-checkbox" type="checkbox" {{$language->status ? 'checked' : ''}}/>
                                            <div class="toggle-switch"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <div>
                                            <img src="{{asset('assets/images/table/Trash.svg') }}" alt="" />
                                        </div>
                                    </td>
                                    <td>
                                        <a href="{{ route('languages.edit',$language->id) }}"> <img src="{{ asset('assets/images/table/pen.svg') }}" class="pen" ></a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="5">tvyalner chkan</td>
                            </tr>
                        @endif


                    </table>
                </div>
            </div>
        </div>

        <!-- ------------------------------------------------------- -->
        <!-- Pagination -->
        {{ $languages->links() }}
        <!-- ======================================================= -->
      </section>
      @section('script')
        <script>
            document.querySelectorAll(".toggle").forEach((el) => {
            el.addEventListener("click", () => showModal("#confirm-modal"));
            });
            document
            .getElementById("modal-deny-btn")
            .addEventListener("click", hideModal);
       </script>
    @endsection

@endsection
