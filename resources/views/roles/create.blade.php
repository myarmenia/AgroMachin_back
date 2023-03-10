@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/roles/new-role.css') }}" >
@endsection


@section('content')
    {{-- <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create New Role</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
            </div>
        </div>
    </div>


    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif


    {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Permission:</strong>
                <br/>
                @foreach($permission as $value)
                    <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                    {{ $value->name }}</label>
                <br/>
                @endforeach
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    {!! Form::close() !!} --}}
    <section class="right-section new-roleSection">
        <div class="right-sectionChild">
            <div class="title-link2">
                <div class="title-linkChild">
                    <a href="#" class="link-direction">Գլխավոր</a>
                    <div>></div>
                    <a href="./page.html" class="link-direction"> Օգտատերեր </a>
                    <div>></div>
                    <a href="" class="link-direction"> Ստեղծել նոր դեր</a>
                </div>
            </div>
            <div class="app">
                <div class="new_role">
                    <div class="create_role">
                        <h3>Ստեղծել նոր դեր</h3>
                    </div>
                    <form action="{{route('roles.store')}}" method="POST" id="form" class="role_form">
                        @csrf
                        <div class="role_block">
                            <input type="text" class="role_input @error('name') error_border @enderror" placeholder="Դեր" name="name" value="{{ old('name') }}" >

                            @error('name')
                                <div class="error_message">{{ $message }}</div>
                            @enderror
                            <div class="input_checkbox">
                                
                                @foreach($permission as $value)
                                    <label for="">
                                        <input type="checkbox" name="permission[]" value="{{ $value->id }}"> {{ $value->name }}
                                    </label>
                                @endforeach
                                @error('permission')
                                    <div class="error_message">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="buttons">
                                <a class="submit" href="{{route('roles.index')}}">Չեղարկել</a>
                                <input class="submit" type="submit" value="Պահպանել" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="tool">
            <div class="new_tool">
                <div class="add_tool">
                    <h3>Ավելացնել նոր գործիք</h3>
                </div>
                <form action="{{ route('permissions.store')}}" method="POST">
                    @csrf
                    <label for="">Գործիքի անունը*
                        <div class="input_error">
                            <input type="text" placeholder="Օգտատիրոջ հեռացում" name="permission_name" class=" @error('permission_name') error_border @enderror">
                            @error('permission_name')
                                <div class="error_message">{{ $message }}</div>
                            @enderror
                        </div>
                    </label>

                    <div class="tool_name">
                        <input type="submit" class="submit" value="Պահպանել" >
                    </div>
                </form>
            </div>
        </div>
    </section>

      {{-- ============== --}}
@endsection
