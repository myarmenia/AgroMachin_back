@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/users/users.css') }}" >
    <link rel="stylesheet" href="{{ asset('assets/css/users/media.css') }}" >
@endsection

@section('content')
    {{-- <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create New User</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
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



    {!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Password:</strong>
                {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Confirm Password:</strong>
                {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Role:</strong>
                {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    {!! Form::close() !!} --}}

    <section class="right-section">
        <div class="right-sectionChild">
          <div class="app">
            <div class="new_user">
              <div class="create_user">
                <h3>Ստեղծել նոր օգտատեր</h3>
              </div>
              <form action="" class="user_form">
                <div class="place flex">
                  <p>Հաշվառման վայր</p>
                  <select name="" class="select" id="">
                    <option value="">Երևան</option>
                    <option value="">Շիրակի մարզ</option>
                    <option value="">Լոռու մարզ</option>
                    <option value="">Տավուշի մարզ</option>
                    <option value="">Արագածոտնի մարզ</option>
                    <option value="">Արարատի մարզ</option>
                    <option value="">Գեղարքունիքի մարզ</option>
                    <option value="">Վայոց Ձորի մարզ</option>
                    <option value="">Կոտայքի մարզ</option>
                    <option value="">Արմավիրի մարզ</option>
                    <option value="">Սյունիքի մարզ</option>
                  </select>
                </div>
                <div class="name flex">
                  <p>Անուն*</p>
                  <input type="text" placeholder="Անուն" />
                </div>
                <div class="surname flex">
                  <p>Ազգանուն*</p>
                  <input type="text" placeholder="Ազգանուն" />
                </div>
                <div class="fatherland flex">
                  <p>Հայրանուն*</p>
                  <input type="text" placeholder="Հայրանուն" />
                </div>
                <div class="email flex">
                  <p>Էլ. հասցե*</p>
                  <input type="email" />
                </div>
                <div class="password flex">
                  <p>Գաղտնաբառ*</p>
                  <input type="password" />
                </div>
                <div class="confirm_password flex">
                  <p>Գաղտնաբառի հաստատում*</p>
                  <input type="password" />
                </div>
                <div class="role flex">
                  <p>Դեր*</p>
                  <select name="" id="">
                    <option value="">Օգտատեր</option>
                  </select>
                </div>
                <div class="language flex">
                  <p>Լեզու*</p>
                  <select name="" id="">
                    <option value="">Հայերեն</option>
                    <option value="">Ռուսերեն</option>
                    <option value="">Անգլերեն</option>
                  </select>
                </div>
                <div class="status flex">
                  <p>Կարգավիճակ*</p>
                  <label class="toggle">
                    <input class="toggle-checkbox" type="checkbox" />
                    <div class="toggle-switch"></div>
                  </label>
                </div>
                <div class="buttons">
                  <button class="button1">Չեղարկել</button>
                  <button class="button2">Պահպանել</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>


@endsection
