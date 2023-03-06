@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/table.css') }}" >
@endsection

@section('content')

    <section class="right-section">
        <div class="right-sectionChild">
          <div class="title-link2">
            <div class="title-linkChild">
              <a href="#" class="link-direction">Գլխավոր</a>
              <div>></div>
              <a href="./page.html" class="link-direction">lezuner</a>
            </div>
          </div>

          <div class="tableContainer">
            <div class="table-title">
              <div class="page">lezuner</div>
              <a href="{{ route('languages.create') }}" class="addPage" id="addPage">+ Նոր lezu</a>
            </div>
            <div class="tableChild">
              <table>
                <tr class="firstLine">
                  <td>№</td>
                  <td>Անուն</td>
                  <td>Ազգանուն</td>
                  <td>Կարգավիճակ</td>
                  <td>Փոփոխել</td>
                </tr>
                @if ($languages->total() > 0)
                    @foreach ($languages as $language)
                        <tr>
                            <td>{{++$i}}</td>
                            <td>{{$language->name}}</td>
                            <td></td>

                            <td>
                            <label class="toggle">
                                <input class="toggle-checkbox" type="checkbox" {{$language->status ? 'checked' : ''}}/>
                                <div class="toggle-switch"></div>
                            </label>
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
      </section>


@endsection
