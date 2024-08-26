<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center">

        <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
            <h1 class="sitename">TASTY FOOD</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('landingPage') }}"
                        class="{{ request()->routeIs('landingPage') ? '' : '' }}">HOME<br></a></li>
                <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? '' : '' }}">TENTANG</a>
                </li>
                <li><a href="{{ route('news') }}" class="{{ request()->routeIs('news') ? '' : '' }}">BERITA</a>
                </li>
                <li><a href="{{ route('gallery') }}"
                        class="{{ request()->routeIs('gallery') ? '' : '' }}">GALERI</a></li>
                <li><a href="{{ route('contact') }}"
                        class="{{ request()->routeIs('contact') ? '' : '' }}">KONTAK</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
    </div>
</header>
