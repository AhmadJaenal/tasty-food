<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href=" {{ route("dashboard") }} ">
        <i class="mdi mdi-grid-large menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item nav-category">Landing Page</li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <i class="menu-icon mdi mdi-floor-plan"></i>
        <span class="menu-title">Content</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route("galleryDashboard") }}">Gallery</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route("newsDashboard") }}">News</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route("menuDashboard") }}">Menu</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route("contactDashboard") }}">Contact</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route("slider") }}">Slider</a></li>
        </ul>
      </div>
    </li>
  </ul>
</nav>