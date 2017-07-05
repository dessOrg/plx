@extends('layouts.app')

@section('content')
<div class="">
@include('partials.nav')
<!-- Search page Interaction -->
<div class="search-interaction row-float">
 <a class="tab row-float collapsed" data-toggle="collapse" href="#map-cotnent2">
 <span class="container">
 Search Property <span class="iconic  pull-right"></span>
 </span>
 </a>
 <!-- Map Search -->
 <div class="collapse row-float" id="map-cotnent2">
  <div class="map-search-form row-float" >
  <div class="container">
    <h2>Advanced search option</h2>
    <div class="row pad-top-large">
      <div class="form-tab">
        <a class="active"  href="#form-1">All</a>
        <a href="#form-2">Sell</a>
        <a href="#form-3">Rent</a>
      </div>
    </div>
    <div class="form-content form-cotent-map">
      <form class="form-1" id="form-1">
          <div class="row pad-top-large">
            <div class="col-md-3">
            <div class="form-group has-feedback">
              <select class="form-control">
                <option value="">Property Types</option>
              </select>
            </div>
            </div>
            <div class="col-md-3">
            <div class="form-group has-feedback">
              <select class="form-control">
                <option value="">Select city</option>
              </select>
            </div>
            </div>
            <div class="col-md-3">
            <div class="form-group has-feedback">
              <select class="form-control">
                <option value="">Bedrooms</option>
              </select>
            </div>
            </div>
            <div class="col-md-3">
            <div class="form-group has-feedback">
              <select class="form-control">
                <option value="">Bathrooms</option>
              </select>
            </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <p>Select your price range</p>
            </div>
            <div class="col-md-2">
            <div class="form-group has-feedback">
              <select class="form-control">
                <option value="">Mini</option>
              </select>
            </div>
            </div>
            <div class="col-md-2">
            <div class="form-group has-feedback">
              <select class="form-control">
                <option value="">Max</option>
              </select>
            </div>
            </div>
            <div class="col-md-5">
            <div  class="no-slider">
            <span class="info">
            <span class="min">Minimum</span>
            <span class="max pull-right">Max</span>
            </span>
            </div>
            <div class="slider-tooltip">
            </div>
            </div>
            <div class="col-md-3">
              <select class="form-control">
                <option value="">Square feet</option>
              </select>
            </div>
            </div>
          <div class="row-float pad-top-small">
            <button class="btn btn-dark btn-large pull-right hvr-shutter-out-vertical">Find property</button>
          </div>

      </form>
      <form class="form-1 hidden" id="form-2">
          <div class="row pad-top-large">
            <div class="col-md-3">
            <div class="form-group has-feedback">
              <select class="form-control">
                <option value="">Property Types</option>
              </select>
            </div>
            </div>
            <div class="col-md-3">
            <div class="form-group has-feedback">
              <select class="form-control">
                <option value="">Select city</option>
              </select>
            </div>
            </div>
            <div class="col-md-3">
            <div class="form-group has-feedback">
              <select class="form-control">
                <option value="">Bedrooms</option>
              </select>
            </div>
            </div>
            <div class="col-md-3">
            <div class="form-group has-feedback">
              <select class="form-control">
                <option value="">Bathrooms</option>
              </select>
            </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <p>Select your price range</p>
            </div>
            <div class="col-md-2">
            <div class="form-group has-feedback">
              <select class="form-control">
                <option value="">Mini</option>
              </select>
            </div>
            </div>
            <div class="col-md-2">
            <div class="form-group has-feedback">
              <select class="form-control">
                <option value="">Max</option>
              </select>
            </div>
            </div>
            <div class="col-md-5">
            <div  class="no-slider">
            <span class="info">
            <span class="min">Minimum</span>
            <span class="max pull-right">Max</span>
            </span>
            </div>
            <div id="slider-tooltip2" class="slider-tooltip">
            </div>
            </div>
            <div class="col-md-3">
              <select class="form-control">
                <option value="">Square feet</option>
              </select>
            </div>
            </div>
          <div class="row-float pad-top-small">
            <button class="btn btn-dark btn-large pull-right hvr-shutter-out-vertical">Find property</button>
          </div>

      </form>
      <form class="form-1 hidden" id="form-3">
          <div class="row pad-top-large">
            <div class="col-md-3">
            <div class="form-group has-feedback">
              <select class="form-control">
                <option value="">Property Types</option>
              </select>
            </div>
            </div>
            <div class="col-md-3">
            <div class="form-group has-feedback">
              <select class="form-control">
                <option value="">Select city</option>
              </select>
            </div>
            </div>
            <div class="col-md-3">
            <div class="form-group has-feedback">
              <select class="form-control">
                <option value="">Bedrooms</option>
              </select>
            </div>
            </div>
            <div class="col-md-3">
            <div class="form-group has-feedback">
              <select class="form-control">
                <option value="">Bathrooms</option>
              </select>
            </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <p>Select your price range</p>
            </div>
            <div class="col-md-2">
            <div class="form-group has-feedback">
              <select class="form-control">
                <option value="">Mini</option>
              </select>
            </div>
            </div>
            <div class="col-md-2">
            <div class="form-group has-feedback">
              <select class="form-control">
                <option value="">Max</option>
              </select>
            </div>
            </div>
            <div class="col-md-5">
            <div  class="no-slider">
            <span class="info">
            <span class="min">Minimum</span>
            <span class="max pull-right">Max</span>
            </span>
            </div>
            <div id="slider-tooltip3" class="slider-tooltip">
            </div>
            </div>
            <div class="col-md-3">
              <select class="form-control">
                <option value="">Square feet</option>
              </select>
            </div>
            </div>
          <div class="row-float pad-top-small">
            <button class="btn btn-dark btn-large pull-right hvr-shutter-out-vertical">Find property</button>
          </div>

      </form>
    </div>

    </div>
