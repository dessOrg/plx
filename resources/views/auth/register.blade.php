@extends('layouts.app')

@section('content')
<div class="">
  @include('partials.nav')
<!-- Page layout -->
<section class="content-section">
  <div class="container">
    <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li><a href="#">Page</a></li>
          <li class="active">Register</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                            <div class="col-md-12">
                              <div><h3>Personal Details</h3></div><hr>
                              <div class="col-md-6">

                      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                          <label for="fname" class="col-md-12 control-label">First Name</label>

                          <div class="col-md-12">
                              <input id="fname" type="text" class="form-control" name="fname" value="{{ old('fname') }}">

                              @if ($errors->has('fname'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('fname') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  <label for="email" class="col-md-12 control-label">E-Mail Address</label>

                  <div class="col-md-12">
                      <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                      @if ($errors->has('email'))
                          <span class="help-block">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <label for="password" class="col-md-12 control-label">Password</label>

                <div class="col-md-12">
                  <input id="password" type="password" class="form-control" name="password">

                    @if ($errors->has('password'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                   @endif
                </div>
            </div>

            </div>
          <div class="col-md-6">

                          <div class="form-group{{ $errors->has('lname') ? ' has-error' : '' }}">
                              <label for="lname" class="col-md-12 control-label">Last Name</label>

                              <div class="col-md-12">
                                  <input id="lname" type="text" class="form-control" name="lname" value="{{ old('lname') }}">

                                  @if ($errors->has('lname'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('lname') }}</strong>
                                      </span>
                                  @endif
                              </div>
                                </div>

                        <div class="form-group{{ $errors->has('phoneno') ? ' has-error' : '' }}">
                            <label for="phoneno" class="col-md-12 control-label">Mobile No</label>

                            <div class="col-md-12">
                                <input id="phoneno" type="text" class="form-control" name="phoneno" value="{{ old('phoneno') }}">

                                @if ($errors->has('phoneno'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phoneno') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <label for="password-confirm" class="col-md-12 control-label">Confirm Password</label>

                        <div class="col-md-12">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                                  </div>
                                </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
