<x-off-canvas/>


<!-- Header Area Start -->
    <header>
        <div id="header-sticky" class="header-1 style-2">
          <div class="container">
            <div class="mega-menu-wrapper">
              <div class="header-main">
                <div class="header-left">
                  <div class="logo">
                    <a href="{{ route("home") }}" class="header-logo">
                      <img src="{{ asset("img/logo/logo.svg") }}" alt="eics logo" />
                    </a>
                  </div>
                  <div class="mean__menu-wrapper d-none d-lg-block">
                    <div class="main-menu">
                      <nav id="mobile-menu">
                        <ul>
                          <li>
                            <a href="{{ route("home") }}"> Home </a>
                          </li>
                          <li>
                            <a href="{{ route("about") }}"> About </a>
                            <ul class="submenu">
                              <li><a href="{{ route('about') }}">About Us</a></li>
                              <li>
                                <a href="{{ route("about.keypersons") }}"
                                  >Key Persons</a
                                >
                              </li>

                              <li>
                                <a href="{{ route('about.qualityPolicy') }}"
                                  >Quality Policy</a
                                >
                              </li>
                            </ul>
                          </li>
                          <li>
                            <a href="{{ route("services") }}"> Services </a>
                          </li>

                          <li>
                            <a href="#"> projects </a>
                            <ul class="submenu">
                              <li><a href="{{ route('project.ongoing') }}">OnGoing Projects</a></li>
                              <li>
                                <a href="{{ route("project.commissioned") }}"
                                  >Commissioned Projects</a
                                >
                              </li>
                            </ul>
                          </li>
                          <li>
                            <a href="{{ route("contactus") }}">Contact</a>
                          </li>
                        </ul>
                      </nav>
                      <!-- for wp -->
                    </div>
                  </div>
                </div>
                <div
                  class="header-right d-flex justify-content-end align-items-center"
                >
                  <div class="header-contact">
                    <div class="icon">
                      <i class="fa-solid fa-phone-volume"></i>
                    </div>
                    <a href="tel:+919994173687">+91-9994173687</a>
                  </div>
                  <div class="header__hamburger d-xl-block my-auto">
                    <div class="sidebar__toggle">
                      <img src="{{ asset("img/dot.png") }}" alt="img" />
                      <a
                        class="bar-icon d-lg-none my-auto"
                        href="javascript:void(0)"
                      >
                        <i class="fas fa-bars"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>