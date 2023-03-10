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
                    <table data-route="change-role-status" data-delete="roles" id="table-route">
                        <tr class="firstLine">
                            <td>№</td>
                            <td>Դեր</td>
                            <td>Կարգավիճակ</td>
                            <td>Ջնջել</td>
                            <td>Փոփոխել</td>
                        </tr>

                        @foreach ($roles as $key => $role)
                            <tr>
                                <td>{{++$i}}</td>
                                <td>{{ $role->name }}</td>
                                <td>
                                    <label class="toggle">
                                        <input class="toggle-checkbox" type="checkbox" {{ $role->status ? 'checked' : ''}} data-id="{{ $role->id }}">
                                        <div class="toggle-switch"></div>
                                    </label>
                                </td>
                                <td>
                                    <div>
                                        <img src="{{ asset('assets/images/table/Trash.svg') }}" class="trashbin" data-id="{{ $role->id }}">
                                    </div>
                                </td>
                                <td>
                                    <a href="{{ route('roles.edit', $role->id) }}">
                                        <img src="{{ asset('assets/images/table/pen.svg') }}" class="pen">
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>


        <!-- ------------------------------------------------------- -->
        <!-- Pagination -->
        {{ $roles->links() }}
        <!-- ======================================================= -->
    </section>


    {{-- ============= modal for change status ===================== --}}
    @include('layouts.modal')

    @section('script')
        <script src="{{ asset('assets/js/modal.js') }}"></script>
        <script>
            // document.querySelectorAll(".toggle").forEach((el) => {
            //   el.addEventListener("click", () => showModal("#confirm-modal"));
            // });
        </script>
    @endsection
@endsection
