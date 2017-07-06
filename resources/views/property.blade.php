@extends('layouts.app')

@section('content')
<div class="">
  @include('partials.nav')
<!-- Page layout -->
<section class="content-section">
  <div class="container">
    <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li><a href="#">Search page</a></li>
          <li class="active">Selected property</li>
    </ol>
    <div class="title-row heading">
      <div class="col-md-12">
        <h1>Truly Modern Living</h1>
        <p>in your city just click on the availabe icons</p>
      </div>
    </div>
    <!-- Properties  Details -->
    <div class="row pad-top-large">
    <div class="col-sm-12 content-table">
       <div class="content-back row-float">
       <div class="col-md-6 content-table-image">
       <div class="owlCarousel properties-slider">
        <div class="item"><img src="..{{ $property->image}}" height="577" width="570" alt=""></div>
        <div class="item"><img class="lazyOwl" src="..{{ $property->image}}" height="577" width="570" alt=""></div>
        <div class="item"><img class="lazyOwl" src="images/properties-details/properties-1.jpg" height="577" width="570" alt=""></div>
        <div class="item"><img class="lazyOwl" src="images/properties-details/properties-1.jpg" height="577" width="570" alt=""></div>
        <div class="item"><img class="lazyOwl" src="images/properties-details/properties-1.jpg" height="577" width="570" alt=""></div>
        </div>
       </div>
        <div class="col-md-6 pull-right contents grid-gap-large">
          @if(Auth::guest())
          @elseif(Auth::user()->role === 'Admin')
          <div class="pad-top-small">
            <a href="{{ url('/block'.$property->id)}}"><span class="btn btn-primary ">Block</span></a>
            @if($property->status === "pending")
            <a href="{{ url('/verify'.$property->id)}}"><span class="btn btn-default ">Verify</span></a>
            @endif
          </div>
          @elseif(Auth::user()->role === 'normal')
            @if(Auth::user()->id === $property->user_id)
            <div class="pad-top-small">
              <a href="{{ url('/editappert'.$property->id)}}"><span class="btn btn-primary "><i class="fa fa-edit"></i></span></a>
              <a href="{{ url('/image'.$property->id)}}"><span class="btn btn-default ">Add Images</span></a>
              <a href="{{ url('/del'.$property->id)}}"><span class="btn btn-danger "><i class="fa fa-remove"></i></span></a>
              @if($property->status === 'Active')
              <a href="{{ url('/sold'.$property->id)}}"><span class="btn btn-default ">Mark As Sold</span></a>
              @endif
            </div>
            @endif
          @endif
          <div class="heading pad-top-large">
          <h4>{{ $property->address}} {{ $property->town}}, {{ $property->location}}</h4>
          </div>
          <div class="pad-top-small">
            <span class="btn btn-primary ">Rent</span>
            <span class="btn btn-primary btn-danger ">Ksh. {{ $property->price}}</span>
          </div>
          <div class="pad-top-small meta-list">
          <span class="meta">Bed : {{ $property->bed}}</span>
          <span class="meta">Parking : {{ $property->parking}}</span>
          <span class="meta">Bath : {{ $property->bath}}</span>
          <span class="meta">{{ $property->size}}</span>
          </div>
          <p>{{ $property->description}}. </p>
          <div class="meta pad-top-large pad-bottom-small">
            <span class="meta-list2">
              <span class="meta"><span class="iconic iconic-heart"></span>1129 likes</span>
               <span class="meta"><span class="iconic iconic-mode-comment"></span>78 comments</span>
            </span>
          </div>
        </div>
       </div>
     </div>
     </div>
     <!-- Properties  Details -->

     <!-- Properties description // -->
    <!-- Contact To Agent -->
    <div class="title-row heading pad-top-large">
      <div class="col-md-12">
        <h2>meet the agent</h2>
        <p>chat online with them  for your dream home</p>
      </div>
    </div>
    <div class="row pad-top-small layout-flex">
      <div class="col-md-4">
        <div class="content-box-2">
          <figure class="image-box">
            <img src="../public/images/properties-details/agents-1.jpg" height="278" width="330" alt="">
          </figure>
          <div class="contents">
            <h3 class="heading-style-1">{{$user->fname}} {{$user->lname}}</h3>
            <p>here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly. </p>
            <p class="text-right"><a href="#" class="btn btn-large btn-primary">Know more</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="content-box-2 agents-contact">
          <div class="heading">
            <h5>Contact {{$user->fname}} {{$user->lname}}</h5>
          </div>
          <form class="form-content pad-top-small" data-parsley-validate>
            <div class="row">
              <div class="col-md-6 form-group-1">
                <input type="text" class="form-control input-lg" placeholder="Name" required data-parsley-required-message="Please insert your name" name="name">
              </div>
              <div class="col-md-6 form-group-1">
                <input type="text" class="form-control input-lg" placeholder="E-mail ID" required data-parsley-required-message="Please insert your Email" name="email">
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 form-group-1">
                <input type="text" class="form-control input-lg" placeholder="Contact no" required data-parsley-required-message="Please insert your contact no" data-parsley-min="10" name="contact">
              </div>
              <div class="col-md-6 form-group-1">
                <input type="text" class="form-control input-lg" placeholder="Enter your place" required name="location">
              </div>
            </div>
            <div class="row">
              <div class="form-group-1 col-md-12">
                <textarea class="form-control" placeholder="Enter your questions and queries" rows="3"  required data-parsley-minlength="20" data-parsley-minlength-message = "Come on! You need to enter at least a 20 character comment.."  data-parsley-validation-threshold="10" data-parsley-maxlength="100" name="message"></textarea>
              </div>
            </div>
            <div class="row pad-top-small">
              <div class="col-md-12">
                <button class="btn btn-primary btn-large pull-right">Submit</button>
              </div>
              <div class="text-success col-xs-12 hidden form-messges text-center">
              <p>We will responce as soon as possible.</p>
            </div>
            </div>

          </form>
          <div class="info-box-1">
            <h5><span>Or call the agent</span></h5>
            <p><span class="large-text-1"><span class="iconic-phone-square"></span>{{$user->phoneno}}</span> </p>
          </div>
        </div>
      </div>
    </div>
    <!-- Contact To Agent // -->

  </div>
</section>
<!-- Page layout // -->

</div>
@endsection