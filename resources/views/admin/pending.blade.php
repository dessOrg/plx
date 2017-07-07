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
          <li class="active">Pending </li>
    </ol>
    <div class="title-row heading">
      <div class="col-md-12">
        <h1>Properties List</h1>
      </div>
    </div>
    <div class="page-layout two-column sidebar-right">
      <main id="main" class="main">
     <!-- Properties Filter -->
    <div class="properties-filter">
    <div class="dropdown filter_menu2">
      <div class="toggle-prop-menu" data-toggle="dropdown">
       All Actions
        <span class="caret"></span>
      </div>
      <ul class="dropdown-menu filter_menu">
       <li role="presentation" data-value="all">All Actions</li>
       <li role="presentation" data-value="rentals">Rentals (7)</li>
       <li role="presentation" data-value="sales">Sales (9)</li>
     </ul>
    </div>
    <div class="dropdown filter_menu2">
      <div class="toggle-prop-menu" data-toggle="dropdown" >
        City
        <span class="caret"></span>
      </div>
     <ul class="dropdown-menu filter_menu" role="menu">
      <li role="presentation" data-value="all">All Types</li><li role="presentation" data-value="apartments">Apartments (4)</li><li role="presentation" data-value="condos">Condos (1)</li><li role="presentation" data-value="houses">Houses (2)</li><li role="presentation" data-value="industrial">Industrial (1)</li><li role="presentation" data-value="land">Land (2)</li><li role="presentation" data-value="offices">Offices (1)</li><li role="presentation" data-value="retail">Retail (3)</li><li role="presentation" data-value="villas">Villas (2)</li>
    </ul>
    </div>
    </div>
    <!-- Properties Filter -->
    <div class="row-float pad-top-large">
      <div class="grid-box-all row">
        @foreach($properties as $key)
        <div class="grid-box">
          <div class="image ">
          <span class="box-type"><span class="text">Sale</span></span>
            <img src="https://s3.eu-west-2.amazonaws.com/plx254{{ $key->image }}" alt="" height="234" width="360">
          </div>
          <div class="description">
            <h3><span class="type">{{ $key->category }}:</span>
            {{ $key->address }},{{ $key->town }}
            {{ $key->location }}</h3>
            <p class="meta-list"><span class="meta">Bed : {{ $key->bed }}</span>
              <span class="meta"> Parking : {{ $key->parking }} </span>
              <span class="meta">   Bath : {{ $key->bath }} </span>
              <span class="meta">   {{ $key->size }}</span></p>
            <span class="price">Ksh.{{ $key->price }}</span>
            <a class="link-arrow iconic iconic-arrow-forward" href="{{ url('prop'. $key->id) }}"></a>
          </div>
        </div>
        @endforeach
      </div>
      <div class="row-float text-center">
        <ul class="pagination">
          <li>
            <a href="#" aria-label="Previous">
              <span aria-hidden="true">«</span>
            </a>
          </li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li>
            <a href="#" aria-label="Next">
              <span aria-hidden="true">»</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
    </main>
    <!-- Sidebar  -->
    <aside class="sidebar" id="sidebar">
      <!-- Search  -->
      <div class="widget widget-search">
        <h4>Advanced Search</h4>
        <div class="form-content">
        <form class="pad-top-small">
        <div class="dropdown filter_menu2">
          <div class="toggle-prop-menu" data-toggle="dropdown">
           All Actions
            <span class="caret"></span>
          </div>
          <ul class="dropdown-menu filter_menu">
           <li role="presentation" data-value="all">All Actions</li>
           <li role="presentation" data-value="rentals">Rentals (7)</li>
           <li role="presentation" data-value="sales">Sales (9)</li>
           </ul>
        </div>
         <div class="dropdown filter_menu2">
          <div class="toggle-prop-menu" data-toggle="dropdown">
           City
            <span class="caret"></span>
          </div>
          <ul class="dropdown-menu filter_menu">
           <li role="presentation" data-value="all">All</li>
           <li role="presentation" data-value="rentals">California (7)</li>
           <li role="presentation" data-value="sales">New york (9)</li>
           </ul>
        </div>
        <div class="form-group">
         <div  class="no-slider">
            <span class="info">
            <span class="min">Minimum</span>
            <span class="max pull-right">Max</span>
            </span>
            </div>
            <div id="slider-tooltip1" class="slider-tooltip">
            </div>
        </div>
         <div class="form-group">
           <input type="text" placeholder="Bedroom" class="form-control">
         </div>
         <div class="form-group">
           <button class="pull-right btn btn-primary btn-block">Submit</button>
         </div>
       </form>
       </div>
      </div>
      <!-- Search // -->
     <div class="widget">
      <h4>Contact</h4>
        <div class="widget-content">
         <p>
           Email: <a href="mailto:info@example.com" class="">info@example.com</a>
          25, dapibus Street, velit <br>
          California, US <br>
          Phone: 900 123 3456 <br>
          Fax: 900 123 3456 <br>
         </p>
        </div>
      </div>
     <div class="widget get-estimation">
      <h4>Estimate your home</h4>
        <form class="pad-top-small" data-parsley-validate>
         <div class="form-group">
           <input type="text" placeholder="Name" class="form-control" required name="name">
         </div>
         <div class="form-group">
           <input type="email" placeholder="Email id" class="form-control" required name="email">
         </div>
        <div class="form-group clearfix">
           <button class="pull-right btn btn-primary btn-block hvr-shutter-out-vertical">Get Estimation</button>
         </div>
         <div class="form-messges hidden">
          <p>Form submitted successfully.</p>
         </div>
        </form>
      </div>

    </aside>
    <!-- Sidebar //  -->
    </div>
  </div>
</section>
<!-- Page layout // -->

</div>
@endsection
