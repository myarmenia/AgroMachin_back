@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/table.css') }}" >
    <link rel="stylesheet" href="{{ asset('assets/css/modal.css') }}" >
@endsection

@section('content')
    {{-- <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Role Management</h2>
            </div>
            <div class="pull-right">
            @can('role-create')
                <a class="btn btn-success" href="{{ route('roles.create') }}"> Create New Role</a>
                @endcan
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th width="280px">Action</th>
    </tr>
        @foreach ($roles as $key => $role)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $role->name }}</td>
            <td>
                <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>
                @can('role-edit')
                    <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
                @endcan
                @can('role-delete')
                    {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                @endcan
            </td>
        </tr>
        @endforeach
    </table> --}}


    {{-- {!! $roles->render() !!} --}}

    {{-- ==================================== --}}
    <section class="right-section">
        <div class="right-sectionChild">
            <div class="title-link2">
                <div class="title-linkChild">
                    <a href="#" class="link-direction">Գլխավոր</a>
                    <div>></div>
                    <a href="./page.html" class="link-direction">Դեր</a>
                </div>
                <a href="{{ route('roles.create') }}" class="addPage" id="addPage">+ Նոր դեր</a>
            </div>

            <div class="tableContainer">
                <div class="table-title">
                    <div class="page">Դերեր</div>
                </div>
                <div class="tableChild">
                    <table>
                        <tr class="firstLine">
                            <td>№</td>
                            <td>Դեր</td>

                            <td>Կարգավիճակ</td>
                            <td>Փոփոխել</td>
                        </tr>

                        @foreach ($roles as $key => $role)
                            <tr>
                                <td>{{++$i}}</td>
                                <td>{{ $role->name }}</td>
                                <td>
                                    <label class="toggle">
                                        <input class="toggle-checkbox" type="checkbox" {{ $role->status ? 'checked' : ''}}>
                                        <div class="toggle-switch"></div>
                                    </label>
                                </td>
                                <td>
                                    <a href="{{ route('roles.edit', $role->id) }}">
                                        <img src="{{ asset('assets/images/table/pen.svg') }}" class="pen">
                                    </a>
                                    <form action="{{route('roles.destroy', $role->id)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button >111
                                            <img src="{{ asset('assets/images/table/pen.svg') }}" class="pen">
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
{{-- ========================= my pagin ation ========================= --}}
{{ $roles->links() }}

<div class="pagination">
  
    <div class="page-item previous-page">
      <a class="page-link" href="javascript:void(0)"><span>‹‹</span></a>
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
      <a class="page-link" href="javascript:void(0)"><span>››</span></a>
    </div>
  </div>
        <!-- ------------------------------------------------------- -->
        <!-- Pagination -->
        <!-- ------------------------------------------------------- -->
        <div class="pagination">
          <div class="page-item previous-page">
            <a class="page-link" href="javascript:void(0)"><span>‹‹</span></a>
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
            <a class="page-link" href="javascript:void(0)"><span>››</span></a>
          </div>
        </div>
        <!-- ======================================================= -->
        <!-- ======================================================= -->
        <!-- ======================================================= -->
    </section>

    <div class="modal-container">
        <div class="modal" id="confirm-modal">
          <div class="modal-head">
            <h3 class="modal-title">Կարգավիճակի փոփոխություն</h3>
            <div class="close">&#x2715;</div>
          </div>
          <div class="modal-content">
            <div class="modal-confirm-box">
              <p class="modal-confirm-box-title">
                Դուք ցանկանո՞ւմ եք ապակտիվացնել օգտատիրոջը
              </p>
              <div class="modal-confirm-buttons">
                <button class="btn-transparent" id="modal-deny-btn">
                  Չեղարկել
                </button>
                {{-- <form> --}}
                <a href="{{route('change_role_status', [2, 1])}}" class="addPage" id="modal-accept-btn">Հաստատել</a>
                {{-- </form> --}}
              </div>
            </div>
          </div>
        </div>
    </div>
    @section('script')
        <script src="{{ asset('assets/js/modal.js') }}"></script>
        <script>
            document.querySelectorAll(".toggle").forEach((el) => {
              el.addEventListener("click", () => showModal("#confirm-modal"));
            });
        </script>
    @endsection
@endsection
