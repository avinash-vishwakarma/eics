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
                        <h1>Our Services</h1>
                        <ul class="breadcrumb-items">
                            <li>
                                <a href="{{ route("home") }}">
                                Home Page
                                </a>
                            </li>
                            <li>
                                <i class="fa-solid fa-chevron-right"></i>
                            </li>
                            <li>
                                Our Services
                            </li>
                            <li>
                                <i class="fa-solid fa-chevron-right"></i>
                            </li>
                            <li>
                                {{ $service->title }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


        <!-- Service Section Start -->
        <!-- Service Details Section Start -->
        <section class="service-details fix section-padding">
            <div class="container">
                <div class="services-details-wrapper">
                    <div class="row g-5">
                        <div class="col-12 col-lg-8">
                            <div class="details-image">
                                <img src="{{ asset("img/service/".$service->thumbnail) }}" alt="img">
                            </div>
                            <div class="details-content">
                                <h2>{{ $service->title }}</h2>
                                <p class="mt-3">
                                    {{ $service->shortDesc }}
                                </p>
                                {!! $service->description !!}
                                
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="main-sidebar">


                                <div class="single-sidebar-widget">
                                    <div class="wid-title">
                                        <h5>Contact Details</h5>
                                    </div>

                                    <a href="tel:+919994173687" class="theme-btn w-100 d-flex align-items-center justify-content-center">Contact Now <iconify-icon class="mx-2" icon="material-symbols:call"></iconify-icon></a>

                                    <ul class="opening-category">
                                        <li class="secondary-color justify-content-start gap-3">
                                            Call now : +91-9994173687
                                        </li>
                                    </ul>
                                </div>

                                <div class="single-sidebar-widget">
                                    <div class="wid-title">
                                        <h5>Opening Hours</h5>
                                    </div>
                                    <ul class="opening-category">
                                        <li class="secondary-color justify-content-start gap-3">
                                            <i class="fa-regular fa-clock"></i>
                                            Mon - Sat: 10.00 AM - 4.00 PM
                                        </li>
                                        <li class="secondary-color justify-content-start gap-3">
                                            <i class="fa-regular fa-clock"></i>
                                            Sun: 09.00 AM - 4.00 PM
                                        </li>
                                        <li class="secondary-color justify-content-start gap-3">
                                            <i class="fa-regular fa-clock"></i>
                                            Friday: Closed
                                        </li>
                                        <li class="secondary-color justify-content-start gap-3">
                                            <i class="fa-regular fa-clock"></i>
                                            Emergency: 24 hours
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


                <!-- Contact Us Section Start -->
                <section class="contact-info-section fix section-padding pt-2">
                    <div class="shape-image">
                        <img src="assets/img/shape.png" alt="shape-img">
                    </div>
                    <div class="container">
                        <div class="contact-info-wrapper">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-xl-5 col-lg-6">
                                    <div class="info-image">
                                        <img src="{{ asset("img/contact.png") }}" alt="img">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 mt-5 mt-lg-0">
                                    <div class="info-content">
                                        <div class="section-title">
                                            <span>Join with Us</span>
                                            <h2>Want to work together?</h2>
                                        </div>
                                        <p class="mt-4 mt-md-0">
                                            We have facility to produce advance work various industrial applications based on specially developed technol-ogy. We are also ready to developement by according to users changing needs. Infrastructure.
                                        </p>
                                        <div class="about-info-items">
                                            <a href="{{ route("contact") }}" class="theme-btn-2">
                                                Contact with Us<span class="shape-img">
                                                <img src="{{ asset("img/arrow-shape.png") }}" alt="shape-img">
                                            </span></a>
                                            <div class="call-area">
                                                <span>or Call us</span>
                                                <div class="icon">
                                                    <i class="fa-solid fa-phone-volume"></i>
                                                    <h6>
                                                        <a href="tel:+919994173687">+91-9994173687</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>




    <x-includes.footer/>

    

</x-layouts.root-layout>