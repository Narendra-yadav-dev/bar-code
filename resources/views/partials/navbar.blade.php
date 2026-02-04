<!-- partial:partials/_navbar.html -->
<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
    <a class="navbar-brand brand-logo" href="{{route('dashbaord')}}"><img src="{{ asset('public/images/logo.svg') }}" alt="logo"></a>
    <a class="navbar-brand brand-logo-mini" href="{{route('dashbaord')}}">
      <img src="{{ asset('public/images/logo-mini.svg') }}" alt="logo">

    </a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-stretch">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="mdi mdi-menu"></span>
    </button>

    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item nav-profile dropdown">
        <a class="nav-link" href="#">
          <div class="nav-profile-img">
            <img src="{{ asset('public/images/faces/face1.jpg') }}" alt="image">
            <span class="availability-status online"></span>
          </div>
        </a>
      </li>
    </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="mdi mdi-menu"></span>
    </button>
  </div>
</nav>