@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/table.css') }}" >
@endsection

@section('content')
    {{-- <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Users Management</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
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
    <th>Email</th>
    <th>Roles</th>
    <th width="280px">Action</th>
    </tr>
    @foreach ($data as $key => $user)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>
        @if(!empty($user->getRoleNames()))
            @foreach($user->getRoleNames() as $v)
            <label class="badge badge-success">{{ $v }}</label>
            @endforeach
        @endif
        </td>
        <td>
        <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
        <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table> --}}


    {{-- {!! $data->render() !!} --}}

    <section class="right-section">
        <div class="right-sectionChild">
            <div class="title-link2">
                <div class="title-linkChild">
                    <a href="#" class="link-direction">Գլխավոր</a>
                <div>></div>
                    <a href="./page.html" class="link-direction">Օգտատերեր</a>
                </div>
                <a href="{{ route('users.create') }}" class="addPage" id="addPage">+ Նոր օգտատեր</a>
            </div>

            <div class="tableContainer">
                <div class="table-title">
                    <div class="page">Օգտատերեր</div>
                    <div class="table-input-search-box">
                        <input placeholder="Որոնել" class="table-input" />
                        <img src="{{ asset('assets/images/table/inp-search.svg') }}" alt="" />
                    </div>
                    <div class="dropdown-container">
                        <div class="navbar">
                            <div class="dropdown">
                                <button class="dropbtn">
                                    <div id="drop-title">Սորտավորել</div>
                                    <img src="{{ asset('assets/images/table/greyArrow.svg') }}" alt="" />
                                </button>
                                <div class="dropdown-content myDropdown">
                                    <div class="option">Աճման կարգով</div>

                                    <div class="option">Նվազման կարգով</div>
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
                                    <div class="option">ըստ էլ․ հասցե</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tableChild">
                    <table>
                        <tr class="firstLine">
                            <td>№</td>
                            <td>Անուն</td>
                            <td>Ազգանուն</td>
                            <td>Հայրանուն</td>
                            <td>Էլ․ հասցե</td>
                            <td>Դեր</td>
                            <td>Հաշվառման վայր</td>
                            <td>Լեզու</td>
                            <td>Կարգավիճակ</td>
                            <td>Փոփոխել</td>
                        </tr>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{++$i}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->last_name}}</td>
                                <td>{{$user->middle_name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    @if(!empty($user->getRoleNames()))
                                        @foreach($user->getRoleNames() as $v)
                                            <label class="badge badge-success">{{ $v }}</label>
                                        @endforeach
                                    @endif
                                </td>
                                <td>Կոտայքի մարզ</td>
                                <td>Հայերեն</td>
                                <td>
                                <label class="toggle">
                                    <input class="toggle-checkbox" type="checkbox" />
                                    <div class="toggle-switch"></div>
                                </label>
                                </td>

                                <td>
                                <img src="{{ asset('assets/images/table/pen.svg') }}" class="pen" />
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
