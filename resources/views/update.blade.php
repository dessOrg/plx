@extends('layouts.app')

@section('content')
<div class="">
@include('partials.nav')
<!-- Search page Interaction -->
<div class="search-interaction row-float" >
 <div class=" row-float" id="map-cotnent2">
  <div class="map-search-form row-float" style="padding-top:1px; " >
  <div class="container">
    <h2>Update Property Add</h2>

    <div class="form-content form-cotent-map">
      <form class="form-1"  role="form" method="POST" action="{{ url('/editappert'.$property->id) }}" enctype="multipart/form-data">
        {{ csrf_field() }}
          <div class="row pad-top-large">
            <div class="col-md-3">
              <div class="col-md-12">
               <p>Type</p>
              </div>
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <input class="form-control" type="text"  id="category" name="category" required="true" value="{{ $property->category }}" style="">

              </select>
            </div>
            </div>
            <div class="col-md-3">
              <div class="col-md-12">
               <p>Location</p>
              </div>
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
             <input class="form-control" id="location" type="text"  name="location" required="true" value="{{$property->location}}" style="">

            </div>
            </div>
            <div class="col-md-2">
              <div class="col-md-12">
               <p>Bed</p>
              </div>
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <input class="form-control" id="bed" type="text"  name="bed" required="true" value="{{ $property->bed }}">

            </div>
            </div>
            <div class="col-md-2">
              <div class="col-md-12">
               <p>Bath</p>
              </div>
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <input class="form-control" id="bath" type="text"  name="bath" required="true" value="{{ $property->bath }}">

            </div>
            </div>
            <div class="col-md-2">
              <div class="col-md-12">
               <p>Parking</p>
              </div>
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <input class="form-control" id="parking" type="text"  name="parking" required="true" value="{{ $property->parking }}">

            </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-2">
              <div class="col-md-12">
               <p>Address</p>
              </div>
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <input id="address" type="text" class="form-control" name="address" value="{{ $property->address }}" placeholder="Address/Street" required="true">

                @if ($errors->has('address'))
                    <span class="help-block">
                        <strong>{{ $errors->first('address') }}</strong>
                    </span>
                @endif
            </div>
            </div>
              <div class="col-md-2">
                <div class="col-md-12">
                 <p>Town</p>
                </div>
              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                  <input id="town" type="text" class="form-control" name="town" value="{{ $property->town }}" placeholder="Town" required="true">

                  @if ($errors->has('town'))
                      <span class="help-block">
                          <strong>{{ $errors->first('town') }}</strong>
                      </span>
                  @endif
              </div>
              </div>
            <div class="col-md-2">
              <div class="col-md-12">
               <p>Price</p>
              </div>
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <input id="price" type="text" class="form-control" name="price" value="{{ $property->price }}" placeholder="Price In Ksh" required="true">

                @if ($errors->has('price'))
                    <span class="help-block">
                        <strong>{{ $errors->first('price') }}</strong>
                    </span>
                @endif
            </div>
            </div>
              <div class="col-md-3">
                <div class="col-md-12">
                 <p>Size</p>
                </div>
              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                  <input id="size" type="text" class="form-control" name="size" value="{{ $property->size }}" placeholder="Size In Sqr feet" required="true">

                  @if ($errors->has('size'))
                      <span class="help-block">
                          <strong>{{ $errors->first('size') }}</strong>
                      </span>
                  @endif
              </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-5">
              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <div class="col-md-12">
                 <p>Description</p>
                </div>
                  <textarea id="description" class="form-control ckeditor" name="description">{{ $property->description }}</textarea>

                     @if ($errors->has('description'))
                       <span class="help-block">
                       <strong>{{ $errors->first('description') }}</strong>
                       </span>
                     @endif
              </div>
              </div>
            <div class="col-md-5 pad-top-small">
              <button class="btn btn-dark btn-large pull-right hvr-shutter-out-vertical">Edit property</button>
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
