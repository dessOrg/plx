<div class="navigation-mobile">
<div>
<i class="iconic iconic-close" id="mobileNav2"></i>
</div>
<ul>
<li><a href="{{ url('/')}}">Home</a></li>
<li class="menu-item-has-children"><a href="#">Properties</a>
<ul class="sub-menu">
<li><a href="{{ url('/properties')}}">Property List</a></li>
<li><a href="property-details.html">Property Details</a></li>
</ul>
</li>
<li class="menu-item-has-children"><a href="#">Pages</a>
<ul class="sub-menu">
    <li><a href="page-layout-left-sidebar.html">Sidebar Left</a></li>
    <li><a href="page-layout-right-sidebar.html">Sidebar Right</a></li>
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
<li><a href="agents.html">Agents</a>
<ul>
<li><a href="agents-details.html">Agent Details</a></li>
</ul>
</li>
<li class="menu-item-has-children"><a href="#">ShortCodes</a>
<ul class="sub-menu">
<li><a href="#">Typography And Components</a>
  <ul class="dir-right">
    <li><a href="page-typography.html">General Typography</a></li>
    <li><a href="page-heading.html">Heading</a></li>
    <li><a href="page-blockquote.html">Blockquote</a></li>
    <li><a href="page-boxshadow.html">Box Shadow</a></li>
    <li><a href="page-testimonials.html">Testimonials</a></li>
    <li><a href="page-tagline.html">Tagline Boxes</a></li>
    <li><a href="page-grid-layout.html">Grid Layout</a></li>
  </ul>
</li>
<li><a href="page-buttons.html">Buttons UI</a>
</li>
<li><a href="page-icons.html">Icons</a>
</li>
</ul>
</li>
<li class="menu-item-has-children"><a href="#">Misc</a>
<ul class="dir-right level-1 sub-menu">
<li><a href="#">Header</a>
<ul class="dir-right">
  <li><a href="header-v1.html">Header v1</a></li>
   <li><a href="header-v2.html">Header v2</a></li>
   <li><a href="banner-slider.html">Header Slider v1</a></li>
   <li><a href="banner-slider-with-caption.html">Header Slider v2</a></li>
</ul>
</li>
<li><a href="page-footer-v1.html">Foot</a></li>
</ul>
</li>
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
@elseif(Auth::user()->role === 'Admin')
<li><a href="{{ url('/pending')}}">Pending Properties</a></li>
@endif
</ul>
</li>
<li class="menu-item-has-children"><a href="#">Sell</a>
<ul class="sub-menu">
  <li><a href="{{ url('/sellappertment')}}">Plot</a></li>
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
<li><a href="agents.html">Agents</a>
<ul>
<li><a href="agents-details.html">Agent Details</a></li>
</ul>
</li>
<li class="menu-item-has-children"><a href="#">ShortCodes</a>
<ul class="sub-menu">
<li><a href="#">Typography And Components</a>
<ul class="dir-right">
  <li><a href="page-typography.html">General Typography</a></li>
  <li><a href="page-heading.html">Heading</a></li>
  <li><a href="page-blockquote.html">Blockquote</a></li>
  <li><a href="page-boxshadow.html">Box Shadow</a></li>
  <li><a href="page-testimonials.html">Testimonials</a></li>
  <li><a href="page-tagline.html">Tagline Boxes</a></li>
  <li><a href="page-grid-layout.html">Grid Layout</a></li>
</ul>
</li>
<li><a href="page-buttons.html">Buttons UI</a>
</li>
<li><a href="page-icons.html">Icons</a>
</li>
</ul>
</li>
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

</div>
</div>

</div>
</div>
</header>
