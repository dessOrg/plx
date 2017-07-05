@extends('layouts.app')

@section('content')
<div class="">
@include('partials.nav')
<!-- Search page Interaction -->
<div class="search-interaction row-float" >
 <div class=" row-float" id="map-cotnent2">
  <div class="map-search-form row-float" style="padding-top:1px; " >
  <div class="container">
    <h2>Post Property Add</h2>

    <div class="form-content form-cotent-map">
      <form class="form-1"  role="form" method="POST" action="{{ url('/addappert') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
          <div class="row pad-top-large">
            <div class="col-md-3">
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <select class="form-control" id="category" name="category" required="true" value="{{ old('category') }}" style="">
                <option value="">Property Types</option>
                <option value="Appertment">Appertment</option>
                <option value="House">House</option>
              </select>
            </div>
            </div>
            <div class="col-md-3">
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
             <select class="form-control" id="location" name="location" required="true" value="{{ old('location') }}" style="">
               <option  value="">Select city</option>
               <option  value="Mombasa">Co-operate</option>
               <option  value="Nairobi">Nairobi</option>
               <option  value="Kisumu">Kisumu</option>

             </select>
            </div>
            </div>
            <div class="col-md-2">
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <select class="form-control" id="bed" name="bed" required="true" value="{{ old('bed') }}">
                <option value="">Bedrooms</option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
            </div>
            <div class="col-md-2">
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <select class="form-control" id="bath" name="bath" required="true" value="{{ old('bath') }}">
                <option value="">Bathrooms</option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
            </div>
            <div class="col-md-2">
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <select class="form-control" id="parking" name="parking" required="true" value="{{ old('parking') }}">
                <option value="">Parking</option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-2">
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" placeholder="Address/Street" required="true">

                @if ($errors->has('address'))
                    <span class="help-block">
                        <strong>{{ $errors->first('address') }}</strong>
                    </span>
                @endif
            </div>
            </div>
              <div class="col-md-2">
              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                  <input id="town" type="text" class="form-control" name="town" value="{{ old('town') }}" placeholder="Town" required="true">

                  @if ($errors->has('town'))
                      <span class="help-block">
                          <strong>{{ $errors->first('town') }}</strong>
                      </span>
                  @endif
              </div>
              </div>
            <div class="col-md-2">
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <input id="price" type="text" class="form-control" name="price" value="{{ old('price') }}" placeholder="Price In Ksh" required="true">

                @if ($errors->has('price'))
                    <span class="help-block">
                        <strong>{{ $errors->first('price') }}</strong>
                    </span>
                @endif
            </div>
            </div>
              <div class="col-md-3">
              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                  <input id="size" type="text" class="form-control" name="size" value="{{ old('size') }}" placeholder="Size In Sqr feet" required="true">

                  @if ($errors->has('size'))
                      <span class="help-block">
                          <strong>{{ $errors->first('size') }}</strong>
                      </span>
                  @endif
              </div>
              </div>
                <div class="col-md-3">
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <input class="form-control" type="file" name="file" required="true">

                      @if ($errors->has('file'))
                        <span class="help-block">
                        <strong>{{ $errors->first('file') }}</strong>
                        </span>
                      @endif
                </div>
                </div>
            </div>
            <div class="row">
              <div class="col-md-5">
              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                  <textarea id="description" class="form-control ckeditor" name="description"></textarea>

                     @if ($errors->has('description'))
                       <span class="help-block">
                       <strong>{{ $errors->first('description') }}</strong>
                       </span>
                     @endif
              </div>
              </div>
            <div class="col-md-5 pad-top-small">
              <button class="btn btn-dark btn-large pull-right hvr-shutter-out-vertical">Post property</button>
            </div>

            </div>

      </form>
    </div>

    </div>
</div>
</div>
<!-- Map Search // -->
</div>
<!-- Search page Interaction // -->



</div>
@endsection
