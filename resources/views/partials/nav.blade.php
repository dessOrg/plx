<div class="navigation-mobile">
<div>
<i class="iconic iconic-close" id="mobileNav2"></i>
</div>
<ul>
<li><a href="{{ url('/')}}">Home</a></li>
<li class="menu-item-has-children"><a href="{{ url('/properties')}}">Properties</a>
<ul class="sub-menu">
<li><a href="{{ url('/properties')}}">Property List</a></li>
@if(Auth::guest())
@else
@if(Auth::user()->role === 'Admin')
<li><a href="{{ url('/pending')}}">Pending Properties</a></li>
@endif
@endif
</ul>
</li>
<li class="menu-item-has-children"><a href="#">Sell</a>
<ul class="sub-menu">
 <li><a href="{{ url('/sellplot')}}">Plot</a></li>
 <li><a href="{{ url('/sellappertment')}}">Appertment/House</a></li>
</ul>
</li>
<li class="menu-item-has-children"><a href="#">Blog</a>
<ul class="sub-menu">
<li><a href="#">Blog List</a>
<ul class="dir-right">
 <li><a href="blog.html">Masonory Layout</a></li>
 <li><a href="blog-list-row.html">Single Row Layout</a></li>
</ul>
</li>
<li><a href="#">Blog Single Page</a>
<ul class="dir-right">
 <li><a href="blog-details.html">With image</a></li>
 <li><a href="blog-details-video.html">With Video</a></li>
</ul>
</li>
</ul>
</li>
<li><a href="{{url('/agents')}}">Agents</a></li>
@if(Auth::guest())
<li class="menu-item-has-children"><a href="#">Pages</a>
<ul class="dir-right level-1 sub-menu">
<li><a href="{{ url('/login')}}">Login</a></li>
<li><a href="{{ url('/register')}}">Register</a></li>
@else
<li class="menu-item-has-children"><a href="#">{{Auth::user()->fname}}</a>
<ul class="dir-right level-1 sub-menu">
<li><a href="{{ url('/logout')}}">Logout</a></li>
@endif
</ul>
</li>
</ul>
</ul>

</div>

<div class="wrap">
<!-- Header  -->
<header class="main-header header-common" style="background-image: url(/images/banner-1.jpg);">

<div class="header-content">
<div class="navigation-bar"><div class="container">
<div class="logo wow flipInX" data-wow-delay="200ms">
<a href="{{ url('/')}}"><img src="/images/logo.png" height="120" width="100" alt=""></a>
</div>
<div class="navigation">
<a href="#" class="navigation-button" id="mobileNav">
  <i class="iconic iconic-menu"></i>
</a>
 <ul>
<li><a href="{{ url('/')}}">Home</a></li>
<li class="menu-item-has-children"><a href="{{ url('/properties')}}">Properties</a>
<ul class="sub-menu">
<li><a href="{{ url('/properties')}}">Property List</a></li>
@if(Auth::guest())
@else
@if(Auth::user()->role === 'Admin')
<li><a href="{{ url('/pending')}}">Pending Properties</a></li>
@endif
@endif
</ul>
</li>
<li class="menu-item-has-children"><a href="#">Sell</a>
<ul class="sub-menu">
  <li><a href="{{ url('/sellplot')}}">Plot</a></li>
  <li><a href="{{ url('/sellappertment')}}">Appertment/House</a></li>
</ul>
</li>
<li class="menu-item-has-children"><a href="#">Blog</a>
<ul class="sub-menu">
<li><a href="#">Blog List</a>
<ul class="dir-right">
  <li><a href="blog.html">Masonory Layout</a></li>
  <li><a href="blog-list-row.html">Single Row Layout</a></li>
</ul>
</li>
<li><a href="#">Blog Single Page</a>
 <ul class="dir-right">
  <li><a href="blog-details.html">With image</a></li>
  <li><a href="blog-details-video.html">With Video</a></li>
</ul>
</li>
</ul>
</li>
<li><a href="{{url('/agents')}}">Agents</a></li>
@if(Auth::guest())
<li class="menu-item-has-children"><a href="#">Pages</a>
<ul class="dir-right level-1 sub-menu">
<li><a href="{{ url('/login')}}">Login</a></li>
<li><a href="{{ url('/register')}}">Register</a></li>
@else
<li class="menu-item-has-children"><a href="#">{{Auth::user()->fname}}</a>
<ul class="dir-right level-1 sub-menu">
<li><a href="{{ url('/logout')}}">Logout</a></li>
@endif
</ul>
</li>
</ul>
</ul>

</div>
</div>

</div>
</div>
</header>
