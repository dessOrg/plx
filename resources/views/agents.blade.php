@extends('layouts.app')

@section('content')
<div class="">
  @include('partials.nav')
<!-- Page layout -->
<!-- Page layout -->
<!-- Team -->
<section class="content-section">
  <div class="container">
    <div class="title-row heading">
      <div class="col-md-12">
        <h1>meet our agents</h1>
      </div>
    </div>
    <div class="row pad-top-small">
       <div class="agents-grid-view">
         @foreach($agents as $key)
        <div class="agent">
            <div class="data">
              <img src="images/agents-2/agent-1.jpg" height="226" width="263" alt="">
              <div class="meta">
                <h2><a class="" href="{{url('/agent'.$key->id)}}">{{ $key->fname}} {{ $key->lname}}</a></h2>
                <p></p>
                <p class="text-right"><a href="{{url('/agent'.$key->id)}}" class="iconic "><i class="fa fa-arrow"></i></a></p>
              </div>
          </div>
        </div>
        @endforeach

       </div>
    </div>
  </div>
</section>
<!-- Team // -->

</div>
@endsection
