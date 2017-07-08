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
    @if(Auth::guest())
    @elseif(Auth::user()->role === 'normal')
    @if($property->status === 'pending')
    @if($property->pay === '0')
    <div class="title-row heading">
      <div class="col-md-12">
        <div class="col-md-6">
        <h3>One More Step. </h3>
        <ul>
          <li>Go to Mpesa menu</li>
          <li>Lipa Na mpesa.</li>
          <li>Buy Goods</li>
          <li>Enter Till No: <em>123456</em></li>
          <li>Enter Amount : Ksh. 2000</li>
          <li>Then Paste your Mpesa code on the payment form.</li>
          <li>Enter the phone No you used to pay.</li>
          <li>Hit submit and wait for the verifications.</li>
          <li>Your ad will be live after verifications.</li>
          <li>Cheers!!!</li>
        </ul>
        <h5>Remember Wrong submission of details or underpayment could lead to immediate blocking of your account.</h5>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">PAYMENT FORM</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/pay'.$property->id) }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                            <label for="code" class="col-md-4 control-label">M-Pesa Code</label>

                            <div class="col-md-6">
                                <input id="code" type="text" class="form-control" name="code" value="{{ old('code') }}">

                                @if ($errors->has('code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('code') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phoneno') ? ' has-error' : '' }}">
                            <label for="phoneno" class="col-md-4 control-label">Mobile No:</label>

                            <div class="col-md-6">
                                <input id="phoneno" type="text" class="form-control" name="phoneno" value="{{ old('phoneno') }}">

                                @if ($errors->has('phoneno'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phoneno') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> SUBMIT
                                </button>


                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>

      </div>
    </div>
    @else
    <div class="title-row heading">
      <div class="col-md-12" style="color:green;">
       <p>Your payment has been received and is being processed. It may take a while.</p>
      </div>
    </div>
    @endif
    @endif
    @endif
    <!-- Properties  Details -->
    <div class="row pad-top-large">
    <div class="col-sm-12 content-table">
       <div class="content-back row-float">
       <div class="col-md-6 content-table-image">
       <div class="owlCarousel properties-slider">
        <div class="item"><img src="https://s3.eu-west-2.amazonaws.com/plx254{{ $property->image}}" height="577" width="570" alt=""></div>
        @foreach($images as $key)
        <div class="item"><img class="lazyOwl" src="https://s3.eu-west-2.amazonaws.com/plx254{{ $key->image}}" height="577" width="570" alt=""></div>
        @endforeach
      </div>
       </div>
        <div class="col-md-6 pull-right contents grid-gap-large">
          @if(Auth::guest())
          @else
           @if(Auth::user()->role === 'Admin')
          <div class="pad-top-small">
            <a href="{{ url('/block'.$property->id)}}"><span class="btn btn-primary ">Block</span></a>
            @if($property->status === "pending")
            <a href="{{ url('/verify'.$property->id)}}"><span class="btn btn-default ">Verify</span></a>
            @endif
          </div>
          <div>Mpesa code:{{$property->code}}, Phone No:{{$property->phoneno}}</div>
          @endif

            @if($property->user_id == Auth::user()->id)
            <div class="pad-top-small">
              @if($property->category == 'Plot')
              <a href="{{ url('/editplot'.$property->id)}}"><span class="btn btn-primary "><i class="fa fa-edit"></i></span></a>
              @lse
              <a href="{{ url('/editappert'.$property->id)}}"><span class="btn btn-primary "><i class="fa fa-edit"></i></span></a>
              @endif
              <a href="{{ url('/image'.$property->id)}}"><span class="btn btn-default ">Add Images</span></a>
              <a href="{{ url('/del'.$property->id)}}"><span class="btn btn-danger "><i class="fa fa-remove"></i></span></a>
              @if($property->status === 'Active')
              <a href="{{ url('/sold'.$property->id)}}"><span class="btn btn-default ">Mark As Sold</span></a>
              @endif
            </div>
            @endif

          @endif
          <div class="heading pad-top-large">
          <h4>{{ $property->address}} {{ $property->town}}, {{ $property->location}} </h4>
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
            <img src="/images/properties-details/agents-1.jpg" height="278" width="330" alt="">
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
            <h5>Contact {{$user->fname}} {{$user->lname}}  </h5>
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
