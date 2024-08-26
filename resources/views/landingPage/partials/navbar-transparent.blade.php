<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="img/logo.png" alt=""> -->
        <h1 class="sitename text-white">TASTY FOOD</h1>
        <span>.</span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route("landingPage")}}" class="{{ request()->routeIs('landingPage') ? 'active' : '' }} text-white">HOME<br></a></li>
          <li><a href="{{ route("about")}}" class="{{ request()->routeIs('about') ? 'active' : '' }} text-white">TENTANG</a></li>
          <li><a href="{{ route("news")}}" class="{{ request()->routeIs('news') ? 'active' : '' }} text-white">BERITA</a></li>
          <li><a href="{{ route("gallery")}}"  class="{{ request()->routeIs('gallery') ? 'active' : '' }} text-white">GALERI</a></li>
          <li><a href="{{ route("contact")}}" class="{{ request()->routeIs('contact') ? 'active' : '' }} text-white">KONTAK</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>