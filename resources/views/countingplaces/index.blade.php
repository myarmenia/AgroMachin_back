@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{{asset('assets/css/table.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/countingplaces/countingPlaces.css')}}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/modal.css') }}" >
@endsection


@section('content')
    <!-- right section start-->
    <section class="right-section">
        <div class="right-sectionChild">
          <div class="title-link2 vehicleType_crumbs_container">
            <div>
              <div class="title-linkChild vehicleType_crumbs_box1">
                <a href="#" class="link-direction">Գլխավոր</a>
                <div>></div>
                <a href="./page.html" class="link-direction"
                  >Տեխնիկայի հաշվառում
                </a>
                <div>></div>
                <a href="./page.html" class="link-direction"
                  >Հաշվառման վայրեր</a
                >
              </div>
              <button class="main-btn" id="new_record">
                Ստեղծել հաշվառման վայր
              </button>
            </div>
          </div>

          <div class="vehicleType_main_container">
            <div class="tableContainer">
              <div class="table-title">
                <div class="vehicleType_table_head">
                  <span>Հաշվառման վայրեր</span>
                  <div>
                    <div class="main-input-search-box">
                        <form method="get" action="/countingplaces/">

                            <input placeholder="Որոնել" class="main-input" name="search_fild" value="{{request()->input('search_fild')}}" />
                           <button type="submit"> <img src="{{asset('assets/table/inp-search.svg')}}" alt="" /></button>
                        </form>
                    </div>

                  </div>
                </div>

              </div>
              <div class="vehicleType_table_container">
                <table  data-route="change-countingplaces-status" data-delete="countingplaces" id="table-route">
                  <thead>
                    <tr class="vehicleType_thead">
                      <td>№</td>
                      <td>Անուն</td>
                      <td>Կարգավիճակ</td>
                      <td>Ջնջել</td>
                      <td>Փոփոխել</td>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($countingplace as $items )
                    <tr>
                        <td>{{ ++$i}}</td>
                        <td>{{$items->name}}</td>
                        <td>
                          <div>
                            <label class="toggle">
                              <input class="toggle-checkbox" type="checkbox" {{$items->status==1 ? 'checked' : null}}  data-id="{{ $items->id }}">
                              <div class="toggle-switch"></div>
                            </label>
                          </div>
                        </td>
                        <td>
                          <div>
                            <img src="{{asset('assets/table/Trash.svg')}}" alt="" class="trashbin" data-id="{{ $items->id }}" >
                          </div>
                        </td>
                        <td>
                          <div>
                            <img src="{{asset('assets/table/pen.svg')}}" alt="" data-id="{{$items->id}}" data-name="{{ $items->name }}"  data-status="{{ $items->status }}" class="change_record"/>
                          </div>
                        </td>
                      </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>
            </div>

            <div class="new_vehicle @error('name')new_vehicle_show @enderror">
              <div class="table-title">
                <div class="table-title-text">
                  Ստեղծել հաշվառման նոր վայր
                </div>
              </div>



              <form  action="{{route('countingplaces.store')}}" method="post" class="new_vehicle_content">
                @csrf
                <div class="new_vehicle_fieldset">
                  <div class="input_error">
                    <div class="field_title">Անուն*</div>
                    <input id="car" placeholder="Տրակտոր" class="main-input @error('name') error_border @enderror" name="name"/>

                  </div>
                   @error('name')
                        <div class="error_message">{{ $message }}</div>
                   @enderror


                  <div>
                    <div class="field_title">Կարգավիճակ*</div>
                    <label class="toggle2">
                      <input class="toggle2-checkbox" type="checkbox" name="status" value='' />
                      <div class="toggle2-switch"></div>
                    </label>
                  </div>
                </div>
                <button type="submit" class="addPage">Պահպանել</button>
              </form>

            </div>

            <div class="new_vehicle2 @error('edit_name') new_vehicle2 new_vehicle_show2 @enderror">
              <div class="table-title">
                <div class="table-title-text">Փոփոխել հաշվառման վայրը</div>
              </div>
              <form class="new_vehicle_content"  action="countingplaces/{{Session::get('action')}}"   id="edit_counting_place"  method="post" >
                @csrf
                @method('patch')
                <div class="new_vehicle_fieldset">
                  <div>
                    <div class="field_title">Անուն*</div>
                    <input id="car1" placeholder="Տրակտոր" value='' class="main-input  @error('edit_name') error_border @enderror " name='edit_name'/>
                  </div>
                  @error('edit_name')
                    <div class="error_message">{{ $message }}</div>
                  @enderror
                  <div>
                    <div class="field_title">Կարգավիճակ*</div>
                    <label class="toggle2">
                      <input class="toggle2-checkbox edit_counting_place_status"  name="status" type="checkbox" />
                      <div class="toggle2-switch"></div>
                    </label>
                  </div>
                </div>
                <button  type="submit" class="addPage">Պահպանել</button>
              </form>
            </div>
          </div>
          <!-- ------------------------------------------------------- -->
          <!-- Pagination -->
          <!-- ------------------------------------------------------- -->
         {{$countingplace->links()}}
          <!-- ======================================================= -->
          <!-- ======================================================= -->
          <!-- ======================================================= -->
          @include('layouts.modal')
        </div>
      </section>
      <!-- right section end-->
        @section('script')
            <script src="{{ asset('assets/js/modal.js') }}"></script>

            {{-- @if ($errors->any())

                <script>
                    articleToggle()
                    function articleToggle() {

                        document.querySelector('.new_vehicle ').classList.add("new_vehicle_show");
                    }
                </script>
            @endif --}}

            <script src="{{asset('assets/js/countingplaces/countingPlaces.js')}}"></script>

        @endsection
@endsection
