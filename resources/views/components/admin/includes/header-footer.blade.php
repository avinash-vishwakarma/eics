<div class="mobile-search">
    <form action="https://demo.dashboardmarket.com/" class="search-form">
      <img src="{{ asset("admin/img/svg/search.svg") }}" alt="search" class="svg" />
      <input
        class="form-control me-sm-2 box-shadow-none"
        type="search"
        placeholder="Search..."
        aria-label="Search"
      />
    </form>
</div>
  <div class="mobile-author-actions"></div>
  <header class="header-top">
    <nav class="navbar navbar-light">
      <div class="navbar-left">
        <div class="logo-area">
          <a href="#" class="sidebar-toggle">
            <img class="svg" src="{{ asset("admin/img/svg/align-center-alt.svg") }}" alt="img"
          /></a>
          <a class="navbar-brand" href="{{ route("admin.dashboard") }}">
            <img class="dark" style="height: 50px;" src="{{ asset("img/logo/logo.svg") }}" alt="logo" />
            <img class="light" style="height: 50px;" src="{{ asset("img/logo/logo.svg") }}" alt="logo" />
          </a>
        </div>
      </div>

      <div class="navbar-right">
        <ul class="navbar-right__menu">
          <li class="nav-author">
            <div class="dropdown-custom">
              <a href="javascript:;" class="nav-item-toggle"
                ><img src="{{ asset("admin/img/author-nav.jpg") }}" alt class="rounded-circle" />
                <span class="nav-item__title"
                  >Danial<i class="las la-angle-down nav-item__arrow"></i
                ></span>
              </a>
              <div class="dropdown-parent-wrapper">
                <div class="dropdown-wrapper">
                  <div class="nav-author__info">
                    <div class="author-img">
                      <img
                        src="{{ asset("admin/img/author-nav.jpg") }}"
                        alt
                        class="rounded-circle"
                      />
                    </div>
                    <div>
                      <h6>Rabbi Islam Rony</h6>
                      <span>UI Designer</span>
                    </div>
                  </div>
                  <div class="nav-author__options">
                    <ul>
                      <li>
                        <a href> <i class="uil uil-user"></i> Profile</a>
                      </li>
                      <li>
                        <a href>
                          <i class="uil uil-setting"></i>
                          Settings</a
                        >
                      </li>
                      <li>
                        <a href>
                          <i class="uil uil-key-skeleton"></i> Billing</a
                        >
                      </li>
                      <li>
                        <a href>
                          <i class="uil uil-users-alt"></i> Activity</a
                        >
                      </li>
                      <li>
                        <a href> <i class="uil uil-bell"></i> Help</a>
                      </li>
                    </ul>
                    <a href="{{ route("admin.logout") }}" class="nav-author__signout">
                      <i class="uil uil-sign-out-alt"></i> Sign Out</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>

        <div class="navbar-right__mobileAction d-md-none">
          <a href="#" class="btn-search">
            <img
              src="{{ asset("admin/img/svg/search.svg") }}"
              alt="search"
              class="svg feather-search" />
            <img src="{{ asset("admin/img/svg/x.svg") }}" alt="x" class="svg feather-x"
          /></a>
          <a href="#" class="btn-author-action">
            <img
              class="svg"
              src="{{ asset("admin/img/svg/more-vertical.svg") }}"
              alt="more-vertical"
          /></a>
        </div>
      </div>
    </nav>
  </header>
  <main class="main-content">
    <div class="sidebar-wrapper">
      <div class="sidebar sidebar-collapse" id="sidebar">
        <div class="sidebar__menu-group">
          <ul class="sidebar_nav">
            <li>
              <a href="{{ route("admin.dashboard") }}">
              <span class="nav-icon">
                <iconify-icon icon="material-symbols:dashboard"></iconify-icon>
              </span>
              <span class="menu-text">Dashboard</span>
              </a>
            </li>

            <x-admin.ui.services-nav-links/>

            <x-admin.ui.project-nav-links/>


          </ul>
        </div>
      </div>
    </div>
    <div class="contents">
      {{ $slot }}
    </div>
    <footer class="footer-wrapper">
      <div class="footer-wrapper__inside">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <div class="footer-copyright">
                <p><span>© 2023</span><a href="#">Sovware</a></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="footer-menu text-end">
                <ul>
                  <li>
                    <a href="#">About</a>
                  </li>
                  <li>
                    <a href="#">Team</a>
                  </li>
                  <li>
                    <a href="#">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </main>
  <div id="overlayer">
    <div class="loader-overlay">
      <div class="dm-spin-dots spin-lg">
        <span class="spin-dot badge-dot dot-primary"></span>
        <span class="spin-dot badge-dot dot-primary"></span>
        <span class="spin-dot badge-dot dot-primary"></span>
        <span class="spin-dot badge-dot dot-primary"></span>
      </div>
    </div>
  </div>
  <div class="overlay-dark-sidebar"></div>
