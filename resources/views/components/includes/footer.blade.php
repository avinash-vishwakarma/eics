    <!-- Footer Section Start -->
    <footer
      class="footer-section fix bg-cover"
      style="background-image: url('assets/img/footer-bg.jpg')"
    >
      <div class="container">
        <div class="footer-widgets-wrapper">
          <div class="row">
            <div
              class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp"
              data-wow-delay=".3s"
            >
              <div class="single-footer-widget">
                <div class="widget-head">
                  <a href="index.html">
                    <img src="{{ asset("img/logo/logo.svg") }}" alt="logo-img" />
                  </a>
                </div>
                <div class="footer-content">
                  <p>
                    EICS Group of Companies. All Rights Reserved. 
                    <br>
                    | Powered by TWS
                  </p>
                  <ul class="contact-info">
                    <li>
                      <i class="fas fa-map-marker-alt"></i>
                      Rama Valley, Bodri, Bilaspur, Chhattisgarh - 495220, India
                    </li>
                    <li>
                      <i class="fa-solid fa-phone-volume"></i>
                      <a href="tel:+919994173687">+91-99941736872</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div
              class="col-xl-4 col-lg-4 col-md-6 ps-lg-5 wow fadeInUp"
              data-wow-delay=".5s"
            >
              <div class="single-footer-widget">
                <div class="widget-head">
                  <h4>Quick Link</h4>
                </div>
                <ul class="list-area">
                  <li>
                    <a href="{{ route("about") }}">
                      <i class="fa-solid fa-chevron-right"></i>
                      About
                    </a>
                  </li>
                  <li>
                    <a href="{{ route("about.keypersons") }}">
                      <i class="fa-solid fa-chevron-right"></i>
                      Key Persons
                    </a>
                  </li>
                  <li>
                    <a href="{{ route("services") }}">
                      <i class="fa-solid fa-chevron-right"></i>
                      Services
                    </a>
                  </li>

                  <li>
                    <a href="{{ route("contactus") }}">
                      <i class="fa-solid fa-chevron-right"></i>
                      Contact Us
                    </a>
                  </li>
                </ul>
              </div>
            </div>

            <div
              class="col-xl-4 col-lg-4 col-md-6 ps-lg-5 wow fadeInUp"
              data-wow-delay=".5s"
            >
              <div class="single-footer-widget">
                <div class="widget-head">
                  <h4>About EICS</h4>
                </div>
                <ul class="list-area">
                  <li>
                    <a href="{{ route("about") }}">
                      <i class="fa-solid fa-chevron-right"></i>
                      About
                    </a>
                  </li>
                  <li>
                    <a href="{{ route("about.keypersons") }}">
                      <i class="fa-solid fa-chevron-right"></i>
                      Key Persons
                    </a>
                  </li>
                  <li>
                    <a href="{{ route("about.qualityPolicy") }}">
                      <i class="fa-solid fa-chevron-right"></i>
                      Quality Policy
                    </a>
                  </li>

                </ul>
              </div>
            </div>


          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="container">
          <div class="footer-bottom-wrapper">
            <p>© All Copyright 2024 by <a href="index.html">EICS</a></p>
          </div>
        </div>
      </div>
    </footer>