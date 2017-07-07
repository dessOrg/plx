@extends('layouts.app')

@section('content')
<div class="">
  @include('partials.nav')
<!-- Page layout -->
<!-- Page layout -->
<section class="content-section">
  <div class="container">
    <div class="title-row heading">
      <div class="col-md-12">
        <h1>{{ $agent->fname}} folio</h1>
        <p>know me more</p>
      </div>
    </div>
    <!-- Agents description -->
    <div class="content-panel agent-descriptions">
    <div class="agent-image image-block align-left">
      <img src="images/agents-2/agent-1.jpg" height="226" width="263" alt="">
    </div>
      <div class="agent-bio">
      <h2 class="content-panel-heading">{{ $agent->fname}} {{ $agent->lname}}</h2>
      <div class="contents">
        <p></p>
    </div>
       </div>
    </div>
     <!-- Agents description // -->
    <!-- Agents Portfolio -->
    <div class="content-panel agents-portfolio">
      <h2 class="content-panel-heading">{{ $agent->fname}}’s portfolio</h2>
      <div class="project-list">
        @foreach($properties as $key)
        <div class="project">
          <div class="data">
          <a href="#">
          <img src="https://s3.eu-west-2.amazonaws.com/plx254{{ $key->image}}" height="205" width="262" alt="">
          <span class="meta-list3">
            <span class="title">{{ $key->address}} {{$key->town}}</span>
            <span class="status sold">Sold</span>
          </span>
          </a>
          </div>
        </div>
        @endforeach


      </div>
    </div>
    <!-- Agents Portfolio // -->
    <!-- Agents Contact Form -->
    <div class="content-panel agents-contact">
      <h2 class="content-panel-heading">Contact jhon doe</h2>
      <form class="row" data-parsley-validate>
        <div class="col-md-3 form-group">
          <input type="text" class="form-control input-lg" placeholder="Name" required data-parsley-required-message="Please insert your name" name="name">
        </div>
        <div class="col-md-3 form-group">
          <input type="email" class="form-control input-lg" placeholder="E-mail ID" required data-parsley-required-message="Please insert your Email" name="email">
        </div>
        <div class="col-md-3 form-group">
          <input type="text" class="form-control input-lg" placeholder="Contact no" required data-parsley-required-message="Please insert your contact no" data-parsley-min="10" name="contact">
        </div>
        <div class="col-md-3 form-group">
          <input type="text" class="form-control input-lg" placeholder="Enter your place" required name="location">
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <textarea class="form-control" rows="4" placeholder="Enter your questions and queries" required data-parsley-minlength="20" data-parsley-minlength-message = "Come on! You need to enter at least a 20 character comment.."  data-parsley-validation-threshold="10" data-parsley-maxlength="100" name="message"></textarea>
          </div>
          <div class="form-group text-right">
          <button class="btn btn-primary">submit</button>
        </div>
        </div>
        <div class="text-success text-center col-xs-12 hidden form-messges">
          <p>We will responce as soon as possible.</p>
        </div>

      </form>

    </div>

    <!-- Agents Contact Form // -->
  </div>
</section>

</div>
@endsection
