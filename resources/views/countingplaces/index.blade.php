@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{{asset('assets/css/table.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/countingplaces/countingPlaces.css')}}"/>
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
                      <input placeholder="Որոնել" class="main-input" />
                      <img
                        src="{{asset('assets/table/inp-search.svg')}}"
                        alt=""
                      />
                    </div>

                  </div>
                </div>

              </div>
              <div class="vehicleType_table_container">
                <table>
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
                        <td></td>
                        <td>{{$items->name}}</td>
                        <td>
                          <div>
                            <label class="toggle">
                              <input class="toggle-checkbox" type="checkbox" {{$items->status==1 ? 'checked' : null}}/>
                              <div class="toggle-switch"></div>
                            </label>
                          </div>
                        </td>
                        <td>
                          <div>
                            <img src="{{asset('assets/table/Trash.svg')}}" alt="" />
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

            <div class="new_vehicle">
              <div class="table-title">
                <div class="table-title-text">
                  Ստեղծել հաշվառման նոր վայր
                </div>
              </div>



              <form  action="{{route('countingplaces.store')}}" method="post" class="new_vehicle_content">
                @csrf
                <div class="new_vehicle_fieldset">
                  <div>
                    <div class="field_title">Անուն*</div>
                    <input id="car" placeholder="Տրակտոր" class="main-input" name="name" />
                  </div>

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
              @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
             @endif
            </div>

            <div class="new_vehicle2">
              <div class="table-title">
                <div class="table-title-text">Փոփոխել հաշվառման վայրը</div>
              </div>
              <form class="new_vehicle_content"  id="edit_counting_place"  method="post" >
                @csrf
                @method('PUT')
                <div class="new_vehicle_fieldset">
                  <div>
                    <div class="field_title">Անուն*</div>
                    <input id="car1" placeholder="Տրակտոր" value='' class="main-input" name='name'/>
                  </div>
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
          <div class="pagination">
            <div class="page-item previous-page">
              <a class="page-link" href="javascript:void(0)"
                ><span>‹‹</span></a
              >
            </div>
            <div class="page-item current-page">
              <a class="page-link" href="javascript:void(0)">1</a>
            </div>
            <div class="page-item dots">
              <a class="page-link" href="javascript:void(0)">...</a>
            </div>
            <div class="page-item current-page">
              <a class="page-link" href="javascript:void(0)">5</a>
            </div>
            <div class="page-item current-page page-active">
              <a class="page-link" href="javascript:void(0)">6</a>
            </div>
            <div class="page-item current-page">
              <a class="page-link" href="javascript:void(0)">7</a>
            </div>
            <div class="page-item dots">
              <a class="page-link" href="javascript:void(0)">...</a>
            </div>
            <div class="page-item current-page">
              <a class="page-link" href="javascript:void(0)">13</a>
            </div>
            <div class="page-item next-page">
              <a class="page-link" href="javascript:void(0)"
                ><span>››</span></a
              >
            </div>
          </div>
          <!-- ======================================================= -->
          <!-- ======================================================= -->
          <!-- ======================================================= -->
        </div>
      </section>
      <!-- right section end-->
        @section('script')

            @if ($errors->any())

                <script>
                    articleToggle()
                    function articleToggle() {

                        document.querySelector('.new_vehicle ').classList.add("new_vehicle_show");
                    }
                </script>
            @endif
            <script src="{{asset('assets/js/countingplaces/countingPlaces.js')}}"></script>

        @endsection
@endsection