</div>
</div>
<!-- Map Search // -->
</div>
<!-- Search page Interaction // -->

<!-- Content Section -->
<section class="content-section">
  <div class="container">
    <div class="title-row heading">
      <div class="col-xs-12">
        <h2>Your dream <br>
        homes</h2>
        <p>Your search result IS listed here</p>
        <span class="iconic iconic-search"></span>
      </div>
    </div>
    <div class="content-box">
      <div class="col-md-12">
      <p class="content-info"><span class="iconic iconic-grid"></span>Grid view</p>
      </div>
      <!-- Grid view -->
      <div class="grid-box-all row-float pad-top-large">
        <div class="grid-box wow fadeInUp2" data-wow-delay="500ms">
          <div class="image">
          <span class="box-type"><span class="text">Sale</span></span>
            <img src="../public/images/property/home-1.jpg" alt="" height="234" width="360">
          </div>
          <div class="description">
            <h3><span class="type">Appertment:</span>
            5111 140th Ave NE Bellevue,
            WA 98005</h3>
            <p class="meta-list"><span class="meta">Bed : 3</span>
              <span class="meta"> Parking : 1 </span>
              <span class="meta">   Bath : 1 </span>
              <span class="meta">   1500 sq ft</span></p>
            <span class="price">$75000</span>
            <a class="link-arrow iconic iconic-arrow-forward" href="#"></a>
          </div>
        </div>
        <div class="grid-box wow fadeInUp2" data-wow-delay="600ms">
          <div class="image">
          <span class="box-type"><span class="text">Rent</span></span>
            <img src="../public/images/property/home-2.jpg" alt="" height="234" width="360">
          </div>
          <div class="description">
            <h3><span class="type">Appertment:</span>
            5111 140th Ave NE Bellevue,
            WA 98005</h3>
            <p class="meta-list"><span class="meta">Bed : 3</span>
              <span class="meta"> Parking : 1 </span>
              <span class="meta">   Bath : 1 </span>
              <span class="meta">   1500 sq ft</span></p>
            <span class="price">$75000</span>
            <a class="link-arrow iconic iconic-arrow-forward" href="#"></a>
          </div>
        </div>
        <div class="grid-box wow fadeInUp2" data-wow-delay="700ms">
          <div class="image">
          <span class="box-type red"><span class="text">Rent</span></span>
            <img src="../public/images/property/home-3.jpg" alt="" height="234" width="360">
          </div>
          <div class="description">
            <h3><span class="type">Appertment:</span>
            5111 140th Ave NE Bellevue,
            WA 98005</h3>
            <p class="meta-list"><span class="meta">Bed : 3</span>
              <span class="meta"> Parking : 1 </span>
              <span class="meta">   Bath : 1 </span>
              <span class="meta">   1500 sq ft</span></p>
            <span class="price">$75000</span>
            <a class="link-arrow iconic iconic-arrow-forward" href="#"></a>
          </div>
        </div>
      </div>
      <!-- Grid view // -->


      <div class="pad-top-small col-xs-12">
        <a href="#" class="btn btn-danger btn-large pull-right hvr-shutter-out-vertical">View more results</a>
      </div>
    </div>
  </div>
</section>
<!-- Content Section // -->

</div>
@endsection
