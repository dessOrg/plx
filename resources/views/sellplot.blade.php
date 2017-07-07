@extends('layouts.app')

@section('content')
<div class="">
@include('partials.nav')
<!-- Search page Interaction -->
<div class="search-interaction row-float" >
 <div class=" row-float" id="map-cotnent2">
  <div class="map-search-form row-float" style="padding-top:1px; " >
  <div class="container">
    <h2>Post Property Ads</h2>

    <div class="form-content form-cotent-map">
      <form class="form-1"  role="form" method="POST" action="{{ url('/addplot') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
          <div class="row pad-top-large">
            <div class="col-md-4">
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
             <select class="form-control" id="location" name="location" required="true" value="{{ old('location') }}" style="">
               <option  value="">Select city</option>
               <option  value="Mombasa">Mombasa</option>
               <option  value="Nairobi">Nairobi</option>
               <option  value="Kisumu">Kisumu</option>

             </select>
            </div>
            </div>
              <div class="col-md-4">
              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                  <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" placeholder="Address/Street" required="true">

                  @if ($errors->has('address'))
                      <span class="help-block">
                          <strong>{{ $errors->first('address') }}</strong>
                      </span>
                  @endif
              </div>
              </div>
                <div class="col-md-4">
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <input id="town" type="text" class="form-control" name="town" value="{{ old('town') }}" placeholder="Town" required="true">

                    @if ($errors->has('town'))
                        <span class="help-block">
                            <strong>{{ $errors->first('town') }}</strong>
                        </span>
                    @endif
                </div>
                </div>
          </div>
          <div class="row">
            <div class="col-md-4">
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <input id="price" type="text" class="form-control" name="price" value="{{ old('price') }}" placeholder="Price In Ksh" required="true">

                @if ($errors->has('price'))
                    <span class="help-block">
                        <strong>{{ $errors->first('price') }}</strong>
                    </span>
                @endif
            </div>
            </div>
              <div class="col-md-4">
              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                  <input id="size" type="text" class="form-control" name="size" value="{{ old('size') }}" placeholder="Size In Sqr feet" required="true">

                  @if ($errors->has('size'))
                      <span class="help-block">
                          <strong>{{ $errors->first('size') }}</strong>
                      </span>
                  @endif
              </div>
              </div>
                <div class="col-md-4">
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <input class="form-control" type="file" name="image" required="true">

                      @if ($errors->has('image'))
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
