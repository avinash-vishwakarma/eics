<x-layouts.root-layout>

    @slot('page_description')
    <meta name="description" content="EICS Group of Companies provides integrated design and engineering consultancy services for Iron & Steel plants in India. Founded by Mr. S. N. Swamy in 1997, EICS specializes in project planning, design, and detailed engineering from concept to commissioning for projects like Sponge Iron plants, Steel Melting Shops, Power Plants, Blast Furnaces, Rolling Mills, and more. With a team of 200+ professionals, EICS leverages state-of-the-art technologies and the latest trends to deliver customized solutions for every project.">
    @endslot

    <x-includes.header/>

         <!--<< Breadcrumb Section Start >>-->
         <div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{ asset("img/hero/breadcrumb-bg.jpg") }}');">
            <div class="mask-shape">
                <img src="{{ asset("img/mask-shape.png") }}" alt="shape-img">
            </div>
            <div class="container">
                <div class="page-heading">
                    <h1>Contact Us</h1>
                    <ul class="breadcrumb-items">
                        <li>
                            <a href="index.html">
                            Home Page
                            </a>
                        </li>
                        <li>
                            <i class="fa-solid fa-chevron-right"></i>
                        </li>
                        <li>
                            Contact Us
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Contact Info Section Start -->
        <section class="contact-info-area fix section-padding">
            <div class="container">
                <div class="contact-info-wrapper-2">
                    <div class="row g-4">
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="contact-info-items">
                                <div class="icon">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="content">
                                    <h3>Phone & Fax</h3>
                                    <ul>
                                        <li>Mobile : <a href="tel:+1979056780">+197 -90 - 56 - 780</a></li>
                                        <li>Fax : <a href="tel:+442081234567">+44-208-1234567</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                            <div class="contact-info-items">
                                <div class="icon">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div class="content">
                                    <h3>Mail Address</h3>
                                    <ul>
                                        <li><a href="#0">Info.company@gmail.com</a></li>
                                        <li><a href="#0">Info.company@yahoo.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="contact-info-items">
                                <div class="icon">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="content">
                                    <h3>Our Location</h3>
                                    <ul>
                                        <li>Mobile : 85 Ketch Harbour</li>
                                        <li>RoadBensalem, PA 19020</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".9s">
                            <div class="contact-info-items">
                                <div class="icon">
                                    <i class="fa-solid fa-clock"></i>
                                </div>
                                <div class="content">
                                    <h3>Office Hour</h3>
                                    <ul>
                                        <li>Sun - Thu 09 am - 06pm</li>
                                        <li>Fri - Sat 4 pm - 10pm</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section Start -->
        <section class="contact-section fix section-padding pt-0">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="map-items">
                            <div class="googpemap">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6678.7619084840835!2d144.9618311901502!3d-37.81450084255415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b4758afc1d%3A0x3119cc820fdfc62e!2sEnvato!5e0!3m2!1sen!2sbd!4v1641984054261!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="contact-form-items">
                            <h2>Leave A Message</h2>
                            <form action="https://eaglestheme.com/html/industril/contact.php" id="contact-form" method="POST">
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <div class="form-clt">
                                            <input type="text" name="name" id="name" placeholder="Name" class="active">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-clt">
                                            <input type="text" name="email" id="email2" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-clt">
                                            <div class="nice-select" tabindex="0">
                                                <span class="current">
                                                Subject
                                                </span>
                                                <ul class="list">
                                                    <li data-value="1" class="option selected focus">
                                                        Service
                                                    </li>
                                                    <li data-value="1" class="option">
                                                        Pricing
                                                    </li>
                                                    <li data-value="1" class="option">
                                                        Support
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-clt">
                                            <textarea name="message" id="message" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <button type="submit" class="theme-btn-2 padding-style">
                                            Send Message 
                                        <span class="shape-img">
                                        <img src="{{ asset("img/arrow-shape.png") }}" alt="shape-img">
                                        </span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>




    <x-includes.footer/>

    

</x-layouts.root-layout>